<?php
namespace app\common\service;
class Collect
{
	public static function newOne($arr){
		$Building = new \app\common\model\Collect();

		$result = $Building ->saveAll($arr);
		return $result;
	}
	public static function getList($name=null,$value=null){
		$Building = new \app\common\model\Collect();
		$result = $Building ->all([$name=>$value]);
		return $result;
	}
	public static function delOne($id){
	    return \app\common\model\Collect::where(['id'=>$id])->delete();
	}
}