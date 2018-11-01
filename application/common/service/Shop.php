<?php
namespace app\common\service;
class Shop
{
	public static function newOne(array $arr){
		$order = new \app\common\model\Shop();
		$result = $order->allowField(true)->save($arr);
		return $result;
	}
	public static function setOne(string $id,array $arr){
		$shop = \app\common\service\Shop::getOne($id);
	    $save = $shop->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\Shop::where(['id'=>$id])->delete();
	}
	public static function getOne(string $id){
		 return \app\common\model\Shop::where(['id'=>$id])->find();
	}
	public static function getList(array $condition = [],string $sort = "id",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['societyid'])&&!empty($condition['societyid'])) {
				$where['societyid'] = $condition['societyid'];
			}
		}
		$list = \app\common\model\Shop::order($sort.' '.$by)->where($where)->select();
        return $list;
	}
}