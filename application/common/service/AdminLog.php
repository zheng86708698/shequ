<?php
namespace app\common\service;
class AdminLog
{
	public static function newOne($arr){
		$log = new \app\common\model\AdminLog();
		$result = $log->allowField(true)->save($arr);
		return $result;
	}
	public static function getList($adminid=null){
		$log = new \app\common\model\AdminLog();
		$where['adminid'] = $adminid;
		$list = $log::where($where)->select();
		return $list;
	}
	public static function count($adminid=null){
		$log = new \app\common\model\AdminLog();
		$where['adminid'] = $adminid;
		$unm = $log::where($where)->count();
		return $unm;
	}
	public static function getOne($adminid=null){
		$log = new \app\common\model\AdminLog();
		$where['adminid'] = $adminid;
		$list = $log::where($where)->order('time desc')->find();
		return $list;
	}
}