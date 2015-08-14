<?php
namespace Home\Controller;
use Think\Controller;
class DataController extends Controller {
	public function seleceInfo() {   //数据查询
		
	}
    public function dataShow() {    //数据展示
		//  同乡比例
		session_start();
        $user_id =  $_SESSION['user_id'];
        //实例化new_address
     	$Home = M("stu_home"); 
   		$Home->query("SELECT * FROM `(`stu_address` = (SELECT stu_address FROM `stu_home` WHERE `stu_tzs` = 20150354));");
      var_dump($Home);     	


    }
}