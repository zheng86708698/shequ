<?php
namespace app\common\service;
use think\Exception;
 class ShopSupply{
 	 public static function newOne(array $arr){
 	 	$ShopSupply = new \app\common\model\ShopSupply();
		$result = $ShopSupply->allowField(true)->saveAll($arr);
		return $result;
 	 }
 	 public static function getList(array $condition=[]){
 	 	 $where[];
 	 	 if(count($condition)){
 	 	 	if(isset($condition['name'] && !empty($condition['name']))){
 	 	 		$where['name'] = $condition['name'];
 	 	 	}
 	 	 	if(isset($condition['pwd'] && !empty($condition['pwd']))){
 	 	 		$where['pwd'] = $condition['pwd'];
 	 	 	}
 	 	 	if(isset($condition['tel'] && !empty($condition['tel']))){
 	 	 		$where['tel'] = $condition['tel'];
 	 	 	}
 	 	 	if(isset($condition['email'] && !empty($condition['email']))){
 	 	 		$where['email'] = $condition['email'];
 	 	 	}
 	 	 	if(isset($condition['logo'] && !empty($condition['logo']))){
 	 	 		$where['logo'] = $condition['logo'];
 	 	 	}
 	 	 	if(isset($condition['address'] && !empty($condition['address']))){
 	 	 		$where['address'] = $condition['address'];
 	 	 	}
 	 	 	if(isset($condition['status'] && !empty($condition['status']))){
 	 	 		$where['status'] = $condition['status'];
 	 	 	}
 	 	 	if(isset($condition['money'] && !empty($condition['money']))){
 	 	 		$where['money'] = $condition['money'];
 	 	 	}
 	 	 }
 	 	 $list = \app\common\model\ShopSupply::where($where)->select();
        return $list;
 	 }
 	 public static function setOne($id,$arr){
 	 	$admin = \app\common\service\ShopSupply::getList($id);
 	 	$save = $admin->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
 	 }
 }




?>