<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/8/14
 * Time: 1:50
 */
namespace Api\Controller ;
use Think\Controller ;

class HobbyController extends Controller {

    public $status_code ;
    public $status_mes ;


    public function phoneInfo () {
        $stu_phone = I('post.phone' , '' , 'htmlspecialchars') ;
        $stu_qq = I('post.qq' , '' , 'htmlspecialchars');


        $telInfo = M('stu_info') ;
        $stu_id = $_SESSION['stu_id'] ;
        $contactInfo = [
            'stu_phone' => $stu_phone ,
            'stu_qq' => $stu_qq ,
        ] ;
        if($stu_id) {
            $qqInfo = $telInfo->where($stu_id)->select() ;
            if(empty($qqInfo['stu_phone'])||empty($qqInfo['stu_qq'])){
                $this->status_code = 201;
                $this->status_mes .= "用户信息已完善";
            } else {
                $telInfo->data($contactInfo)->add() ;
                $this->status_code = 202;
                $this->status_mes .= ",信息已经补全";

            }
        }
        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => 0 ,
        ]) ;
    }
}