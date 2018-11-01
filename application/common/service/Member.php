<?php
namespace app\common\service;
use think\Exception;
class Member
{
	public static function newOne(array $arr){
		$member = new \app\common\model\Member();
		$result = $member->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function getOne(string $id){
		 return \app\common\model\Member::where(['id'=>$id])->find();
	}
	public static function setOne(string $id,array $arr){
		$member = \app\common\service\Member::getOne($id);
	    $save = $member->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\Member::where(['id'=>$id])->delete();
	}
	public static function getList(array $condition = [],string $sort = "registertime",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['tel'])&&!empty($condition['tel'])) {
				$where['tel'] = $condition['tel'];
			}
			if (isset($condition['societyid'])&&!empty($condition['societyid'])) {
				$where['societyid'] = $condition['societyid'];
			}
			if (isset($condition['ismember'])&&!empty($condition['ismember'])) {
				$where['ismember'] = $condition['ismember'];
			}
			if (isset($condition['pid'])&&!empty($condition['pid'])) {
				$where['pid'] = $condition['pid'];
			}
			if (isset($condition['qrcodeid'])&&!empty($condition['qrcodeid'])) {
				$where['qrcodeid'] = $condition['qrcodeid'];
			}
			if (isset($condition['starttime'])&&isset($condition['endtime'])&&!empty($condition['endtime'])&&!empty($condition['endtime'])) {
				$where['registertime'] = ['BETWEEN',[$condition['starttime'],$condition['endtime']]];
			}
		$list = \app\common\model\Member::order($sort.' '.$by)->where($where)->select();
        return $list;
		}
	}
}