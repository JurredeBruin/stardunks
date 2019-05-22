
  <h1>Read Products</h1>
<?php require 'header.php'; ?>

<?php 
require_once 'controller/productscontroller.php';

$this->htmlelements = new htmlelements();
        $productsTable = $this->htmlelements->createTable($result);
        // $productsTable = $this->htmlelements->createTable($result,$pages);
echo $productsTable;
    require 'footer.php'; 
    
?>
  </body>
</html>

