<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PrioTool</title>
  <link rel="stylesheet" href="view/assets/style.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
<?php
require_once 'controller/Productscontroller.php';

$controller = new ProductsController();
$controller->handleRequest();
?>
</body>
</html>
