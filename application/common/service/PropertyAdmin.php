<?php
namespace app\common\service;
/**
 * 
 */
class PropertyAdmin
{
	public static function newOne(array $arr){
		$admin = new \app\common\model\PropertyAdmin();
		$result = $admin->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function getOne($id){
	    return \app\common\model\PropertyAdmin::where(['id'=>$id])->find();
	}
	public static function delOne($id){
	    return \app\common\model\PropertyAdmin::where(['id'=>$id])->delete();
	}
	public static function setOne($id,$arr){
	    $admin = \app\common\service\PropertyAdmin::getOne($id);
	    
	   	$save = $admin->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
}