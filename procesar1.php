<!-- Cap01/procesar1.php -->
<html>
<head>
   <title>Datos Introducidos</title>
</head>
<body>
<h1 align="center">Datos Introducidos</h1>
<?php
  echo "Pedido de: <b> ", $_GET['NombreUsuario'], "</b><br />";
  echo "Número Unidades Libro A =  <b> ", $_GET['UnidadesA'], "</b><br />";
  echo "Número Unidades Libro B =  <b> ", $_GET['UnidadesB'], "</b><br />"
?>
</body>
</html>

