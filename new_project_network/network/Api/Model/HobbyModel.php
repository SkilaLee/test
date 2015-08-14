<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/8/14
 * Time: 2:03
 */
namespace Api\Model ;
use Think\Model ;

class HobbyModel extends Model {
    protected $tableName = 'stu_hobby' ;

    public function sameGay ($Input) {
        $map = [
            'hobby_one' =>$Input['hobby_one'] ,
            'hobby_two' =>$Input['hobby_two'] ,
            'hobby_three' =>$Input['hobby_three'] ,
        ] ;

        $friendInfo = $this->where($map)
                    ->join('join stu_info on stu_hobby.stu_tzs = stu_hobby.stu_tzs')
                    ->field('stu_info.stu_name as stu_name , stu_info.stu_gender as stu_gender ,
                             stu_info.stu_address as stu_address , stu_info.stu_phone as stu_phone ,
                             stu_info.stu_qq as stu_qq')
                    ->select() ;

        for($i = 0 ; $i < count($friendInfo) ; $i++) {
            if($friendInfo['stu_gender'] == 1) {
                $friendInfro['stu_gender'] = '男' ;
            } else {
                $friendInfro['stu_gender'] = '女' ;
            }
            if ($friendInfo['stu_phone'] == NULL) {
                $friendInfo['stu_phone'] = '暂无信息';
            }
            if ($friendInfo['stu_qq'] == NULL) {
                $friendInfo['stu_qq'] = '暂无信息';
            }

        }
        if(empty($friendInfo)) {
            $friendInfo = '还没有和你有相同爱好的小伙伴哦~' ;
        }
        return $friendInfo ;

    }
}
