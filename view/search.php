<?php
require 'header.php';?>
<?php 
require_once 'controller/productscontroller.php';
$this->htmlelements = new htmlelements();
        $productsTable = $this->htmlelements->createTable($products,$products);
echo $productsTable;
?>

<?php
require 'footer.php';
?>