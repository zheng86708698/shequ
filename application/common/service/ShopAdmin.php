<?php
namespace app\common\service;
class ShopAdmin
{
	public static function newOne(array $arr){
		$admin = new \app\common\model\ShopAdmin();
		$result = $admin->allowField(true)->save($arr);
		return $result;
	}
	public static function setOne(string $id,array $arr){
		$shop = \app\common\service\ShopAdmin::getOne($id);
	    $save = $shop->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\ShopAdmin::where(['id'=>$id])->delete();
	}
	public static function getOne(String $login,String $pwd){
	    return \app\common\model\Admin::where(['login'=>$login,'pwd'=>md5($pwd)])->find();
	}
}