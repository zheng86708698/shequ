<?php
namespace app\common\service;
/**
 * 
 */
class Navigate
{
	public static function newOne(array $arr){
		$coupon = new \app\common\model\Navigate();
		$result = $coupon->allowField(true)->save($arr);
		return $result;
	}
	public static function getOne(string $id){
		 return \app\common\model\Navigate::where(['id'=>$id])->find();
	}
	public static function delOne(string $id){
	    return \app\common\model\Navigate::where(['id'=>$id])->delete();
	}
	public static function getList(array $condition = [],string $sort = "registertime",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['type'])&&!empty($condition['type'])) {
				$where['type'] = $condition['type'];
			}
			if (isset($condition['societyid'])&&!empty($condition['societyid'])) {
				$where['societyid'] = $condition['societyid'];
			}
		}
		$list = \app\common\model\Navigate::order($sort.' '.$by)->where($where)->select();
        return $list;

	}
}