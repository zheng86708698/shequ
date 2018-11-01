<?php
namespace app\common\service;

class GoodsCollect
{
	public static function newOne(array $arr){
		$order = new \app\common\model\GoodsCollect();
		$result = $order->allowField(true)->saveAll($arr);
		return $result;
	}
	
}