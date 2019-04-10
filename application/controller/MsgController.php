<?php

class MsgController extends Controller
{

    public function index()
    {
       $this->render();
    }    

    public function login()
    {
       $this->render();
    } 

    public function register()
    {
       $this->render();
    } 

    public function post_msg()
    {
        $title = $_POST('title');
        $content = $_POST('content');
        echo($title);
        echo($content);

    }


}