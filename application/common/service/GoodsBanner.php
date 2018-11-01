<?php
namespace app\common\service;
class GoodsBanner
{
	public static function newOne(array $arr){
		$banner = new \app\common\model\GoodsBanner();

		$result = $banner->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function getList(int $goodsid,string $sort='sort',string $by='asc'){
		
		$where['goodsid'] = $goodsid;
		$list = \app\common\model\GoodsBanner::order($sort.' '.$by)->where($where)->select();
		return $list;
	}
	public static function delOne(array $ids){
		return $result = \app\common\model\GoodsBanner::destroy($ids);
	}
}