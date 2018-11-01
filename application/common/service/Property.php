<?php
namespace app\common\service;
/**
 * 
 */
class Property
{
	public static function newOne(array $arr){
		$property = new \app\common\model\Property();
		$result = $property->allowField(true)->save($arr);
		return $result;
	}
	public static function getOne(string $id){
		 return \app\common\model\Property::where(['id'=>$id])->find();
	}
	public static function delOne(string $id){
	    return \app\common\model\Property::where(['id'=>$id])->delete();
	}
	public static function setOne(string $id,array $arr){
		$property = \app\common\service\Property::getOne($id);
	    $save = $property->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
}