<?php
namespace app\common\service;
class Building
{
	public static function newOne($arr){
		$Building = new \app\common\model\Building();

		$result = $Building ->saveAll($arr);
		return $result;
	}
	public static function getList($propertyid){
		$Building = new \app\common\model\Building();
		$result = $Building ->all(['propertyid'=>$propertyid]);
		return $result;
	}
	public static function delOne($id){
	    return \app\common\model\Building::where(['id'=>$id])->delete();
	}
	public static function setOne($id,$arr){
	    $admin = new \app\common\model\Building();
	    foreach ($arr as $key => $value) {
	    	$arrr[] = $key;
	    }
	   	$save = $admin->allowField($arrr)->save($arr,['id'=>$id]);
	    return $save;
	}
}