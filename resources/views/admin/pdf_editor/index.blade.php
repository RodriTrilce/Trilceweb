@extends('admin.layouts.template')

@section('content')
    <h1>Editor de PDF - Agregar Hipervínculos</h1>

    <div id="upload-area"
        style="border: 2px dashed #ccc; padding: 20px; text-align: center; margin-bottom: 20px; background-color: #f9f9f9;">
        <p>Arrastra y suelta un archivo PDF aquí o</p>
        <input type="file" id="upload-pdf" accept="application/pdf">
        <div id="file-info" style="margin-top: 10px; font-style: italic;"></div>
    </div>

    <div id="controls" style="margin-bottom: 20px; display: none;">
        <button id="export-pdf" class="btn btn-primary">Exportar PDF</button>
    </div>

    <div id="pdf-container" style="overflow-y: auto; max-height: 80vh;"></div>

    <div class="overlay" id="overlay"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; display: none;">
    </div>
    <div class="modal" id="modal"
        style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 5px; z-index: 1001; display: none;">
        <label for="link-type">Tipo de Enlace:</label>
        <select id="link-type">
            <option value="url">URL Externa</option>
            <option value="email">Correo Electrónico</option>
            <option value="phone">Número Telefónico</option>
        </select>
        <br><br>
        <label for="link-input">Enlace:</label>
        <input type="text" id="link-input" placeholder="https://example.com">
        <br><br>
        <button id="save-link" type="button">Guardar</button>
        <button id="cancel-link" type="button">Cancelar</button>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script>
        // Variable global para la anotación actual
        let currentAnnotationElement = null;
        let pdfDoc = null,
            scale = 1.5,
            annotations = {}; // Guardar anotaciones por página
        let uploadedFileName = "pdf_con_enlaces.pdf"; // Nombre por defecto

        // Contenedor principal donde colocaremos todos los canvas
        const pdfContainer = document.getElementById("pdf-container");
        const uploadArea = document.getElementById("upload-area");
        const fileInput = document.getElementById("upload-pdf");
        const fileInfo = document.getElementById("file-info");
        const controlsDiv = document.getElementById("controls");

        // Añadir estilos CSS para resaltar las anotaciones al pasar el cursor
        const style = document.createElement('style');
        style.textContent = `
            .link-editable:hover {
                border: 2px solid red !important;
                background-color: rgba(255, 0, 0, 0.2) !important;
            }
        `;
        document.head.appendChild(style);

        // Función para mostrar notificaciones
        function showNotification(message, isSuccess = true) {
            const notification = document.createElement('div');
            notification.textContent = message;
            notification.style.position = 'fixed';
            notification.style.top = '20px';
            notification.style.right = '20px';
            notification.style.padding = '10px 20px';
            notification.style.borderRadius = '5px';
            notification.style.backgroundColor = isSuccess ? '#4CAF50' : '#F44336';
            notification.style.color = 'white';
            notification.style.zIndex = '9999';

            document.body.appendChild(notification);

            // Eliminar después de 5 segundos
            setTimeout(() => {
                notification.style.opacity = '0';
                notification.style.transition = 'opacity 0.5s';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 500);
            }, 5000);
        }

        // Función para procesar el archivo PDF
        function processPDF(file) {
            if (file.type !== "application/pdf") {
                alert("Por favor, sube un archivo PDF válido.");
                return;
            }

            uploadedFileName = file.name;
            fileInfo.textContent = `Archivo cargado: ${file.name}`;
            controlsDiv.style.display = "block";

            const fileReader = new FileReader();
            fileReader.readAsArrayBuffer(file);
            fileReader.onload = function() {
                const pdfData = new Uint8Array(fileReader.result);

                // Actualizamos pdfBytes para exportarlo correctamente
                window.pdfBytes = pdfData;

                pdfjsLib.getDocument({
                    data: pdfData
                }).promise.then(pdf => {
                    pdfDoc = pdf;
                    const totalPages = pdf.numPages;

                    // Renderizar todas las páginas
                    renderAllPages(totalPages).then(() => {
                        // Una vez que se han renderizado todas las páginas, buscar enlaces existentes
                        extractExistingLinks(pdf).then(() => {
                            console.log("Análisis de enlaces existentes completado");
                        }).catch(error => {
                            console.error("Error al extraer enlaces existentes:", error);
                        });
                    });
                }).catch(error => {
                    console.error("Error al cargar el PDF:", error);
                    fileInfo.textContent = "Error al cargar el PDF. Por favor, intenta con otro archivo.";
                });
            };
        }

        // Extraer enlaces existentes del PDF
        async function extractExistingLinks(pdfDoc) {
            console.log("Buscando enlaces existentes en el PDF...");
            let totalLinks = 0;

            for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {
                try {
                    const page = await pdfDoc.getPage(pageNum);
                    const pageAnnotations = await page.getAnnotations();

                    const linkAnnotations = pageAnnotations.filter(a => a.subtype === 'Link');
                    totalLinks += linkAnnotations.length;

                    if (linkAnnotations.length > 0) {
                        console.log(`Página ${pageNum}: Se encontraron ${linkAnnotations.length} enlaces`);

                        // Procesar cada enlace encontrado
                        for (const linkAnnotation of linkAnnotations) {
                            if (linkAnnotation.url) {
                                const rect = linkAnnotation.rect; // [x1, y1, x2, y2]
                                const viewport = page.getViewport({
                                    scale
                                });

                                // Convertir coordenadas PDF a coordenadas de canvas
                                const [x1, y1, x2, y2] = rect;

                                // PDF usa coordenadas desde la esquina inferior izquierda
                                // Necesitamos convertirlas a coordenadas desde la esquina superior izquierda
                                const pdfHeight = viewport.height / scale;

                                // Convertir coordenadas teniendo en cuenta la escala
                                const left = x1 * scale;
                                const top = (pdfHeight - y2) * scale;
                                const width = (x2 - x1) * scale;
                                const height = (y2 - y1) * scale;

                                // Determinar el tipo de enlace
                                let linkType = 'url';
                                if (linkAnnotation.url.startsWith('mailto:')) {
                                    linkType = 'email';
                                } else if (linkAnnotation.url.startsWith('tel:')) {
                                    linkType = 'phone';
                                }

                                // Guardar la anotación encontrada
                                if (!annotations[pageNum]) {
                                    annotations[pageNum] = [];
                                }

                                annotations[pageNum].push({
                                    left,
                                    top,
                                    width,
                                    height,
                                    url: linkAnnotation.url,
                                    type: linkType
                                });

                                // Buscar el contenedor de la página
                                const pageContainer = document.querySelector(`.page-container[data-page="${pageNum}"]`);
                                if (pageContainer) {
                                    // Crear la anotación visual
                                    createAnnotation(
                                        left, top, width, height,
                                        linkAnnotation.url, linkType,
                                        pageNum, pageContainer
                                    );
                                }
                            }
                        }
                    }
                } catch (error) {
                    console.error(`Error al procesar enlaces en página ${pageNum}:`, error);
                }
            }

            if (totalLinks > 0) {
                showNotification(`Se encontraron ${totalLinks} enlaces en el PDF.`);
            }
        }

        // Configurar eventos de arrastrar y soltar
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            uploadArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight() {
            uploadArea.style.borderColor = '#2196F3';
            uploadArea.style.backgroundColor = '#e3f2fd';
        }

        function unhighlight() {
            uploadArea.style.borderColor = '#ccc';
            uploadArea.style.backgroundColor = '#f9f9f9';
        }

        uploadArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const file = dt.files[0];

            if (file) {
                processPDF(file);
            }
        }

        // Mantener el input file funcionando también
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                processPDF(file);
            }
        });

        async function renderAllPages(totalPages) {
            // Limpiar el contenedor
            pdfContainer.innerHTML = '';

            // Limpiar anotaciones al cargar un nuevo PDF
            annotations = {};

            for (let pageNum = 1; pageNum <= totalPages; pageNum++) {
                // Crear un contenedor para cada página
                const pageContainer = document.createElement("div");
                pageContainer.classList.add("page-container");
                pageContainer.dataset.page = pageNum;
                pageContainer.style.position = "relative";
                pageContainer.style.marginBottom = "20px";

                // Crear un canvas para cada página
                const canvas = document.createElement("canvas");
                canvas.id = `pdf-canvas-${pageNum}`;
                canvas.classList.add("pdf-canvas");

                // Añadir el canvas al contenedor de página
                pageContainer.appendChild(canvas);

                // Añadir el contenedor de página al contenedor principal
                pdfContainer.appendChild(pageContainer);

                // Renderizar la página en su canvas
                await renderPage(pageNum, canvas, pageContainer);

                // Añadir eventos para crear anotaciones en esta página
                addAnnotationEvents(canvas, pageNum, pageContainer);
            }
        }

        async function renderPage(pageNum, canvas, pageContainer) {
            const page = await pdfDoc.getPage(pageNum);
            const ctx = canvas.getContext("2d");

            const viewport = page.getViewport({
                scale
            });
            canvas.width = viewport.width;
            canvas.height = viewport.height;

            // Establecer dimensiones del contenedor de página
            pageContainer.style.width = `${viewport.width}px`;
            pageContainer.style.height = `${viewport.height}px`;

            const renderContext = {
                canvasContext: ctx,
                viewport: viewport
            };

            await page.render(renderContext).promise;

            // Dibujar anotaciones existentes para esta página
            drawAnnotations(pageNum, pageContainer);
        }

        function drawAnnotations(pageNum, pageContainer) {
            if (annotations[pageNum]) {
                annotations[pageNum].forEach(({
                    left,
                    top,
                    width,
                    height,
                    url,
                    type
                }) => {
                    createAnnotation(left, top, width, height, url, type, pageNum, pageContainer);
                });
            }
        }

        function createAnnotation(left, top, width, height, url, type, pageNum, container) {
            let annotation = document.createElement("div");
            annotation.classList.add("link-editable");
            annotation.style.position = "absolute";
            annotation.style.left = `${left}px`;
            annotation.style.top = `${top}px`;
            annotation.style.width = `${width}px`;
            annotation.style.height = `${height}px`;
            annotation.style.border = "2px dashed blue";
            annotation.style.backgroundColor = "rgba(0, 0, 255, 0.1)";
            annotation.style.cursor = "move";
            annotation.dataset.href = url;
            annotation.dataset.type = type;
            annotation.dataset.page = pageNum;

            // Tooltip
            annotation.title = `Tipo: ${type} \n Enlace: ${url}`;

            // Editar con clic derecho
            annotation.addEventListener("contextmenu", function(e) {
                e.preventDefault();
                currentAnnotationElement = annotation;

                document.getElementById("link-type").value = type;
                document.getElementById("link-input").value = url;

                document.getElementById("overlay").style.display = "block";
                document.getElementById("modal").style.display = "block";
            });

            // Eliminar anotación con Alt+Click
            annotation.addEventListener("click", function(e) {
                if (e.altKey) {
                    e.preventDefault();

                    // Eliminar del arreglo de anotaciones
                    if (annotations[pageNum]) {
                        const index = annotations[pageNum].findIndex(a =>
                            a.url === url &&
                            Math.abs(a.left - left) < 20 &&
                            Math.abs(a.top - top) < 20
                        );

                        if (index !== -1) {
                            annotations[pageNum].splice(index, 1);
                        }
                    }

                    // Eliminar el elemento del DOM
                    annotation.remove();
                }
            });

            container.appendChild(annotation);

            // Asegurarse de que jQuery UI esté completamente cargado
            if ($.ui && $.ui.draggable && $.ui.resizable) {
                try {
                    // Hacer que la anotación sea arrastrable
                    $(annotation).draggable({
                        containment: container,
                        stop: function(event, ui) {
                            // Actualizar la posición en el array
                            updateAnnotationPosition(pageNum, annotation);
                        }
                    });

                    // Hacer que la anotación sea redimensionable
                    $(annotation).resizable({
                        containment: container,
                        handles: "all",
                        stop: function(event, ui) {
                            // Actualizar el tamaño en el array
                            updateAnnotationPosition(pageNum, annotation);
                        }
                    });
                } catch (err) {
                    console.error("Error al inicializar draggable/resizable:", err);
                }
            } else {
                console.error("jQuery UI no está completamente cargado");
            }

            return annotation;
        }

        function updateAnnotationPosition(pageNum, annotation) {
            if (!annotations[pageNum]) {
                annotations[pageNum] = [];
            }

            const left = parseInt(annotation.style.left);
            const top = parseInt(annotation.style.top);
            const width = annotation.offsetWidth;
            const height = annotation.offsetHeight;
            const url = annotation.dataset.href;
            const type = annotation.dataset.type;

            // Buscar y actualizar la anotación correspondiente
            let found = false;
            for (let i = 0; i < annotations[pageNum].length; i++) {
                const ann = annotations[pageNum][i];
                if (ann.url === url && Math.abs(ann.left - left) < 20 && Math.abs(ann.top - top) < 20) {
                    annotations[pageNum][i] = {
                        left,
                        top,
                        width,
                        height,
                        url,
                        type
                    };
                    found = true;
                    break;
                }
            }

            if (!found) {
                annotations[pageNum].push({
                    left,
                    top,
                    width,
                    height,
                    url,
                    type
                });
            }

            // Actualizar el tooltip
            annotation.title = `Tipo: ${type} \n Enlace: ${url}`;
        }

        function addAnnotationEvents(canvas, pageNum, container) {
            let startX, startY;
            let isDrawing = false;

            canvas.addEventListener("mousedown", function(e) {
                // Solo proceder si es clic izquierdo (button = 0)
                if (e.button !== 0) return;

                isDrawing = true;

                let rect = canvas.getBoundingClientRect();
                startX = e.clientX - rect.left;
                startY = e.clientY - rect.top;

                currentAnnotationElement = document.createElement("div");
                currentAnnotationElement.classList.add("link-editable");
                currentAnnotationElement.style.position = "absolute";
                currentAnnotationElement.style.left = `${startX}px`;
                currentAnnotationElement.style.top = `${startY}px`;
                currentAnnotationElement.style.width = "0px";
                currentAnnotationElement.style.height = "0px";
                currentAnnotationElement.style.border = "2px dashed red";
                currentAnnotationElement.style.backgroundColor = "rgba(255, 0, 0, 0.1)";
                container.appendChild(currentAnnotationElement);

                function move(e) {
                    if (!isDrawing) return;

                    let rect = canvas.getBoundingClientRect();
                    let width = e.clientX - rect.left - startX;
                    let height = e.clientY - rect.top - startY;

                    // Asegurarse de que el ancho y alto sean positivos
                    if (width < 0) {
                        currentAnnotationElement.style.left = `${startX + width}px`;
                        width = Math.abs(width);
                    }

                    if (height < 0) {
                        currentAnnotationElement.style.top = `${startY + height}px`;
                        height = Math.abs(height);
                    }

                    currentAnnotationElement.style.width = `${Math.max(width, 10)}px`;
                    currentAnnotationElement.style.height = `${Math.max(height, 10)}px`;
                }

                function stop(e) {
                    isDrawing = false;
                    document.removeEventListener("mousemove", move);
                    document.removeEventListener("mouseup", stop);

                    // Solo mostrar el modal si el área tiene un tamaño mínimo
                    const width = parseInt(currentAnnotationElement.style.width);
                    const height = parseInt(currentAnnotationElement.style.height);

                    if (width < 10 || height < 10) {
                        currentAnnotationElement.remove();
                        currentAnnotationElement = null;
                        return;
                    }

                    // Guardar la página actual para la anotación
                    currentAnnotationElement.dataset.page = pageNum;

                    // Mostrar el modal para ingresar el enlace
                    document.getElementById("overlay").style.display = "block";
                    document.getElementById("modal").style.display = "block";
                    document.getElementById("link-input").focus();
                }

                document.addEventListener("mousemove", move);
                document.addEventListener("mouseup", stop);
            });
        }

        // Función para guardar el enlace (botón Guardar)
        function saveLink() {
            let url = document.getElementById("link-input").value.trim();
            let type = document.getElementById("link-type").value;

            if (url && currentAnnotationElement) {
                const pageNum = parseInt(currentAnnotationElement.dataset.page || "1");
                const left = parseInt(currentAnnotationElement.style.left);
                const top = parseInt(currentAnnotationElement.style.top);
                const width = currentAnnotationElement.offsetWidth;
                const height = currentAnnotationElement.offsetHeight;

                if (!annotations[pageNum]) {
                    annotations[pageNum] = [];
                }

                if (type === "email" && !url.startsWith("mailto:")) {
                    url = `mailto:${url}`;
                } else if (type === "phone" && !url.startsWith("tel:")) {
                    url = `tel:${url}`;
                } else if (type === "url" && !url.startsWith("http://") && !url.startsWith("https://")) {
                    url = `https://${url}`;
                }

                // Si ya tiene una URL, actualizar en lugar de añadir
                let existingIndex = -1;
                if (currentAnnotationElement.dataset.href) {
                    existingIndex = annotations[pageNum].findIndex(ann =>
                        ann.url === currentAnnotationElement.dataset.href &&
                        Math.abs(ann.left - left) < 20 &&
                        Math.abs(ann.top - top) < 20
                    );
                }

                if (existingIndex >= 0) {
                    annotations[pageNum][existingIndex] = {
                        left,
                        top,
                        width,
                        height,
                        url,
                        type
                    };
                } else {
                    annotations[pageNum].push({
                        left,
                        top,
                        width,
                        height,
                        url,
                        type
                    });
                }

                // Actualizar la apariencia y los datos de la anotación
                currentAnnotationElement.dataset.href = url;
                currentAnnotationElement.dataset.type = type;
                currentAnnotationElement.title = `Tipo: ${type} \n Enlace: ${url}`;
                currentAnnotationElement.style.border = "2px dashed blue";
                currentAnnotationElement.style.backgroundColor = "rgba(0, 0, 255, 0.1)";

                // Añadir eventos de clic
                const savedElement = currentAnnotationElement;
                currentAnnotationElement.addEventListener("contextmenu", function(e) {
                    e.preventDefault();
                    currentAnnotationElement = savedElement;

                    document.getElementById("link-type").value = type;
                    document.getElementById("link-input").value = url;

                    document.getElementById("overlay").style.display = "block";
                    document.getElementById("modal").style.display = "block";
                });

                // Eliminar anotación con Alt+Click
                currentAnnotationElement.addEventListener("click", function(e) {
                    if (e.altKey) {
                        e.preventDefault();

                        // Eliminar del arreglo de anotaciones
                        if (annotations[pageNum]) {
                            const index = annotations[pageNum].findIndex(a =>
                                a.url === url &&
                                Math.abs(a.left - left) < 20 &&
                                Math.abs(a.top - top) < 20
                            );

                            if (index !== -1) {
                                annotations[pageNum].splice(index, 1);
                            }
                        }

                        // Eliminar el elemento del DOM
                        savedElement.remove();
                    }
                });

                // Hacer que la anotación sea arrastrable y redimensionable
                try {
                    $(currentAnnotationElement).draggable({
                        containment: `[data-page="${pageNum}"]`,
                        stop: function(event, ui) {
                            updateAnnotationPosition(pageNum, currentAnnotationElement);
                        }
                    });

                    $(currentAnnotationElement).resizable({
                        containment: `[data-page="${pageNum}"]`,
                        handles: "all",
                        stop: function(event, ui) {
                            updateAnnotationPosition(pageNum, currentAnnotationElement);
                        }
                    });
                } catch (err) {
                    console.error("Error al inicializar draggable/resizable:", err);
                }

                // Limpiar y cerrar el modal
                document.getElementById("link-input").value = "";
                document.getElementById("overlay").style.display = "none";
                document.getElementById("modal").style.display = "none";

                // Limpiar la referencia a la anotación actual
                currentAnnotationElement = null;
            } else if (currentAnnotationElement) {
                currentAnnotationElement.remove();
                currentAnnotationElement = null;
                document.getElementById("overlay").style.display = "none";
                document.getElementById("modal").style.display = "none";
            }
        }

        // Función para cancelar
        function cancelLink() {
            // Si es una nueva anotación sin url, removerla
            if (currentAnnotationElement && !currentAnnotationElement.dataset.href) {
                currentAnnotationElement.remove();
            }
            currentAnnotationElement = null;
            document.getElementById("overlay").style.display = "none";
            document.getElementById("modal").style.display = "none";
        }

        // Asignar los eventos a los botones
        document.getElementById("save-link").addEventListener("click", saveLink);
        document.getElementById("cancel-link").addEventListener("click", cancelLink);

        // Exportar PDF con hipervínculos
// Reemplaza el código problemático en el evento click del botón "export-pdf"
document.getElementById("export-pdf").addEventListener("click", async function() {
    try {
        if (!window.pdfBytes) {
            alert("Por favor, carga un PDF primero.");
            return;
        }

        const existingPdfBytes = window.pdfBytes;
        const pdfDoc = await PDFLib.PDFDocument.load(existingPdfBytes);

        // Eliminar enlaces existentes para evitar duplicados
        for (let i = 0; i < pdfDoc.getPageCount(); i++) {
            const page = pdfDoc.getPages()[i];
            
            try {
                // Obtener anotaciones de manera más directa
                const annotsObj = page.node.get(PDFLib.PDFName.of('Annots'));
                
                if (annotsObj) {
                    // Crear un array para guardar las anotaciones que queremos conservar
                    const newAnnots = [];
                    
                    // Iterar sobre las anotaciones existentes
                    for (let j = 0; j < annotsObj.size(); j++) {
                        try {
                            const annotRef = annotsObj.get(j);
                            // Si es una referencia, intentar acceder al objeto
                            const annot = annotRef instanceof PDFLib.PDFRef ? 
                                pdfDoc.context.lookup(annotRef) : annotRef;
                            
                            // Intentar obtener el subtipo
                            let isLink = false;
                            try {
                                const subtype = annot.get(PDFLib.PDFName.of('Subtype'));
                                isLink = subtype && subtype.toString() === '/Link';
                            } catch (e) {
                                // Si falla al obtener el subtipo, asumimos que no es un enlace
                                isLink = false;
                            }
                            
                            // Mantener la anotación si no es un enlace
                            if (!isLink) {
                                newAnnots.push(annotRef);
                            }
                        } catch (err) {
                            // Si hay un error al procesar esta anotación, la conservamos
                            console.warn('Error al procesar anotación:', err);
                            newAnnots.push(annotsObj.get(j));
                        }
                    }
                    
                    // Reemplazar las anotaciones con nuestro nuevo conjunto filtrado
                    page.node.set(PDFLib.PDFName.of('Annots'), pdfDoc.context.obj(newAnnots));
                }
            } catch (pageErr) {
                console.warn(`Error al procesar anotaciones en página ${i + 1}:`, pageErr);
                // Continuar con la siguiente página si hay un error
            }
        }

        // Ahora agregar nuestras propias anotaciones
        for (let pageNum in annotations) {
            const pageIndex = parseInt(pageNum) - 1;
            if (pageIndex < 0 || pageIndex >= pdfDoc.getPageCount()) {
                console.warn(`Página ${pageNum} fuera de rango, saltando...`);
                continue;
            }

            const page = pdfDoc.getPages()[pageIndex];
            const {
                width: pdfWidth,
                height: pdfHeight
            } = page.getSize();

            // Obtener el canvas correspondiente a esta página
            const canvas = document.getElementById(`pdf-canvas-${pageNum}`);
            if (!canvas) continue;

            const scaleX = pdfWidth / canvas.width;
            const scaleY = pdfHeight / canvas.height;

            for (const annotation of annotations[pageNum]) {
                try {
                    const { left, top, width, height, url } = annotation;
                    
                    if (!url) continue;

                    // Ajuste del eje Y corregido
                    const adjustedLeft = left * scaleX;
                    const adjustedTop = pdfHeight - (top * scaleY);
                    const adjustedWidth = width * scaleX;
                    const adjustedHeight = height * scaleY;

                    // Crear objeto de anotación de enlace
                    const linkAnnotation = {
                        Type: PDFLib.PDFName.of("Annot"),
                        Subtype: PDFLib.PDFName.of("Link"),
                        Rect: [
                            adjustedLeft,
                            adjustedTop - adjustedHeight,
                            adjustedLeft + adjustedWidth,
                            adjustedTop
                        ],
                        Border: [0, 0, 0],
                        A: {
                            Type: PDFLib.PDFName.of("Action"),
                            S: PDFLib.PDFName.of("URI"),
                            URI: PDFLib.PDFString.of(url),
                        },
                    };

                    // Registrar la anotación en el documento
                    const annotObj = pdfDoc.context.obj(linkAnnotation);
                    const annotRef = pdfDoc.context.register(annotObj);

                    // Obtener o crear el array de anotaciones para esta página
                    let existingAnnots = page.node.get(PDFLib.PDFName.of("Annots"));
                    if (!existingAnnots) {
                        existingAnnots = pdfDoc.context.obj([]);
                        page.node.set(PDFLib.PDFName.of("Annots"), existingAnnots);
                    }

                    // Añadir nuestra anotación
                    existingAnnots.push(annotRef);
                } catch (annotErr) {
                    console.warn(`Error al crear anotación:`, annotErr);
                }
            }
        }

        // Guardar y descargar el documento
        const pdfBytes = await pdfDoc.save();
        const blob = new Blob([pdfBytes], {
            type: "application/pdf"
        });
        const link = document.createElement("a");
        link.href = URL.createObjectURL(blob);
        link.download = uploadedFileName.replace('.pdf', '_con_enlaces.pdf');
        link.rel = "noopener noreferrer";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);

        showNotification("PDF exportado correctamente con todos los enlaces.");
    } catch (err) {
        console.error("❌ Error al exportar el PDF:", err);
        alert("Error al exportar el PDF: " + err.message);
        showNotification("Error al exportar el PDF: " + err.message, false);
    }
});

        // Agregar un listener global para la tecla suprimir (delete)
        document.addEventListener('keydown', function(e) {
            // Código 46 corresponde a la tecla Delete/Suprimir
            if (e.keyCode === 46 || e.key === 'Delete') {
                // Buscar todas las anotaciones que tengan un borde más grueso o diferente color (seleccionadas)
                const selectedAnnotations = document.querySelectorAll('.link-editable:hover');

                if (selectedAnnotations.length > 0) {
                    selectedAnnotations.forEach(annotation => {
                        // Obtener información de la anotación
                        const pageNum = parseInt(annotation.dataset.page);
                        const left = parseInt(annotation.style.left);
                        const top = parseInt(annotation.style.top);
                        const url = annotation.dataset.href;

                        // Eliminar del arreglo de anotaciones
                        if (annotations[pageNum]) {
                            const index = annotations[pageNum].findIndex(a =>
                                a.url === url &&
                                Math.abs(a.left - left) < 20 &&
                                Math.abs(a.top - top) < 20
                            );

                            if (index !== -1) {
                                annotations[pageNum].splice(index, 1);
                            }
                        }

                        // Eliminar el elemento del DOM
                        annotation.remove();
                    });
                }
            }
        });

        // Tecla ESC para cerrar el modal
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                cancelLink();
            } else if (e.key === 'Enter' && document.getElementById("modal").style.display === "block") {
                saveLink();
            }
        });
    </script>
@endsection