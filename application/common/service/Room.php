<?php
namespace app\common\service;
class Room
{
	public static function newOne(array $arr){
		$admin = new \app\common\model\Room();
		$result = $admin->allowField(true)->save($arr);
		return $result;
	}
	public static function getList($unitid){
		$room = new \app\common\model\Room();
		$result = $room ->all(['unitid'=>$unitid]);
		return $result;
	}
	public static function delOne($id){
	    return \app\common\model\Room::where(['id'=>$id])->delete();
	}
	public static function setOne($id,$arr){
	    $admin = new \app\common\model\Room();
	    foreach ($arr as $key => $value) {
	    	$arrr[] = $key;
	    }
	   	$save = $admin->allowField($arrr)->save($arr,['id'=>$id]);
	    return $save;
	}
}