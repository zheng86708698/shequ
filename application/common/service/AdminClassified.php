<?php
namespace app\common\service;
class AdminClassified
{
	public static function newOne($arr){
		$adminClassified = new \app\common\model\AdminClassified($arr);
		//$arr为二维数组
		$result = $adminClassified->allowField(true) ->saveAll();
		return $result;
	} 

	public static function getUser($adminid){
		$adminClassified = new \app\common\model\AdminClassified();
		//获取此adminid下的classifiedid
	    $list = $adminClassified::where('adminid',$adminid)->column('classifiedid');
	    if ($list) {
	    	return $list;
	    }else{
	    	return '此用户无权限';
	    }
	    
	}
	public static function delOne($where){
		$adminClassified = new \app\common\model\AdminClassified();
		
	    $result = $adminClassified::where($where)->delete();
	    return $result;
	}

	
	
}

