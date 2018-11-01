<?php
namespace app\common\service;
class Retire
{
	public static function newOne(array $arr){
		$admin = new \app\common\model\Retire();
		$result = $admin->allowField(true)->save($arr);
		return $result;
	}
	public static function getList(array $condition=[],string $sort = "time",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['confirmerid'])&&!empty($condition['confirmerid'])) {
				$where['confirmerid'] = $condition['confirmerid'];
			}
			if (isset($condition['status'])&&!empty($condition['status'])) {
				$where['status'] = $condition['status'];
			}

		}
		$list = \app\common\model\Retire::order($sort.' '.$by)->where($where)->select();
        return $list;
	}
}