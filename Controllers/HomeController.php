<?php
require_once "./Models/RecruitmentModel.php";
class HomeController
{

    private $modelProduct;
    private $modelRecruitment;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
        $this->modelRecruitment = new RecruitmentModel();
    }


    public function index()
    {

        require Helpers::View('user', 'home');
    }

    public function story()
    {
        $path = Helpers::getPathView('user') . 'story.php';
        require "$path";
    }

    public function recruitment()
    {
        $recruitments = $this->modelRecruitment->getList()->fetchAll();
        $path = Helpers::getPathView('user') . 'recruitment.php';
        require "$path";
    }

    public function product($param)
    {
        if (empty($param)){
            $pages = new Paginator(6, 'p');
            $total = $this->modelProduct->getList()->rowCount();
            $pages->set_total($total);
            $product  = $this->modelProduct->getList($pages->get_limit());
            if (isset($_GET['type'])){
                $total = $this->modelProduct->getList('', $_GET['type'])->rowCount();
                $pages->set_total($total);
                $product  = $this->modelProduct->getList($pages->get_limit(), $_GET['type']);
            }
            else{
                $total = $this->modelProduct->getList()->rowCount();
                $pages->set_total($total);
                $product  = $this->modelProduct->getList($pages->get_limit());
            }
            $path = Helpers::getPathView('user') . 'product.php';
            require "$path";
        } else{
            $product = $this->modelProduct->getProductById($param[0])->fetchAll()[0];
            $path = Helpers::getPathView('user') . 'product_detail.php';
            require "$path";
        }

    }



    public function news($param)
    {
        $path = Helpers::getPathView('user') . 'news.php';
        require "$path";
    }

    public function contact()
    {
        $path = Helpers::getPathView('user') . 'contact.php';
        require "$path";
    }

    public function detail($param)
    {
        $tour = $this->modelTours->showDetailTour($param[0]);
        $this->modelTours->increaseViews($param[0]);
        require Helpers::View('user', 'detail_tour');
    }

}
