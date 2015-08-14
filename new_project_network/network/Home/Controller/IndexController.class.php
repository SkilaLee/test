<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends UserController {
    public function index(){
		header('Location: '.VIEW.'/index.html');
        $this->display('Index/index') ;
    }
}