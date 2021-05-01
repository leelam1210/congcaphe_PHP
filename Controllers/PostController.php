<?php
class PostController
{
    private $postModel;
    public function __construct()
    {


    }

    public function index()
    {
        try {
            require Helpers::View('admin', 'list_post');
        } catch (Exception $e){
            Helpers::serverError();
        }
    }

    public function create()
    {
        try {
            require Helpers::View('admin', 'new_post');

        } catch (Exception $e){
            Helpers::serverError();
        }
    }

    public function update($param = []){
        try {
            require Helpers::View('admin', 'update_post');
        } catch (Exception $e){
            Helpers::serverError();
        }
    }

    public function delete($id){
        try {

        } catch (Exception $e){
            Helpers::serverError();
        }
    }

}