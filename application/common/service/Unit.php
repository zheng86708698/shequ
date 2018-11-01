<?php
 namespace app\common\service;
 class Unit{
 	public static function newOne($name=null,$buildingid=null){
 		$Unit = new \app\common\model\Unit();
 		$Unit->name = $name;
 		$Unit->buildingid = $buildingid;
 		$Unit ->save();
 		return $Unit;
 	}
 	public static function getList($buildingid){
	    return \app\common\model\Unit::where(['buildingid'=>$buildingid])->select();
	}
	public static function delOne($id){
	    return \app\common\model\Unit::where(['id'=>$id])->delete();
	}
	public static function getOne($id){
	    return \app\common\model\Unit::where(['id'=>$id])->find();
	}
	public static function setOne($id,$arr){
	    $admin = \app\common\service\Unit::getOne($id);
	   	$save = $admin->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
 }








?>