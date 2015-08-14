<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/8/14
 * Time: 0:07
 */
namespace Api\Controller ;
use Think\Controller ;
class BannerController extends Controller {
    protected $stu_name ;
    protected $stu_password ;
    public $status_code ;
    public $status_mes ;


    public function login() {
        $stu_name = I('post.stu_name' , '' , 'htmlspecialchars') ;
        $stu_password = I('post.stu_password' , '' , 'htmlspecialchars') ;
        if(empty($stu_name)&&empty($stu_password)) {
            $this->stu_name = $stu_name ;
            $this->stu_password = md5(hash('sha256',($stu_password>>($stu_password%3)).substr($stu_password,1,3)));
        }
    }


    public function bannerInfo() {
        $mapInfo = [
            'stu_tzs' => $this->stu_name ,
            'login_psw' => $this->stu_password
        ] ;
        $stuInfo = M("stu_login") ;
        $res = $stuInfo->where($mapInfo)->select() ;
        if($res) {
            $this->status_code = 200 ;
            $this->status_mes = '登陆成功' ;
            $this->ajaxReturn([
                'status' => $this->status_code ,
                'info' => $this->status_mes ,
                'status' => 0 ,
            ]) ;
            session_start() ;
            $_SESSION['user_id'] = $this->stu_name ;
        } else {
            $this->status_code = 400 ;
            $this->status_mes = '登陆失败，密码或账号错误' ;
            $this->ajaxReturn = ([
                'status' => $this->status_code ,
                'info' => $this->status_mes ,
                'status' => 1 ,
            ]) ;
        }
    }



}