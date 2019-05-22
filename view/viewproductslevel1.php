<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  <link rel="stylesheet" href="assets/style.css" type="text/css">
  </head>
  <body>
  <h1> READ Products</h1>
  <?php require 'header.php'; ?>

<a class="btncreate" href="?op=create">Create New Product</a>
<?php
require_once 'controller/productscontroller.php';

$this->htmlelements = new htmlelements();
$productsTable = $this->htmlelements->createTable($products);
echo $productsTable;

// var_dump($products);





    // while($row = $products->fetch(PDO::FETCH_ASSOC)) {
    //     var_dump($row);
    // }
    //     print "<div class='table'>";
    //     print "<table>";
    //       print "<tr>";
    //         print "<th>" . "product_id" . "</th>";
    //         print "<th>" . "product_type_code" . "</th>";
    //         print "<th>" . "supplier_id" . "</th>";
    //         print "<th>" . "product_name" . "</th>";
    //         print "<th>" . "product_price" . "</th>";
    //         print "<th>" . "other_product_details" . "</th>";
    //         print "<th>" . "actions" . "</th>";
    //       print "</tr>";

    //      while($row = $products->fetch(PDO::FETCH_ASSOC)) {
    //     //  foreach($result as $value){
    //             print "<tr>";
    //               print "<td>" . $row["product_id"] . "</td>";
    //               print "<td>" . $row["product_type_code"] . "</td>";
    //               print "<td>" . $row["supplier_id"] . "</td>";
    //               print "<td>" . $row["product_name"] . "</td>";
    //               print "<td>" . $row["product_price"] . "</td>";
    //               print "<td>" . $row["other_product_details"] . "</td>";
    //               print "<td><button>read</button><button>update</button><button>delete</button></td>";
    //             print "</tr>";
    //     }
      
    //     print "</table>";
    //     print "</div>";
    // }
    
    // // var_dump( $products);
?>
<?php
require 'footer.php';
?>
  </body>
</html>

