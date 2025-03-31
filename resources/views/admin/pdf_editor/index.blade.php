@extends('admin.layouts.template')

@section('content')
    <h1>Editor de PDF - Agregar Hipervínculos</h1>

    <div id="controls">
        <input type="file" id="upload-pdf" accept="application/pdf">
        <button id="prev-page">Página Anterior</button>
        <span id="page-info"></span>
        <button id="next-page">Página Siguiente</button>
        <button id="export-pdf">Exportar PDF</button>
    </div>

    <div id="pdf-container">
        <canvas id="pdf-canvas"></canvas>
    </div>

    <div class="overlay" id="overlay"></div>
    <div class="modal" id="modal">
        <label for="link-type">Tipo de Enlace:</label>
        <select id="link-type">
            <option value="url">URL Externa</option>
            <option value="email">Correo Electrónico</option>
            <option value="phone">Número Telefónico</option>
        </select>
        <label for="link-input">Enlace:</label>
        <input type="text" id="link-input" placeholder="https://example.com">
        <button id="save-link">Guardar</button>
        <button id="cancel-link">Cancelar</button>
    </div>
@endsection

@section('scripts')
    <script>
        const pdfUrl = "/editor-pdf/uploads/test.pdf";
        let pdfDoc = null,
            currentPage = 1,
            totalPages = 0,
            scale = 1.5,
            canvas = document.getElementById("pdf-canvas"),
            ctx = canvas.getContext("2d"),
            annotations = {}; // Guardar anotaciones por página

        document.getElementById("prev-page").addEventListener("click", () => {
            if (currentPage > 1) {
                currentPage--;
                renderPage(currentPage);
            }
        });

        document.getElementById("next-page").addEventListener("click", () => {
            if (currentPage < totalPages) {
                currentPage++;
                renderPage(currentPage);
            }
        });

        pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
            pdfDoc = pdf;
            totalPages = pdf.numPages;
            renderPage(currentPage);
        });

        function renderPage(pageNum) {
            pdfDoc.getPage(pageNum).then(page => {
                const viewport = page.getViewport({
                    scale
                });
                canvas.width = viewport.width;
                canvas.height = viewport.height;

                const renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                page.render(renderContext).promise.then(() => {
                    document.querySelectorAll(".link-editable").forEach(el => el.remove());
                    drawAnnotations(pageNum);
                });

                document.getElementById("page-info").textContent = `Página ${pageNum} de ${totalPages}`;
            });
        }

        function drawAnnotations(pageNum) {
            if (annotations[pageNum]) {
                annotations[pageNum].forEach(({
                    left,
                    top,
                    width,
                    height,
                    url,
                    type
                }) => {
                    createAnnotation(left, top, width, height, url, type, pageNum);
                });
            }
        }

        function createAnnotation(left, top, width, height, url, type, pageNum) {
            let annotation = document.createElement("div");
            annotation.classList.add("link-editable");
            annotation.style.left = `${left}px`;
            annotation.style.top = `${top}px`;
            annotation.style.width = `${width}px`;
            annotation.style.height = `${height}px`;
            annotation.dataset.href = url;
            annotation.dataset.type = type;
            annotation.dataset.page = pageNum;

            // Tooltip
            annotation.title = `Tipo: ${type} \n Enlace: ${url}`;

            // Editar con clic derecho
            annotation.addEventListener("contextmenu", function(e) {
                e.preventDefault();
                document.getElementById("overlay").style.display = "block";
                document.getElementById("modal").style.display = "block";

                document.getElementById("link-type").value = type;
                document.getElementById("link-input").value = url;

                // Al guardar, actualizar valores
                document.getElementById("save-link").onclick = function() {
                    let newUrl = document.getElementById("link-input").value.trim();
                    let newType = document.getElementById("link-type").value;

                    if (newUrl) {
                        if (newType === "email" && !newUrl.startsWith("mailto:")) {
                            newUrl = `mailto:${newUrl}`;
                        } else if (newType === "phone" && !newUrl.startsWith("tel:")) {
                            newUrl = `tel:${newUrl}`;
                        }

                        annotation.dataset.href = newUrl;
                        annotation.dataset.type = newType;
                        annotation.title = `Tipo: ${newType} \n Enlace: ${newUrl}`;
                    }
                    $("#overlay, #modal").hide();
                };
            });

            $("#pdf-container").append(annotation);
            $(annotation).draggable({
                containment: "#pdf-container"
            }).resizable();
        }

        let startX, startY, annotationElement;
        let uploadedFileName = "pdf_con_enlaces.pdf"; // Nombre por defecto


        canvas.addEventListener("mousedown", function(e) {
            let rect = canvas.getBoundingClientRect();
            startX = e.clientX - rect.left;
            startY = e.clientY - rect.top;

            annotationElement = document.createElement("div");
            annotationElement.classList.add("link-editable");
            annotationElement.style.left = `${startX}px`;
            annotationElement.style.top = `${startY}px`;
            annotationElement.style.width = "0px";
            annotationElement.style.height = "0px";
            document.getElementById("pdf-container").appendChild(annotationElement);

            function move(e) {
                let width = e.clientX - rect.left - startX;
                let height = e.clientY - rect.top - startY;
                annotationElement.style.width = `${width}px`;
                annotationElement.style.height = `${height}px`;
            }

            function stop() {
                document.removeEventListener("mousemove", move);
                document.removeEventListener("mouseup", stop);
                document.getElementById("overlay").style.display = "block";
                document.getElementById("modal").style.display = "block";
            }

            document.addEventListener("mousemove", move);
            document.addEventListener("mouseup", stop);
        });

        document.getElementById("save-link").addEventListener("click", function() {
            let url = document.getElementById("link-input").value.trim();
            let type = document.getElementById("link-type").value;

            if (url) {
                let width = annotationElement.offsetWidth;
                let height = annotationElement.offsetHeight;

                if (!annotations[currentPage]) {
                    annotations[currentPage] = [];
                }

                if (type === "email" && !url.startsWith("mailto:")) {
                    url = `mailto:${url}`;
                } else if (type === "phone" && !url.startsWith("tel:")) {
                    url = `tel:${url}`;
                }

                annotations[currentPage].push({
                    left: startX,
                    top: startY,
                    width,
                    height,
                    url,
                    type
                });
                annotationElement.dataset.href = url;
                annotationElement.dataset.type = type;

                $("#overlay, #modal").hide();
                $("#link-input").val("");

                $(annotationElement).draggable({
                    containment: "#pdf-container"
                }).resizable();
            } else {
                annotationElement.remove();
            }
        });

        // Exportar PDF con hipervínculos
        document.getElementById("export-pdf").addEventListener("click", async function() {
            try {
                const existingPdfBytes = window.pdfBytes || await fetch(pdfUrl).then(res => res.arrayBuffer());
                const pdfDoc = await PDFLib.PDFDocument.load(existingPdfBytes);

                for (let pageNum in annotations) {
                    const page = pdfDoc.getPages()[parseInt(pageNum) - 1];
                    const {
                        width: pdfWidth,
                        height: pdfHeight
                    } = page.getSize();

                    const scaleX = pdfWidth / canvas.clientWidth;
                    const scaleY = pdfHeight / canvas.clientHeight;

                    annotations[pageNum].forEach(({
                        left,
                        top,
                        width,
                        height,
                        url
                    }) => {
                        if (!url) return;

                        // 🔥 Ajuste del eje Y corregido
                        const adjustedLeft = left * scaleX;
                        const adjustedTop = pdfHeight - (top *
                            scaleY); // 🔥 Cambiado a solo `top * scaleY`
                        const adjustedWidth = width * scaleX;
                        const adjustedHeight = height * scaleY;

                        const linkAnnotation = pdfDoc.context.register(
                            pdfDoc.context.obj({
                                Type: "Annot",
                                Subtype: "Link",
                                Rect: [
                                    adjustedLeft,
                                    adjustedTop -
                                    adjustedHeight, // 🔥 Se ajusta correctamente la altura
                                    adjustedLeft + adjustedWidth,
                                    adjustedTop
                                ],
                                Border: [0, 0, 0],
                                A: {
                                    Type: "Action",
                                    S: "URI",
                                    URI: PDFLib.PDFString.of(url),
                                },
                            })
                        );

                        let existingAnnots = page.node.get(PDFLib.PDFName.of("Annots"));
                        if (!existingAnnots) {
                            existingAnnots = pdfDoc.context.obj([]);
                            page.node.set(PDFLib.PDFName.of("Annots"), existingAnnots);
                        }
                        existingAnnots.push(linkAnnotation);
                    });
                }

                const pdfBytes = await pdfDoc.save();
                const blob = new Blob([pdfBytes], {
                    type: "application/pdf"
                });
                const link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                link.download = uploadedFileName; // Usa el mismo nombre del archivo original
                link.rel = "noopener noreferrer"; // 🔥 Evita accesos inseguros
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            } catch (err) {
                console.error("❌ Error al exportar el PDF:", err);
            }
        });


        document.getElementById("upload-pdf").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                uploadedFileName = file.name; // Guardamos el nombre original con la extensión .pdf
                const fileReader = new FileReader();
                fileReader.readAsArrayBuffer(file);
                fileReader.onload = function() {
                    const pdfData = new Uint8Array(fileReader.result);


                    // ⚡ Actualizamos pdfBytes para exportarlo correctamente
                    window.pdfBytes = pdfData;

                    pdfjsLib.getDocument({
                        data: pdfData
                    }).promise.then(pdf => {
                        pdfDoc = pdf;
                        totalPages = pdf.numPages;
                        currentPage = 1; // Reiniciar a la primera página
                        renderPage(currentPage);
                    });
                };
            }
        });

        document.getElementById("cancel-link").addEventListener("click", function() {
            if (annotationElement) {
                annotationElement.remove(); // Eliminar el área de enlace creada
            }
            document.getElementById("overlay").style.display = "none";
            document.getElementById("modal").style.display = "none";
        });
    </script>
@endsection