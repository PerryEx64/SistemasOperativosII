<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Virtualizacion
        </title>

        <!-- Fonts -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            #containerTitulo{
                text-align: center;
                height: 250px;
            }

            #principal{
                font-family: "Agency FB", serif;
                font-size: 75px;
                text-align: center;
            }

            #subTitulo{
                font-family: Apple;
                font-size: 25px;
                text-align: center;
            }

            #principalSub{
                font-family: "Agency FB", serif;
                font-size: 50px;
                text-align: center;
            }

            #subTituloSub{
                font-family: Apple;
                font-size: 20px;
                text-align: justify;
            }

            .containerCards{
                margin-left: 20px;
                margin-right: 20px;
            }

            #tipo{
                margin-right: auto;
                margin-left: auto;

                height: 100px;
                width: 90%;
            }

            #articulo{
                font-family: "Bell MT";
                font-size: 20px;
                text-align: justify;
            }

            /*#containerInfo{*/
            /*    background-color: yellow;*/
            /*}*/
        </style>
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Grupo No.1 Sistemas Operativos II</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

            </div>
        </div>
    </nav>
    <div id="containerTitulo" class="container bg-white mt-4 rounded-3">
        <div id="principal">Virtualización</div>
        <p id="subTitulo" class="mt-2">Utiliza el software para imitar las
            características del hardware y crear un
            sistema informático virtual. Esto permite
            a las organizaciones de TI ejecutar más de
            un sistema virtual, y múltiples sistemas
            operativos y aplicaciones, en un solo
            servidor.
        </p>
        <a href="https://www.youtube.com/watch?v=L2wlRkkOIDU" class="btn btn-primary">Video: ¿Qué es la virtualización?</a>
    </div>

    <div class="containerCards mt-2">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Arial Black'">Ventajas de la Virtualización</h5>
                        <p class="card-text">1) Reduce riegos y costes</p>
                        <p class="card-text">2) Ofrece la posibilidad de monitorización</p>
                        <p class="card-text">3) Habilita la migración en caliente de máquinas virtuales</p>
                        <p class="card-text">4) Mejora los procesos de clonación y copias de seguridad</p>
                        <a href="https://openwebinars.net/blog/virtualizacion-que-es-para-que-sirve-y-ventajas/" class="btn btn-primary">Mas...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Arial Black'" >Desventajas de la Virtualización</h5>
                        <p class="card-text">1) En caso de que la empresa sea pequeña, la gran inversión que hay que realizar en software</p>
                        <p class="card-text">2) El rendimiento de las máquinas virtuales es un poco más bajo</p>
                        <p class="card-text">3) Algunos proveedores de máquinas virtuales cobran licencias por cada máquina virtual</p>
                        <p class="card-text">4) Cuando se implementa la virtualización en una empresa es necesario que los administradores sepan utilizar las herramientas</p>
                        <a href="https://openwebinars.net/blog/virtualizacion-que-es-para-que-sirve-y-ventajas/" class="btn btn-primary">Mas...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tipo">
        <div id="principalSub">¿Cómo funciona la Virtualización?</div>
        <article id="articulo" class="mb-3">
            <p>Alta disponibilidad, alto rendimiento y gran capacidad de almacenamiento, son cualidades que caracterizan la virtualización.¿Cómo funciona? La virtualización ejecuta los procesos en una máquina física de otras máquinas virtuales; es decir; consigue que una computadora trabaje como muchas computadoras juntas; ¿de qué manera?: el software o hipervisor separa el sistema operativo de las aplicaciones del hardware. </p>
            <a href="https://www.vmware.com/latam/solutions/virtualization.html#:~:text=La%20virtualización%20utiliza%20el%20software,aplicaciones%2C%20en%20un%20solo%20servidor." class="btn btn-primary text-center ">Mas...</a>
        </article>

        <div  class="container border border-4 rounded-3 ">
            <div class="row">
                <div id="izquierda" class="col">
                    <div id="principalSub">Tipos de Virtualización</div>
                    <p id="subTituloSub">
                        1) Virtualización de servidores
                        <br>
                        2) Virtualización de redes
                        <br>
                        3) Virtualización de almacenamiento
                        <br>
                        4) Virtualización de escritorios
                    </p>
                    <a href="https://www.administracionderedes.com/virtualizacion/tipos-de-virtualizacion/" class="btn btn-primary">Mas...</a>
                </div>
                <div id="derecha" class="col">
                    <div id="principalSub">Historia de la Virtualización</div>
                    <p id="subTituloSub">Aunque la virtualización data de la década de los sesenta, comenzó a adoptarse más ampliamente a principios del año 2000. Las tecnologías que posibilitaron la virtualización, como los hipervisores, se desarrollaron hace muchas décadas para permitir que varios usuarios accedieran simultáneamente a computadoras que realizaban procesamiento por lotes. El procesamiento por lotes era un tipo de informática popular en el ámbito empresarial que ejecutaba tareas rutinarias miles de veces y muy rápidamente (como las nóminas).</p>
                    <a href="https://www.redhat.com/es/topics/virtualization/what-is-virtualization" class="btn btn-primary">Mas...</a>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
