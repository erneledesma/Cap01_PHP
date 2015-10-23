<!-- Cap01/muestra_codigo.php -->
<html>
<head>
   <title>Muestra Código</title>
</head>
<body>
<?php
  // Determinamos el fichero a mostrar
  if (empty($_GET['fich']))
    $fichero = basename($_SERVER['SCRIPT_NAME']);
  else
    $fichero = $_GET['fich'];

  // Si existe el fichero se muestra su contenido
  if (file_exists($fichero))
    {
    echo "Contenido del fichero: <b>$fichero</b>\n<hr />\n";
    show_source($fichero);
    }
  else
    echo "El fichero '$fichero' no existe";
?>
</body>
</html>