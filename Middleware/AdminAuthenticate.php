<?php


require_once ("MiddlewareInterface.php");

class AdminAuthenticate implements MiddlewareInterface
{
    public function handle(){
        if(isset($_SESSION['login']) && isset($_SESSION['type_login'])){
            if($_SESSION['type_login'] == 'admin'){
                return true;
            }
        }
        return false;
    }
}