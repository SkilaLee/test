<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/8/14
 * Time: 3:28
 */
namespace Api\Controller ;
use Think\Controller ;
use Api\Model\FindModle ;

class FindController extends Controller {

    public $status_code ;
    public $status_mes ;
    public $stu_id ;

    public function findTeacher() {
        $Input = $_SESSION['stu_id'] ;
        $theTeacher = new FindModle() ;
        $yourClassStu = $theTeacher->findTeacher($Input) ;
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => [
                'name' => $yourClassStu['tch_name'] ,
                'school' => $yourClassStu['tch_sch'] ,
                'phone' => $yourClassStu['tch_phone'] ,
                'qq' => $yourClassStu['tch_qq'] ,
            ],
        ]) ;

    }

    public function findOtherTeacher() {
        $Input = $_SESSION['stu_id'] ;
        $theTeacher = new FindModle() ;
        $yourClassStu = $theTeacher->otherTeacher($Input) ;
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => [
                'name' => $yourClassStu['tch_name'] ,
                'phone' => $yourClassStu['tch_phone'] ,
            ],
        ]) ;

    }

    public function findClassStu() {
        $Input = $_SESSION['stu_id'] ;
        $theClassStu = new FindModle() ;
        $yourClassStu = $theClassStu->findClassStu($Input) ;
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => [
                'name' => $yourClassStu['stu_name'] ,
                'phone' => $yourClassStu['stu_phone'] ,
                'qq' => $yourClassStu['stu_qq'] ,
                'gender' => $yourClassStu['stu_gender'] ,
                'school' => $yourClassStu['stu_sch'] ,
                'major' => $yourClassStu['stu_major'] ,
                'address' => $yourClassStu['stu_address'] ,
            ],
        ]) ;
    }


    public function findSomeGay() {
        $stu_id = $_SESSION['stu_id'] ;
        $Oneput = M('stu_dorm') ;
        $res = $Oneput->where($stu_id)->select() ;
        $Input = [
            'dorm_ban' => $res['dorm_ban'] ,
            'dorm_num' => $res['dorm_num'] ,
        ] ;
        $roomNum = new FindModle() ;
        $roomBan = $roomNum->roomMateGay($Input) ;
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => [
                'name' => $roomBan['stu_name'] ,
                'phone' => $roomBan['stu_phone'] ,
                'qq' => $roomBan['stu_qq'] ,
                'gender' => $roomBan['stu_gender'] ,
                'school' => $roomBan['stu_sch'] ,
                'major' => $roomBan['stu_major'] ,
                'address' => $roomBan['stu_address'] ,
                'dormBan' => $Input['dorm_ban'] ,
                'dormNum' => $Input['dorm_num'] ,
            ],
        ]) ;

    }
}