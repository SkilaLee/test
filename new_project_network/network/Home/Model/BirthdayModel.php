<?php
/**
 * Created by PhpStorm.
 * User: myloveamer
 * Date: 15-8-14
 * Time: 下午6:55
 */
namespace Home\Model ;
use Think\Model ;

class BirthdayModel extends Model {
    public $res ;
    protected $tableName = 'stu_info' ;

    public function birthdayFind($map) {
        $this->res['stu_tzs'] = $map['stu_tzs'];
        $yourBirth = $this->field('stu_birth')->where($this->res)->find();
        $theYear = substr($yourBirth, 0, 4);
        $theMath = substr($yourBirth, 5, 2);
        $findYM = $theYear . '-' . $theMath;
        $sql = 'SELECT stu_birth
             FROM `stu_info `
             WHERE ' . $findYM . ' =
            (SUBSTRING `stu_birth` ,1 , 7)';
        $someBirth = $this->query($sql);
        $someBirthNum = count($someBirth);
        $allHuman = $this->count();
        $otherNum = $allHuman - $someBirthNum;
        Return $data = [
            'year' => $theYear,
            'month' => $theMath,
            'birthNum' => $someBirth,
            'otherNum' => $otherNum,

        ];

        $time = $this->field('stu_birth ,stu_tzs,stu_cons')->select();
        $month = substr($time['stu_birth'], 5, 2);
        $day = substr($time['stu_birth'], 8, 2);
        $consTime = array(
            '0120' , '0219' , '0321' , '0421' , '0521' , '0622' , '0723' , '0823' , '0923' , '1024' , '1123' , '1220'
        ) ;

        for($i = 0 ; $i < count($time) ; $i++) {
            $theMD = $month.$day ;
            for($j = 1 ; $j <= 12 ; $j++) {
                if($theMD[$i] >= $consTime[$j] && $theMD[$i] < $consTime[$j+1]){
                    $time['stu_cons'] = $j ;
                } else {
                    $time['stu_cons'] = 12 ;
                }
            }

        }
        $thefind = [
            'stu_cons' => $time['stu_cons'] ,
            'stu_birth'=> $time['stu_birth'] ,
        ] ;
        $this->where($thefind)->save($time['stu_cons']) ;



    }



    public function comconstellation($map) {
        $data['stu_tzs'] = $map['stu_tzs'] ;
        $sql = $this->field('stu_cons')->where($data)->find() ;
        $allHuman = $this->count('id') ;
        $array['stu_cons'] = $sql['stu_cons'] ;
        $sameNum = $this->where($array)->count() ;
        $otherNum = $allHuman - $sameNum ;
        
        switch ($sql) {
            case 1:
                $sql = '水瓶座';
                break;
            case 2:
                $sql = '双鱼座';
                break;
            case 3:
                $sql = '白羊座';
                break;
            case 4:
                $sql = '金牛座';
                break;
            case 5:
                $sql= '双子座';
                break;
            case 6:
                $sql= '巨蟹座';
                break;
            case 7:
                $sql= '狮子座';
                break;
            case 8:
                $sql= '处女座';
                break;
            case 9:
                $sql= '天秤座';
                break;
            case 10:
                $sql= '天蝎座';
                break;
            case 11:
                $sql= '射手座';
                break;
            case 12:
                $sql= '摩羯座';
                break;

            default:

                break;

        }
        Return $Info = [
            'cons_name' => $sql ,
            'same_num' => $sameNum ,
            'other_num' => $otherNum ,
        ] ;
    }

}