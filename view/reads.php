<?php
require 'header.php';?>
<?php 

while($row = $Products->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}
?>
<?php
require 'footer.php';
?>