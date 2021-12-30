<?php
    require_once("modelos/libro.php");

    $libro= new Libros();

    $datos= $libro->getLibros();
    var_dump($datos);

    require_once("vistas/libro.php");
?>