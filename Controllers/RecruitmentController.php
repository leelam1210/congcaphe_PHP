<?php
require_once "./Models/RecruitmentModel.php";
class RecruitmentController
{
    private $RecruitmentModel;
    public function __construct()
    {
        $this->RecruitmentModel = new RecruitmentModel();
    }

    public function index(){
        try {
            $recruitment = $this->RecruitmentModel->getList()->fetchAll();
            require Helpers::View('admin', 'recruitment');
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
                if($status){
                    $dataInsert = $_POST;
                }
                $status = $this->RecruitmentModel->create($dataInsert);
                $location = $status ? 'admin/recruitment' : '';
            }
            $messageModal = (isset($status) && $status) ? MESSAGE_ADD_DONE : MESSAGE_ADD_FAILED;
            require Helpers::View('admin', 'create_recruitment');
        } catch (Exception $e){
            Helpers::serverError();
        }
    }

    public function update($param){
        try {
            if (!empty($param)){
                $recruitment = $this->RecruitmentModel->getRecruitmentById($param[0]);
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
                        $dataInsert['id'] = $param[0];
                    }
                    $status = $this->RecruitmentModel->update($dataInsert);
                    $location = $status ? 'admin/recruitment/update/'.$param[0] : '';
                }
                $messageModal = (isset($status) && $status) ? UPDATE_DONE : UPDATE_FAILED;
                require Helpers::View('admin', 'update_recruitment');
            }
            else{
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
                    $status = $this->RecruitmentModel->delete($_POST['id']);
                    $message = $status ? DELETE_DONE : DELETE_FAILED;
                    echo Helpers::showResponse($status, [], $message);
                }
            }
        } catch (Exception $e){
            echo Helpers::showResponse(false, [], DELETE_FAILED);
        }
    }
}