<?php
namespace app\common\service;
use think\Exception;
class GoodsOrderGoods
{
	public static function newOne(array $arr){
		$order = new \app\common\model\GoodsOrderGoods();
		$result = $order->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function setOne(string $id,array $arr){
		$orderGoods = \app\common\service\GoodsOrderGoods::getOne($id);
	    $save = $orderGoods->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\GoodsOrderGoods::where(['orderid'=>$id])->delete();
	}
	public static function getOne($id){
		return \app\common\model\GoodsOrderGoods::where(['orderid'=>$id])->find();
	}
}