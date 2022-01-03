<!DOCTYPE html>
<html>
<head>
  <title>Guardar un libro</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form class="formulario" action='<?php print RUTA_APP."libros/crea/"; ?>' method="POST">
    <table>
      <tr><td><label for="titulo">Titulo:</label></td>
        <td><input type="text" name="titulo"></td>
      </tr>
      <tr><td><label for="idAutor">Id autor:</label></td>
        <td><input type="number" name="idAutor"></td>
      </tr>
      <tr><td><label for="editorial">Editorial:</label></td>
        <td><input type="number" name="editorial"></td>
      </tr>
      <tr><td><label for="editorial">ISDN:</label></td>
        <td><input type="text" name="isdn"></td>
      </tr>
      <tr><td>&nbsp;</td>
        <td><input type="submit" value="Guardar"></td>
      </tr>
    </table>
  </form>
  <a href="/proyectoMVC">Regresar</a>
</body>
</html>