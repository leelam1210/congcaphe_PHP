<?php

require_once ("MiddlewareInterface.php");
class UserAuthenticate implements MiddlewareInterface
{
    public function handle(){
        if(isset($_SESSION['login']) && isset($_SESSION['type_login'])){
            if($_SESSION['type_login'] == 'user'){
                return true;
            }
        }
        return false;
    }


}