<?php
namespace app\common\service;

class Evals
{
	public static function newOne($arr){
		$eval = new \app\common\model\Evals();

		$result = $eval ->saveAll($arr);
		return $result;
	}
	public static function getList(){
		$eval = new \app\common\model\Evals();
		$result = $eval -> all(['memberid'=>1]);
		return $result;
	}
	public static function delOne($id){
	    return \app\common\model\Evals::where(['id'=>$id])->delete();
	}
}