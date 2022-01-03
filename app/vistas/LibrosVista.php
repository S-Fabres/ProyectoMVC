<!DOCTYPE html>
<html lang="es">
<head>
    <title>Lista de libros</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="cuerpo">
    <table class="table-striped" border='1'>
        <thead>
            <th class="cabecera">id</th>
            <th class="cabecera">Título</th>
            <th class="cabecera">Id Autor</th>
            <th class="cabecera">Editorial</th>
            <th class="cabeceraBotones">Modificar</th>
            <th class="cabeceraBotones">Borrar</th>
        </thead>
        <tbody class="filas">
            <?php
                for ($i=0; $i< count($data); $i++){
                    print "<tr>";
                    print "<td>".$data[$i]["id"]."</td>";
                    print "<td>".$data[$i]["titulo"]."</td>";
                    print "<td>".$data[$i]["idAutor"]."</td>";
                    print "<td>".$data[$i]["editorial"]."</td>";
                    print "<td class='botonesModificar'><a href='libros/modificar/".$data[$i]["id"]."'>Modificar</a></td>";
                    print "<td class='botonesEliminar'><a href='libros/borrar/".$data[$i]["id"]."'>Borrar</a></td>";
                    print "</tr>";
                }
            ?>
        </tbody>    
    </table>
    
    <a class="btnCrearLibro" href='<?php print "libros/crea/";?>'>Crear un libro</a>
</body>
</html>