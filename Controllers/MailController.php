<?php
require_once "./Helpers/SendMail.php";
require_once "./Models/UserRegisterEmailModel.php";
class MailController
{
    public function __construct()
    {
    }

    public function registerNotify(){
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (isset($_POST['email'])){
                    $mail = new SendMail('Xác nhận đăng ký nhận bài viết mới', '<h1>Chúng tôi sẽ gửi thông báo cho bạn khi có bài viết mới</h1>', $_POST['email']);
                    $status = $mail->handle();
                    $message = $status ? 'Gửi thành công !' : 'Gửi không thành công !';
                    if ($status){
                        $insert = new UserRegisterEmailModel();
                        $insert->register($_POST['email']);
                    }
                    echo Helpers::showResponse($status, [], $message);
                }
            }
        } catch (Exception $e){
            echo Helpers::showResponse(false, [], $e->getMessage());
        }
    }
}