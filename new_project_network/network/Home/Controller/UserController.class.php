<?php
/**
 * Created by PhpStorm.
 * User: myloveamer
 * Date: 15-8-14
 * Time: 下午2:55
 */

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {

    protected $stu_name ;
    protected $stu_password ;

    public $status_code ;
    public $status_mes ;


    public function before_index(){
        if(!$_SESSION['stu_id']) {
            $this->assign(array(
                'login1' => 'login1',
                'login2' => 'login2',
                'checkLogin' => '新生登录',
                'checkState' => '#'
            ));
        } else {
            $this->assign(array(
                'login1' => 'loginnot1',
                'login2' => 'loginnot2',
                'checkLogin' => '退出登录',
                'checkState' => U(CONTROLLER_NAME . '/index')
            ));
        }
    }


    public function bannerInfo() {
        $stu_name = I( trim('post.stu_name' , '' , 'htmlspecialchars') );
        $stu_password = I( trim('post.stu_password' , '' , 'htmlspecialchars') );
        if((IS_POST) && empty($stu_name) && empty($stu_password)) {
            $this->stu_name = $stu_name ;
            $this->stu_password = md5(hash('sha256',($stu_password>>($stu_password%3)).substr($stu_password,1,3)));
        }
    }

    public function loginIn() {
        $mapInfo = [
            'stu_tzs' => $this->stu_name ,
            'login_psw' => $this->stu_password
        ] ;
        $loginInfo = M('stu_login') ;
        $res = $loginInfo->where($mapInfo)->select() ;
        if($res) {
            $this->status_code = 200 ;
            $this->status_mes = '登陆成功' ;
            $this->ajaxReturn([
                'status' => $this->status_code ,
                'info' => $this->status_mes ,
                'status' => TRUE ,
            ]) ;
            session_start() ;
            $_SESSION['user_id'] = $this->stu_name ;
        } else {
            $this->status_code = 400 ;
            $this->status_mes = '登陆失败，密码或账号错误' ;
            $this->ajaxReturn([
                'status' => $this->status_code ,
                'info' => $this->status_mes ,
                'status' => FALSE ,
            ]) ;
        }
    }


    public function phoneInfo() {
        $stu_id = $_SESSION['stu_id'] ;

        if($stu_id) {
            $telInfo = M('stu_info') ;
            $qqInfo = $telInfo->where($stu_id)->select() ;
            if(empty($qqInfo['stu_phone'])||empty($qqInfo['stu_qq'])) {
                $this->status_code = 201;
                $this->status_mes .= "用户信息已完善";
            } else {
                $stu_phone = I('post.stu_tel' , '' , 'htmlspecialchars') ;
                $stu_qq = I('post.stu_qq' , '' , 'htmlspecialchars');
                $contactInfo = [
                    'stu_phone' => $stu_phone ,
                    'stu_qq' => $stu_qq ,
                ] ;
                $telInfo->data($contactInfo)->add() ;
                $this->status_code = 202;
                $this->status_mes .= ",信息已经补全";
                $thisNum = 0;
            }
        }else {
            $this->status_code = 401 ;
            $this->status_mes = '请先登陆' ;
            $thisNum = 1;
        }

        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => $thisNum ,
        ]) ;

    }


    public function hobbyComletion () {
        $fav_arr = [
            'fav_info1' => I('post.beh_arr0' , '' , 'htmlspecialchars') ,
            'fav_info2' => I('post.beh_arr1' , '' , 'htmlspecialchars') ,
            'fav_info3' => I('post.beh_arr2' , '' , 'htmlspecialchars') ,
        ] ;
        $res = M('stu_hobby') ;
        $stu_id = $_SESSION['stu_id'] ;
        if ($stu_id) {
            $this->stu_id = $stu_id ;
            $findInfo = $res->where($this->stu_id)->find() ;
            if(isset($findInfo)) {
                $res->data($data = [
                    'stu_tzs' => $this->stu_id ,
                    'hobby_one' => $fav_arr['fav_info1'] ,
                    'hobby_two' => $fav_arr['fav_info2'] ,
                    'hobby_three' => $fav_arr['fav_info3'] ,
                ])->add() ;
                $this->status_code = 203 ;
                $this->status_mes = '添加成功' ;
                $this->ajaxReturn([
                    'status' => $this->status_code ,
                    'info' => $this->status_mes ,
                    'status' => 0 ,
                ]) ;
            } else {
                $this->status_code = 201 ;
                $this->status_mes = '用户信息已经完善' ;
                $this->ajaxReturn([
                    'status' => $this->status_code ,
                    'info' => $this->status_mes ,
                    'status' => 0 ,
                ]) ;
            }
        } else {
            $this->status_code = 401 ;
            $this->status_mes = '请先登陆' ;
            $this->ajaxReturn([
                'status' => $this->status_code ,
                'info' => $this->status_mes ,
                'status' => 1,
            ]) ;
        }


    }


    public function deleteSession() {
        $delete = I('post.stu_upadate' , '' , 'htmlspecialchars') ;
        if($delete != NULL) {
            session_unset() ;
        }
    }
}