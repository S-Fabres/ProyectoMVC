<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    
</head>
<body>
    <h2>Lista de Libros Biblioteca</h2>
    <ul>
        <?php
            foreach($datos as $valor){
                print "<li>".$valor["id"]." ".$valor["titulo"]."</li>";
            }
        ?>
    </ul>
</body>
</html>