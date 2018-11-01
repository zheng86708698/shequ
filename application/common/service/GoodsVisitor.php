<?php
namespace app\common\service;
use think\Exception;
class GoodsVisitor
{
	public static function newOne(array $arr){
		$order = new \app\common\model\GoodsVisitor();
		$result = $order->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function getList(array $condition = [],string $sort = "time",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['memberid'])&&!empty($condition['memberid'])) {
				$where['memberid'] = $condition['memberid'];
			}
			if (isset($condition['goodsid'])&&!empty($condition['goodsid'])) {
				$where['goodsid'] = $condition['goodsid'];
			}
			if (isset($condition['starttime'])&&isset($condition['endtime'])&&!empty($condition['starttime'])&&!empty($condition['starttime'])) {
				$where['time'] = ['BETWEEN',[$condition['starttime'],$condition['endtime']]]
			}
			$list = \app\common\model\GoodsVisitor::order($sort.' '.$by)->where($where)->select();
        	return $list;
		}
	}
}