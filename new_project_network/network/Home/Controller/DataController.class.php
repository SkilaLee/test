<?php
/**
 * Created by PhpStorm.
 * User: myloveamer
 * Date: 15-8-14
 * Time: 下午4:10
 */

namespace Home\Controller ;
use Think\Controller ;
use Home\Model\FindModel ;
use Home\Model\HobbyModel ;
use Home\Model\BirthdayModel ;

class DataController extends UserController {

    public $status_code ;
    public $status_mes ;
    public $stu_id ;
    public $Birthday ;

    public function findTeacher() {
        $Input = $_SESSION['stu_id'] ;
        $theTeacher = new FindModle() ;
        $teacher = $theTeacher->findTeacher($Input) ;
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $this->assign('teacher',$teacher);


    }

    public function findClassStu() {
        $Input = $_SESSION['stu_id'] ;
        $theClassStu = new FindModle() ;
        $classmate = $theClassStu->findClassStu($Input) ;
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $this->assign('classmate',$classmate);
    }


    public function findSomeGay() {
        $stu_id = $_SESSION['stu_id'] ;
        $Oneput = M('stu_dorm') ;
        $map['stu_tzs'] = $stu_id;
        $res = $Oneput->where($map)->select() ;
        $Input = [
            'dorm_ban' => $res['dorm_ban'] ,
            'dorm_num' => $res['dorm_num'] ,
        ] ;
        $roomNum = new FindModle() ;
        $roomie = $roomNum->roomMateGay($Input) ;
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $this->assign('roomie',$roomie);


    }


    public function findGay () {
        $stu_id = $_SESSION['stu_id'] ;
        $res = M('stu_hobby') ;
        $map['stu_tzs'] = $stu_id;
        $Input = $res->where($map)->find() ;
        $connection = new HobbyModel() ;
        $friend_info = $connection->sameGay($Input);
        $this->status_code = 202 ;
        $this->status_mes = '寻找成功' ;
        $empty = "" ;
        if($friend_info == '还没有和你有相同爱好的小伙伴哦~')
        {
            $empty = '还没有和你有相同爱好的小伙伴哦~' ;
        }
        $this->assign('friend_info',$friend_info);
        $this->assign('empty' , $empty) ;
    }


    public function addressNum() {
        $stu_id = $_SESSION['stu_id'] ;
        $map['stu_tzs'] = $stu_id;
        $Home = M('stu_home') ;
        $address = $Home->field('stu_address')->where($map)->select() ;
        $addPeople = count($address) ;
        //同乡总人数
        $addUse = [
          'stu_address' => $address['stu_address'] ,
          'stu_gender'  => 1 ,
        ] ;
        $manNum = $Home->where($addUse)->count() ;

        $girlNum = $addPeople -$manNum ;
        //同乡男生人数
        $allPeople = $Home->field('id')->count() ;
        //学校总人数
        $otherPeople = $addPeople - $addPeople ;
        //非同乡人数
        $towneeScale = $addPeople / $allPeople ;
        //同乡比例
        $manScale = $manNum / $addPeople ;
        //男性比例
        $towneeScale = round($towneeScale * 100 , 2) ;

        $townee_info = [
            'townee' => $addPeople ,
            'other'  => $otherPeople ,
            'scale'  => $towneeScale ,
        ] ;
        $this->assign('townee_info' , $townee_info) ;

        $sex_scale = [
            'man'  => $manNum ,
            'girl' => $girlNum ,
        ] ;
        $this->assign('sex_scale' , $sex_scale) ;

        $this->assign('address' , $address['stu_address']) ;

    }


    public function schScale() {
        $stu_id = $_SESSION['stu_id'] ;
        $map['stu_tzs'] = $stu_id;
        $Info = M('stu_info') ;
        $major = $Info->field('stu_sch')->where($map)->select() ;
        $sch = [
            'stu_sch' => $major['stu_sch'] ,
            'stu_gender' => 1 ,
        ] ;
        $stuManGender = $Info->where($sch)->count() ;
        $stuGender = $Info->where($sch['stu_sch'])->count() ;
        $stuLadyGender = $stuGender - $stuManGender ;
        $scale_major = [
            'boy_num' => $stuManGender ,
            'lady_num' => $stuLadyGender ,
        ] ;
        $this->assign('scale_major' , $scale_major) ;

    }

    public function fidnBirtheday() {
        $stu_id = $_SESSION['stu_id'] ;
        $map['stu_tzs'] = $stu_id;
        $birth = new BirthdayModel() ;
        $birInfo = $birth->birthdayFind($map) ;
        $birthday = [
            'year' => $birInfo['year'] ,
            'month' => $birInfo['month'] ,
            'birth_num' => $birInfo['birthNum'] ,
            'other_num' => $birInfo['otherNum'] ,

        ] ;
        $this->Birthday = $birthday ;

        $this->assign('birthday' , $birthday) ;
    }


    public function comconstellation() {
        $stu_id = $_SESSION['stu_id'] ;
        $map['stu_tzs'] = $stu_id;
        $cons = new BirthdayModel() ;
        $consInfo = $cons->comconstellation($map) ;
        $cons_num = [
            'cons_name' => $consInfo['cons_name'],
            'same_num' => $consInfo['same_num'],
            'other_num' => $consInfo['other_num'],
        ] ;

        $this->assign('cons_num' , $cons_num) ;
    }

}
