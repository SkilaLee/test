<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/8/14
 * Time: 3:43
 */
namespace Api\Model ;
use Think\Model ;

class FindModle extends Model {

    protected $tableName = 'stu_info' ;

    public function findTeacher($Input) {
        $map['stu_tzs'] = $Input ;
        $teacher = $this->where($map)
                        ->join('join stu_teacher on stu_teacher.tch_name = stu_info.stu_teacher')
                        ->field('stu_teacher.tch_name as tch_name , stu_teacher.tch_sch as tch_sch ,
                                 stu_teacher.tch_phone as tch_phone , stu_teacher.tch_office as tch_office')
                        ->select() ;
        return $teacher ;
    }


    public function otherTeacher($Input) {
        $map['stu_tzs'] = $Input ;
        $theAnother = $this->where($map)
                           ->join('join stu_teacher on stu_teacher.tch_sch = stu_info.stu_sch')
                           ->field('stu_teacher.tch_name as tch_name , stu_teacher.tch_phone as tch_phone')
                           ->select() ;

        return $theAnother ;
    }


    public function findClassStu($Input) {
        $map['stu_tzs'] = $Input ;
        $class = $this->where($map)->find() ;
        $classStu = $this->where($class)->select() ;
        for($i = 0 ; $i < count($classStu) ; $i++) {
            if($classStu['stu_gender'] == 1) {
                $friendInfro['stu_gender'] = '男' ;
            } else {
                $friendInfro['stu_gender'] = '女' ;
            }
            if ($classStu['stu_phone'] == NULL) {
                $classStu['stu_phone'] = '暂无信息';
            }
            if ($classStu['stu_qq'] == NULL) {
                $classStu['stu_qq'] = '暂无信息';
            }

        }

        return $classStu ;
    }


    public function roomMateGay($Input) {
        $map = [
            'dorm_ban' => $Input['dorm_ban'] ,
            'dorm_num' => $Input['dorm_num'] ,
        ] ;
        $roomMate = M('stu_dorm') ;
        $newGay = $roomMate->where($map)
                       ->join('join stu_info on stu_info.stu_tzs = stu_dorm.stu_tzs')
                       ->field('stu_info.stu_name as stu_name , stu_info.stu_sch as stu_sch ,
                                stu_info.stu_major as stu_major ,stu_info.gender as stu_gender,
                                stu_info.stu_address as stu_address , stu_info.stu_phone as stu_phone ,
                                stu_info.stu_qq as stu_qq')
                       ->select() ;
        for($i = 0 ; $i < count($newGay) ; $i++) {
            if($newGay['stu_gender'] == 1) {
                $friendInfro['stu_gender'] = '男' ;
            } else {
                $friendInfro['stu_gender'] = '女' ;
            }
            if ($newGay['stu_phone'] == NULL) {
                $newGay['stu_phone'] = '暂无信息';
            }
            if ($newGay['stu_qq'] == NULL) {
                $newGay['stu_qq'] = '暂无信息';
            }

        }

        return $newGay ;

    }
}