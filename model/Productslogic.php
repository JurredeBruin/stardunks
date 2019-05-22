<?php
require_once 'model/datahandler.php';


class ProductsLogic{
    public function __construct(){
    $this->Datahandler= new Datahandler("localhost","mysql","stardunks","mvc","elektro");
    
    }
    public function __destruct(){
        
    }
    public function createProduct($creating){
        $product_id = $creating["product_id"];
        $product_type_code = $creating["product_type_code"];
        $supplier_id = $creating["supplier_id"];
        $product_name = $creating["product_name"];
        $product_price = $creating["product_price"];
        $other_product_details = $creating["other_product_details"];
        try {
        $sql = " INSERT INTO `products`(`product_id`, `product_type_code`, `supplier_id`, `product_name`, `product_price`, `other_product_details`) VALUES ('$product_id','$product_type_code','$supplier_id', '$product_name', '$product_price', '$other_product_details')";
        $result = $this->Datahandler->createData($sql);
        return $result;
    } catch (exception $e) {
        throw $e;
    }   
    }
    public function readProduct($id){
        $sql="SELECT * FROM Products where id =$id AND SELECT column_name from information_schema.columns where table_name='products'";
        $result = $this->Datahandler->readData($sql);
        return $result;
    }
    public function readAllProducts(){
        $sql = "SELECT * FROM Products LIMIT 5";
        $result = $this->Datahandler->readsData($sql);
        return $result;
    }
    public function countPages(){
        $sql ="SELECT COUNT(*) FROM Products";
        $result = $this->Datahandler->countPages($sql);
        return $result;
    }
    public function updateProduct(){}
    public function deleteData($id){
        $sql = "DELETE FROM Products WHERE id = $id";
        $result = $this->Datahandler->deleteData($sql);
        return $result;
    }
    public function searchProduct($search){
        $search_value=$search["search"];
        $sql="SELECT * FROM products WHERE product_name LIKE '%$search_value%' OR other_product_details LIKE '%$search_value%'";
        $result = $this->Datahandler->searchData($sql);
        return $result;
    }


    }

?>
