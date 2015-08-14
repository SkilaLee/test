<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/8/14
 * Time: 1:09
 */
namespace Api\Controller ;
use Think\Controller ;
use Api\Model\HobbyModel ;
class HobbyController extends Controller {
    public $status_code ;
    public $status_mes ;
    public $stu_id ;


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


    public function findGay () {
        $stu_id = $_SESSION['stu_id'] ;
        $res = M('stu_hobby') ;
        $Input = $res->where($stu_id)->find() ;
        $connection = new HobbyModel() ;
        $newFriend = $connection->sameGay($Input);
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $this->ajaxReturn([
            'status' => $this->status_code ,
            'info' => $this->status_mes ,
            'status' => [
                'gender' => $newFriend['stu_gender'] ,
                'address' => $newFriend['stu_address'] ,
                'name' => $newFriend['stu_name'] ,
                'phone' => $newFriend['stu_phone'] ,
                'qq' => $newFriend['stu_qq'] ,
            ],
        ]) ;
    }
}