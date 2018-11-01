<?php
namespace app\common\service;
class ShopAdminClassified
{
	public static function newOne($arr){
		$shop = new \app\common\model\ShopAdminClassified();

		$result = $shop ->saveAll($arr);
		return $result;
	}
	public static function getList(){
		$shop = new \app\common\model\ShopAdminClassified();
		$result = $shop ->all();
		return $result;
	}
	public static function delOne($id){
	    return \app\common\model\ShopAdminClassified::where(['id'=>$id])->delete();
	}
	public static function setOne($id,$arr){
	    $admin = new \app\common\model\ShopAdminClassified();
	    foreach ($arr as $key => $value) {
	    	$arrr[] = $key;
	    }
	   	$save = $admin->allowField($arrr)->save($arr,['id'=>$id]);
	    return $save;
	}
}