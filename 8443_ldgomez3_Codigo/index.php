<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Trabajo Autonomo
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-kit.css" rel="stylesheet" />

</head>
<body>
  


<?php
include("include/class.figura.php");
include("include/Interface.formulas.php");
include("figuras/class.cuadrado.php");
include("figuras/class.rectangulo.php");
include("figuras/class.triangulo.php");

$objCuadrado = new cuadrado(1);
$objRectangulo = new rectangulo(1,2);
$objTriangulo = new triangulo(1,2,3);
echo figura::get_form();


?>

<!--JS-->
<script src="./assets/JS/figuras.js"></script>
</body>

</html>