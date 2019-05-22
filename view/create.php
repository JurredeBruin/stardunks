<?php
require 'header.php';
?>

<form action="index.php?op=creating" method="post">
product_id: <input type="text" required="required"  name="product_id"><br>
product_type_code  : <input type="text" required="required"  name="product_type_code"><br>
supplier_id   : <input type="text" required="required"  name="supplier_id"><br>
product_name  : <input type="text" required="required"  name="product_name"><br>
product_price  : <input type="text" required="required"  name="product_price"><br>
other_product_details  : <input type="text" required="required"  name="other_product_details"><br>
    <input type="submit" value="add" name="add">
</form>
<?php
require 'footer.php';
?>
