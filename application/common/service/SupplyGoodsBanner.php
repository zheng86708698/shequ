<?php
namespace app\common\service;
class SupplyGoodsBanner{
	public static function newOne(array $arr){
		$banner = new \app\common\model\SupplyGoodsBanner();

		$result = $banner->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function getList(int $goodsid,string $sort='sort',string $by='asc'){
		
		$where['goodsid'] = $goodsid;
		$list = \app\common\model\SupplyGoodsBanner::order($sort.' '.$by)->where($where)->select();
		return $list;
	}
	public static function delOne(array $ids){
		return $result = \app\common\model\SupplyGoodsBanner::destroy($ids);
	}
}
?>