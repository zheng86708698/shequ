<?php
namespace app\common\service;
class ShopClassfied
{
	public static function newOne(array $arr){
		$shop = new \app\common\model\ShopClassfied();
		$result = $shop->allowField(true)->save($arr);
		return $result;
	}
	public static function getOne(string $id){
		 return \app\common\model\ShopClassfied::where(['id'=>$id])->find();
	}
	public static function setOne(string $id,array $arr){
		$shop = \app\common\service\ShopClassfied::getOne($id);
	    $save = $shop->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\ShopClassfied::where(['id'=>$id])->delete();
	}
}