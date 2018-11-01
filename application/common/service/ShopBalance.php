<?php
namespace app\common\service;
class ShopBalance
{
	public static function newOne(array $arr){
		$order = new \app\common\model\ShopBalance();
		$result = $order->allowField(true)->save($arr);
		return $result;
	}
	public static function getList(string $shopid){
		 return \app\common\model\ShopBalance::where(['shopshopid'=>$id])->select();
	}
}