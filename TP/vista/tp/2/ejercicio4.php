<!--
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
-->

<?php
include_once '../../estructura/cabecera-retorno.php';
?>


    <div class="container">

        <div class="col border border-secondary-subtle mt-5 mb-5 shadow-lg rounded-1">

            <h5 class="shadow-sm mb-3 py-2 px-4 bg-secondary bg-gradient bg-opacity-25 border-bottom border-secondary-subtle text-primary">
                Cinem@s
            </h5>

            <form method="post" id="formulario" action="./respuesta.php" class="needs-validation p-4" novalidate>
                <div class="row g-3">

                    <div class="row">
                        <div class="form-group col position-relative mb-3">
                            <label for="titulo" class="form-label fw-bold">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
                        </div>
                        <div class="form-group col position-relative mb-3">
                            <label for="actores" class="form-label fw-bold">Actores</label>
                            <input type="text" class="form-control" name="actores" id="actores" placeholder="Actores">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col position-relative mb-3">
                            <label for="director" class="form-label fw-bold">Director</label>
                            <input type="text" class="form-control" name="director" id="director" placeholder="Director">
                        </div>
                        <div class="form-group col position-relative mb-3">
                            <label for="guion" class="form-label fw-bold">Guión</label>
                            <input type="text" class="form-control" name="guion" id="guion" placeholder="Guión">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6 position-relative mb-3">
                            <label for="produccion" class="form-label fw-bold">Producción</label>
                            <input type="text" class="form-control" name="produccion" id="produccion">
                        </div>
                        <div class="form-group col-2 position-relative mb-3">
                            <label for="anio" class="form-label fw-bold">Año</label>
                            <input type="text" class="form-control" name="anio" id="anio">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6 position-relative mb-3">
                            <label for="nacionalidad" class="form-label fw-bold">Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad">
                        </div>
                        <div class="form-group col-4 position-relative mb-3">
                            <label for="genero" class="form-label fw-bold">Género</label>
                            <select class="form-select" id="genero" name="genero">
                                <option value="" disabled selected>Seleccione un género</option>
                                <option value="comedia">Comedia</option>
                                <option value="drama">Drama</option>
                                <option value="terror">Terror</option>
                                <option value="romanticas">Románticas</option>
                                <option value="suspenso">Suspenso</option>
                                <option value="accion">Acción</option>
                                <option value="otras">Otras</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4 position-relative mb-3">
                            <label for="duracion" class="form-label fw-bold">Duración</label>
                            <input type="text" class="form-control" name="duracion" id="duracion">
                            <span>(minutos)</span>
                        </div>
                        <div class="form-group col-7 position-relative mb-3">
                            <label for="restricciones" class="form-label fw-bold">Restricciones de edad</label>
                            <div class="row">
                                <div class="form-check col">
                                    <input type="radio" class="form-check-input" name="restricciones" id="todos" value="apta para todo público">
                                    <label for="todos" class="form-check-label">Todos los públicos</label>
                                </div>
                                <div class="form-check col">
                                    <input type="radio" class="form-check-input" name="restricciones" id="mayores7" value="mayores de 7 años">
                                    <label for="mayores7" class="form-check-label">Mayores de 7 años</label>
                                </div>
                                <div class="form-check col">
                                    <input type="radio" class="form-check-input" name="restricciones" id="mayores18" value="mayores de 18 años">
                                    <label for="mayores18" class="form-check-label">Mayores de 18 años</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group position-relative mb-3">
                            <label for="sinopsis" class="form-label fw-bold">Sinópsis</label>
                            <textarea name="sinopsis" id="sinopsis" class="form-control col-12"></textarea>
                        </div>
                    </div>

                    <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                        <input type="reset" value="Borrar" class="btn btn-light">
                    </div>
                </div>
            </form>

        </div>

    </div>
    <script src="../../js/validacion.js"></script>

    
    <?php
    include_once '../../estructura/pie.php';
    ?>

    <!--
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>

    


</body>

</html>
-->