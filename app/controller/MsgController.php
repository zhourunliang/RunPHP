<?php

class MsgController extends Controller
{

    public function index()
    {
         $msgs = (new MsgModel())->fetchAll();
         $this->assign('msgs', $msgs);
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
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $data['title'] = $title;
        $data['content'] = $content;
        $data['created'] = date('Y-m-d');
      //   print_r($data);
        (new MsgModel())->add($data);
        header("Location: /msg/index");
    }


}