<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Floopware Jugar memorama en línea, juego de memoria">
        <meta name="author" content="Irak Quesada">
        <meta name="robots" content="index, follow">
        <link rel ="canonical" href="https://floopware.com/memorama/index.html"/>
        <title>Memorama</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
    </head>
    <body>
        <main role="main" class="container-fluid" id="app">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Juego de memorama</h1>
                    <a class="btn btn-danger mb-0" href="javascript:history.back()"><i class="dripicons-arrow-left text-white mb-0"></i> Volver </a>
                    <p>
                        <span class="h5">Intentos: </span>
                        {{intentos}}/{{MAXIMOS_INTENTOS}}&nbsp;<span class="h5">Aciertos:
                        </span> {{aciertos}}
                        <br><a @click="mostrarCreditos" href="#">Acerca de</a>
                    </p>
                </div>
            </div>
            <div v-for="(fila, indiceFila) in memorama" :key="indiceFila"
                class="row">
                <div :key="indiceFila+''+indiceImagen" class="col-3"
                    v-for="(imagen, indiceImagen) in fila">
                    <div class="mb-3">
                        <img @click="voltear(indiceFila, indiceImagen)"
                            :class="{'girar': imagen.mostrar}"
                            :src="(imagen.mostrar ? imagen.ruta :
                            NOMBRE_IMAGEN_OCULTA)" class="card-img-top img-fluid
                            img-thumbnail">
                    </div>
                </div>
            </div>
        </main>
        <footer class="px-2 py-2 fixed-bottom bg-success text-white">
            <span>Created 
                <a class="text-white" href="//floopware.com">By Floopware ❤️</a>
            </span>
        </footer>
        <script src="./js/sweetalert2.all.min.js"></script>
        <script src="./js/vue.min.js"></script>
        <script src="./js/script.js"></script>
    </body>

</html>