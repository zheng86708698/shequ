<?php
namespace app\common\service;
class Classfied
{
	public static function newOne($arr){
		$Building = new \app\common\model\Classfied();

		$result = $Building ->saveAll($arr);
		return $result;
	}
	public static function getList(){
		$Building = new \app\common\model\Classfied();
		$result = $Building ->all();
		return $result;
	}
	public static function delOne($id){
	    return \app\common\model\Classfied::where(['id'=>$id])->delete();
	}
	public static function setOne($id,$arr){
	    $admin = new \app\common\model\Classfied();
	    foreach ($arr as $key => $value) {
	    	$arrr[] = $key;
	    }
	   	$save = $admin->allowField($arrr)->save($arr,['id'=>$id]);
	    return $save;
	}
}