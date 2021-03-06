<?php
namespace app\common\service;
class Society{
	public static function newOne($name=null,$latitude=null,$longitude=null){
		$Society = new \app\common\model\Society();
		$Society->name=$name;
		$Society->latitude=$latitude;
		$Society->longitude=$longitude;
		$Society ->save();
 		return $Society;
	}
	public static function getList(array $arr){
		$where = [];
		if (count($arr)) {
			if (isset($arr['where'])&&!empty($arr['where'])) {
				$where['name'] = $arr['name'];
			}
			$page = $arr['page'];
			$limit = $arr['limit'];
		}
		return \app\common\model\Society::where($where)->page($page,$limit)->select();
	}
	public static function delOne($id){
	    return \app\common\model\Society::where(['id'=>$id])->delete();
	}
	public static function getOne($id){
	    return \app\common\model\Society::where(['id'=>$id])->find();
	}
	public static function setOne($id,$arr){
	    $admin = \app\common\service\Society::getOne($id);
	   	$save = $admin->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
}







?>