<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="update-order-url" content="{{ route('admin.banners.updateOrder') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.pkgd.min.css"
        rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ mix('/css/admin_main.css') }}">


    <!-- CSS adicional para mejorar el sidebar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" />

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Librerías necesarias -->
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>

    <script>
        pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.worker.min.js";
    </script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

</head>

<body>
    <div class="modal">
        <div class="modal-inner">
            <span data-modal-close data-modal-close-desing>&times;</span>
            <div class="modal-content"></div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Trilce Admin</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="/admin/salir">Salir</a>
            </li>
        </ul>
    </nav>

    <!-- Container principal -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/admin/">
                                <span data-feather="home"></span>
                                Inicio <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#recursos-humanos" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="file-text"></span>
                                Recursos humanos
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="recursos-humanos">
                                <li class="nav-item">
                                    <a href="/admin/rrhh-forms/?type=tutoras_secundaria" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Formulario: Tutoras secundaria
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/rrhh-forms/?type=docnete_parimaria_2019" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Formulario: Docentes primaria
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/email-manager">
                                <span data-feather="mail"></span>
                                Email manager
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#formularios" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="file-text"></span>
                                Formularios
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="formularios">
                                <li class="nav-item">
                                    <a href="/admin/form-sorteo" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Sorteo laptop
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/form-claves" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Claves San Marcos
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#simulacros" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="file-text"></span>
                                Academia: Simulacros
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="simulacros">
                                <li class="nav-item">
                                    <a href="/admin/simulacrum/?id=1" class="nav-link">
                                        <span data-feather="corner-down-right"></span> UNI
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/simulacrum/?id=3" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Católica
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/simulacrum/?id=2" class="nav-link">
                                        <span data-feather="corner-down-right"></span> San Marcos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/simulacrum/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Crear
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Continuar con los demás elementos del menú siguiendo el mismo patrón -->
                        <!-- Solucionarios -->
                        <li class="nav-item">
                            <a class="nav-link" href="#solucionarios" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="file-text"></span>
                                Academia: Solucionarios
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="solucionarios">
                                <li class="nav-item">
                                    <a href="/admin/solutions/?id=1" class="nav-link">
                                        <span data-feather="corner-down-right"></span> UNI
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/solutions/?id=3" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Católica
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/solutions/?id=2" class="nav-link">
                                        <span data-feather="corner-down-right"></span> San Marcos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/solutions/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Crear
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Shortlinks -->
                        <li class="nav-item">
                            <a class="nav-link" href="#shortlinks" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="link"></span>
                                Shortlinks
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="shortlinks">
                                <li class="nav-item">
                                    <a href="/admin/shortlink/" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Listar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/shortlink/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Crear
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Blog -->
                        <li class="nav-item">
                            <a class="nav-link" href="#blog" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="book-open"></span>
                                Blog
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="blog">
                                <li class="nav-item">
                                    <a href="/admin/blog/" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Listar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/blog/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Crear
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Olimpiadas matemáticas -->
                        <li class="nav-item">
                            <a class="nav-link" href="#olimpiadas" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="award"></span>
                                Olimpiadas matemáticas
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="olimpiadas">
                                <li class="nav-item">
                                    <a href="/admin/math-olympics/" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Listar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/math-olympics/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Crear
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Sedes -->
                        <li class="nav-item">
                            <a class="nav-link" href="#sedes" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="map-pin"></span>
                                Sedes
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="sedes">
                                <li class="nav-item">
                                    <a href="/admin/venue-colegio/" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Listar Colegio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/venue-colegio/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Crear Colegio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/venue-academia/" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Listar Academia
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/venue-academia/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Crear Academia
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Banners -->
                        <li class="nav-item">
                            <a class="nav-link" href="#banners" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="image"></span>
                                Banners
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="banners">
                                <li class="nav-item">
                                    <a href="/admin/banners/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Nuevo banner
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/banners/?type=index_academia" class="nav-link">
                                        <span data-feather="corner-down-right"></span> index Academia
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/banners/?type=index_colegio" class="nav-link">
                                        <span data-feather="corner-down-right"></span> index Colegio
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Popups -->
                        <li class="nav-item">
                            <a class="nav-link" href="#popups" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="maximize-2"></span>
                                Popups
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="popups">
                                <li class="nav-item">
                                    <a href="/admin/popup/" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Listar popups
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- File manager -->
                        <li class="nav-item">
                            <a class="nav-link" href="#filemanager" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="folder"></span>
                                File manager
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="filemanager">
                                <li class="nav-item">
                                    <a href="/admin/filemanager/" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Listar archivos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/filemanager/create" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Subir archivos
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Pdf Editor  -->
                        <li class="nav-item">
                            <a class="nav-link" href="#pdf-editor" data-toggle="collapse" aria-expanded="false">
                                <span data-feather="file-text"></span>
                                Pdf editor
                                <span data-feather="chevron-down" class="float-right"></span>
                            </a>
                            <ul class="collapse nav flex-column mb-2" id="pdf-editor">
                                <li class="nav-item">
                                    <a href="/admin/pdf-editor/" class="nav-link">
                                        <span data-feather="corner-down-right"></span> Editor
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Templates para Dropzone -->
    <div id="fileTemplate" style="display: none;">
        <div class="dz-preview dz-file-preview">
            <div class="dz-details">
                <div class="dz-filename"><span data-dz-name></span></div>
                <div class="dz-size" data-dz-size></div>
                <img data-dz-thumbnail />
            </div>
            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
            <div class="dz-success-mark"><span>✔</span></div>
            <div class="dz-error-mark"><span>✘</span></div>
            <div class="dz-error-message"><span data-dz-errormessage></span></div>
            <div class="dz-url">URL: <span data-dz-url></span></div>
            <div class="dz-urlcute">URL corta: <span data-dz-urlcute></span></div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Inicializar los iconos de Feather
            feather.replace();

            // Manejar la expansión y colapso de los menús
            document.querySelectorAll('.sidebar .nav-link[data-toggle="collapse"]').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                    var target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        if (target.classList.contains('show')) {
                            target.classList.remove('show');
                            this.setAttribute('aria-expanded', 'false');
                        } else {
                            target.classList.add('show');
                            this.setAttribute('aria-expanded', 'true');
                        }
                    }
                });
            });

            // Marcar como activo el elemento de menú actual basado en la URL
            var currentPath = window.location.pathname;
            document.querySelectorAll('.sidebar .nav-link').forEach(function(link) {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                    // Si es un submenú, expandir el menú padre
                    var parentMenu = link.closest('ul.collapse');
                    if (parentMenu) {
                        parentMenu.classList.add('show');
                        var parentLink = document.querySelector(`a[href="#${parentMenu.id}"]`);
                        if (parentLink) {
                            parentLink.setAttribute('aria-expanded', 'true');
                        }
                    }
                }
            });

            // Inicializar Dropzone si existe el elemento
            var dropzoneElement = document.getElementById('dropZoneForm');
            if (dropzoneElement) {
                var dropzone = new Dropzone("#dropZoneForm", {
                    paramName: "file",
                    maxFilesize: 5,
                    addRemoveLinks: true,
                    dictRemoveFile: "Eliminar",
                    previewTemplate: document.querySelector("#fileTemplate").innerHTML,
                    success: function(file, response) {
                        console.log("Respuesta del servidor:", response);
                        if (response.status == "1") {
                            var previewElement = file.previewElement;
                            if (previewElement) {
                                var urlEstaticoField = previewElement.querySelector("[data-dz-url]");
                                var urlCuteField = previewElement.querySelector("[data-dz-urlcute]");
                                if (urlEstaticoField) {
                                    urlEstaticoField.textContent = response.data.url;
                                    urlEstaticoField.setAttribute("value", response.data.url);
                                }
                                if (urlCuteField) {
                                    urlCuteField.textContent = response.data.urlcute;
                                    urlCuteField.setAttribute("value", response.data.urlcute);
                                }
                            }
                        }
                    }
                });
            }
        });
    </script>
    <script src="{{ mix('/js/admin_main.js') }}" charset="utf-8"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $("#search-input").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#my-table tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let order = [];

            let sortable = new Sortable(document.getElementById('sortable-banners'), {
                handle: '.handle', // Solo permite arrastrar desde el icono ☰
                animation: 150,
                onEnd: function() {
                    order = []; // Limpiar el array antes de actualizar

                    document.querySelectorAll("#sortable-banners tr").forEach((row, index) => {
                        order.push({
                            id: row.getAttribute("data-id"),
                            position: index + 1
                        });

                        // Actualizar la posición en la tabla sin recargar
                        row.querySelector("td:nth-child(5)").textContent = index + 1;
                    });

                    console.log("Nuevo orden registrado:", order);
                }
            });

            // Obtener URL y CSRF desde el HTML
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const updateOrderUrl = document.querySelector('meta[name="update-order-url"]').getAttribute('content');

            // Botón para actualizar el orden
            document.getElementById("saveOrderBtn").addEventListener("click", function() {
                if (order.length === 0) {
                    alert("No hay cambios en el orden.");
                    return;
                }

                if (confirm("¿Estás seguro de que quieres guardar el nuevo orden?")) {
                    document.getElementById('status-message').textContent = "Guardando...";

                    fetch(updateOrderUrl, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": csrfToken,
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                order: order
                            })
                        }).then(response => response.json())
                        .then(data => {
                            document.getElementById('status-message').textContent =
                                "¡Orden actualizado!";
                            setTimeout(() => {
                                document.getElementById('status-message').textContent = "";
                                location
                                    .reload(); // Recargar la página para reflejar los cambios
                            }, 2000);
                        }).catch(error => {
                            console.error("Error:", error);
                            document.getElementById('status-message').textContent =
                                "Error al actualizar";
                        });
                }
            });
        });
    </script>
    @yield('scripts')
</body>

</html>
