<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/8/14
 * Time: 1:04
 */
namespace Api\Controller ;
use Think\Controller ;

class DataController extends Controller {
    public $status_code ;
    public $status_mes ;
    public $stu_id ;

    public function dataShow() {
        $theHome = M('stu_home') ;
        $map['stu_id'] = $_SESSION['stu_id'] ;
        $addressCount = $theHome->where($theHome->where($map)->field('stu_address')->find())->count() ;
        $sumAddress = $theHome->count() ;
        $proportion = $addressCount / $sumAddress ;
        $otherProportion = 1 - $proportion ;
        $this->status_code = 202 ;
        $this->status_mes = '请求已发送' ;
        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => [
                '老乡比例' => $proportion ,
                '非同乡比例' => $otherProportion,
            ] ,
        ]) ;

        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => [
                '男生比例' =>  70%,
                '女生比例' =>  30%,
            ] ,
        ]) ;

    }



}