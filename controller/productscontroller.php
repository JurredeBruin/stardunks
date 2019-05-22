<?php
require_once 'model/Productslogic.php';

class ProductsController {
    public function __construct(){
        $this->ProductsLogic = new ProductsLogic();
    }
    public function __destruct() {}
    public function handleRequest()
	{
		try {
			$op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
			switch ($op) {
                case 'create':
                $this->collectCreateProduct();
                break;
                case 'creating':
                $this->collectCreateNew();
                break;
				case 'read':
				$this->collectReadProduct($_REQUEST['id']);
				break;
				case 'update':
				$this->collectUpdateProduct();
				break;
				case 'delete':
				$this->collectDeleteProduct($_REQUEST['id']);
                break;
                case 'search':
                $this->collectSearchProduct();
                break;
                // case 'readPage':
                // $item_per_page=4;
                // $position=(($_REQUEST['p']-1)* $item_per_page);
                // $sql="SELECT * FROM Products LIMIT $position,$item_per_page";
                // $result=$datahandler->readData($sql);
                // $this->collectPages();
                // include('../views/viewproductslevel2.php');
                // break;
				default:
                $this->collectReadAllProducts();
				break;
			}			
		} catch (ValidationException $e) {
				$errors = $e->getErrors();

		}
		
    }
    

        public function collectCreateProduct() {
            include 'view/create.php';
        }
          public function collectCreateNew() {
            $creating = $_REQUEST;
            $result = $this->ProductsLogic->createProduct($creating);
          }
          public function collectsearchProduct() {
            $search = $_REQUEST;
            $products = $this->ProductsLogic->searchProduct($search);
            include 'view/search.php';

        }
        public function collectReadProduct($id){
            $result =$this->ProductsLogic->readProduct($id);
            include 'view/viewproductslevel2.php';
        }
        public function collectUpdateProduct(){

        }
        public function collectDeleteProduct($id){
            $result =$this->ProductsLogic->deleteData($id);
            include 'view/delete.php';
        }
        public function collectReadAllProducts(){
            $result =$this->ProductsLogic->readAllProducts();
            include 'view/viewproductslevel2.php';

        }
        public function collectPages(){
        $pages =$this->Productslogic->countPages($sql);
        include 'view/viewproductslevel2.php';
        }
    }
        class htmlelements{
        public function createTable($result) {
            // public function createTable($result,$pages) {           
            $tableheader = false;
            $html = "";
            $html .= "<table>";
            
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $row['product_price'] = str_replace('.', ',', $row['product_price']);
                if($tableheader == false) {
                    $html .= "<tr>";

                    foreach($row as $key=>$value) {
                        $html .= "<th>{$key}</th>";
                    }

                    $html .= "<th>actions</th>";
                    $html .= "</tr>";
                    $tableheader = true;
                }

                foreach($row as $value) {
                    $html .= "<td>{$value}</td>";
                }

                $html .= "<td>" . 
                "<button><span class='fas fa-book-open'>Read</span></button></a>" . 
                "<a><button><span class='fas fa-pen'>Update</span></button></a>" .
                "<a><button><span class='fas fa-times'>Delete</span></button></a>" . 
                         "</td>";
                $html .= "</tr>";
            }

            $html .= "</table>";
            // for($i=1;$i<=$pages;$i++){
            //     $html.="<li><div> onClick='?op=readPage&p='$i'>".$i."</div></li>";
            // }
            // var_dump($pages);
            return $html;

        }
 }

?>
