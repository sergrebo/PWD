<?php
include_once "../../../configuracion.php";
include_once "../../estructura/cabecera-retorno.php";

// Instancia controlador
$controller = new TarotControlador();
$data = $controller->listarCartas();
?>

<div class="container mt-3">
    <h2>Test de API con Guzzle - Listado de Cartas de Tarot</h2>
    <pre>
        <?php var_dump($data); ?>
    </pre>
</div>

<?php include_once("../../estructura/pie.php"); ?>
