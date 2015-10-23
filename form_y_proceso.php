<!-- Cap01/form_y_proceso.php -->
<html>
<head>
   <title>Procesamiento de Pedidos</title>
</head>
<body>
<?php
  // Se comprueba si no existe la variable NombreUsuario
  if (!IsSet($_GET['NombreUsuario']))
    {
?>
<h1 align="center">Formulario de Recepción de Pedidos</h1>
  <form action="">  <!-- Este script se autoprocesa, no requiere action -->
    Nombre Usuario:
    <input type="text" name="NombreUsuario" size="20" /><br />
    Listado de libros disponibles:
    <ul>
      <li>Libro A - (Precio = 10) - Unidades:
      <input type="text" name="UnidadesA" size="2" />
      </li>
      <li>Libro B - (Precio = 12) - Unidades:
      <input type="text" name="UnidadesB" size="2" />
      </li>
    </ul>
    <div align="center"><input type="submit" value="Enviar" /></div>
  </form>
<?php 
    }
  // La variable NombreUsuario está asignada -> se procesan los datos
  else
    {
    // Primero calculamos los totales
    $SubtotalA = $_GET['UnidadesA'] * 10;
    $SubtotalB = $_GET['UnidadesB'] * 12;
    $TotalPedido = $SubtotalA + $SubtotalB;

    // Ahora mostramos los resultados
    echo '<h1 align="center">Importe del Pedido</h1>';
    echo "Pedido de: <b>$_GET[NombreUsuario]</b>\n <pre>\n";  
    echo "Libro A: <b>$_GET[UnidadesA] </b> uds. a 10 = <b>$SubtotalA</b>\n";
    echo "Libro B: <b>$_GET[UnidadesB] </b> uds. a 12 = <b>$SubtotalB</b>\n";
    echo "------------------------- \n ";
    echo "<b> TOTALES </b>           <b> $TotalPedido </b> </pre> \n";    
    }
?>
</body>
</html>
