<?php
namespace app\common\service;
use think\Exception;
class GoodsOrderSpec
{
	public static function newOne(array $arr){
		$order = new \app\common\model\GoodsOrderSpec();
		$result = $order->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function setOne(string $id,array $arr){
		$orderGoods = \app\common\service\GoodsOrderSpec::getOne($id);
	    $save = $orderGoods->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\GoodsOrderSpec::where(['orderid'=>$id])->delete();
	}
	public static function getOne($id){
		return \app\common\model\GoodsOrderSpec::where(['orderid'=>$id])->find();
	}
}