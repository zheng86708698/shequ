<?php
namespace app\common\service;
use think\Exception;
class GoodsOrder
{
	public static function newOne(array $arr){
		$order = new \app\common\model\GoodsOrder();
		$result = $order->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function setOne(string $id,array $arr){
		$group = \app\common\service\GoodsOrder::getOne($id);
	    $save = $group->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\GoodsOrder::where(['id'=>$id])->delete();
	}
	public static function getOne(string $id){
		 return \app\common\model\GoodsOrder::where(['id'=>$id])->find();
	}
	public static function getList(array $condition = [],string $sort = "id",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['memberid'])&&!empty($condition['memberid'])) {
				$where['memberid'] = $condition['memberid'];
			}
			if (isset($condition['starttime'])&&isset($condition['endtime'])&&!empty($condition['endtime'])&&!empty($condition['endtime'])) {
				$where['time'] = ['BETWEEN',[$condition['starttime'],$condition['endtime']]];
			}
			if (isset($condition['status'])&&!empty($condition['status'])) {
				$where['status'] = $condition['status'];
			}
			if (isset($condition['groupid'])&&!empty($condition['groupid'])) {
				$where['groupid'] = $condition['groupid'];
			}
		}
		$list = \app\common\model\GoodsOrder::order($sort.' '.$by)->where($where)->select();
        return $list;
	}
}