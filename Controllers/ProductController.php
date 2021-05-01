<?php
require "./Models/ProductModel.php";
class ProductController
{

    private $modelProduct;

    public function __construct()
    {
        Helpers::checkAuth('admin');
        $this->modelProduct = new ProductModel();
    }

    public function index(){
        try {
            $pages = new Paginator(7, 'p');
            $total = $this->modelProduct->getList()->rowCount();
            $pages->set_total($total);
            $product  = $this->modelProduct->getList($pages->get_limit());
            require Helpers::View('admin', 'list_product');
        } catch (Exception $e){
            Helpers::serverError();
        }
    }

    public function create()
    {
        try {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $status = true;
                $dataInsert =[];
                foreach ($_POST as $item){
                    if (Helpers::checkEmpty($item)){
                        $status = false;
                    }
                }
                foreach ($_FILES as $item){
                    if(!Helpers::validateImage($item)){
                        $status = false;
                    }
                }
                if($status){
                    $dataInsert = $_POST;
                    foreach ($_FILES as $index =>$item){
                        $dataInsert[$index] = Helpers::uploadImage($item);
                    }
                }
                $status = $this->modelProduct->create($dataInsert);
                $location = $status ? 'admin/product' : '';
            }
            $messageModal = (isset($status) && $status) ? MESSAGE_ADD_DONE : MESSAGE_ADD_FAILED;
            require Helpers::View('admin', 'create_product');
        } catch (Exception $e){
            Helpers::serverError();
        }
    }

    public function update($param)
    {
        try {
            if (!empty($param)){
                $product = $this->modelProduct->getProductById($param[0])->fetchAll()[0];
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $status = true;
                    $dataInsert =[];
                    foreach ($_POST as $item){
                        if (Helpers::checkEmpty($item)){
                            $status = false;
                        }
                    }
                    if($status){
                        $dataInsert = $_POST;
                        foreach ($_FILES as $index =>$item){
                            if (!$item['error']){
                                $dataInsert[$index] = Helpers::uploadImage($item);
                            }
                        }
                        $dataInsert['id'] = $param[0];
                    }
                    $status = $this->modelProduct->update($dataInsert);
                    $location = $status ? "admin/product/update/$param[0]" : '';
                }
                $messageModal = (isset($status) && $status) ? UPDATE_DONE : UPDATE_FAILED;
                require Helpers::View('admin', 'update_product');
            } else{
                Helpers::notFound();
            }
        } catch (Exception $e){
            Helpers::serverError();
        }
    }

    public function delete(){
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (isset($_POST['id'])){
                    $status = $this->modelProduct->delete($_POST['id']);
                    $message = $status ? DELETE_DONE : DELETE_FAILED;
                    echo Helpers::showResponse($status, [], $message);
                }
            }
        } catch (Exception $e){
            echo Helpers::showResponse(false, [], DELETE_FAILED);
        }
    }

}