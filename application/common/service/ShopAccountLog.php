<?php
namespace app\common\service;
class ShopAccountLog
{
	public static function newOne(array $arr){
		$order = new \app\common\model\ShopAccountLog();
		$result = $order->allowField(true)->save($arr);
		return $result;
	}
	public static function getList(string $shopid,string $sort = "time",string $by = "asc"){
		$list = \app\common\model\ShopAccountLog::order($sort.' '.$by)->where('shopid',$shopid)->select();
        return $list;

	}
}