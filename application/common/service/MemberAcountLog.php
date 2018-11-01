<?php
namespace app\common\service;
/**
 * 
 */
class MemberAcountLog
{
	/**
	 * [newOne description]
	 * @param  array  $arr [description]
	 * @return [type]      [description]
	 */
	public static function newOne(array $arr){
		$log = new \app\common\model\MemberAcountLog();
		$result = $log->allowField(true)->save($arr);
		return $result;
	}
	public static function getList(array $condition = [],string $sort = "id",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['memberid'])&&!empty($condition['memberid'])) {
				$where['memberid'] = $condition['memberid'];
			}
			if (isset($condition['type'])&&!empty($condition['type'])) {
				$where['type'] = $condition['type'];
			}
			if (isset($condition['status'])&&!empty($condition['status'])) {
				$where['status'] = $condition['status'];
			}
		}
		$list = \app\common\model\MemberAcountLog::order($sort.' '.$by)->where($where)->select();
        return $list;

	}
}