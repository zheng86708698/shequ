<?php
namespace app\common\service;
use think\Exception;
class ShopSupplyGoods{
	public static function newOne(array $arr){
		$shopsupplygoods = new \app\common\model\ShopSupplyGoods();
		$result = $shopsupplygoods->allowField(true)->save($arr);
		return $result;
	}
	public static function getList(array $condition=[]){
      $where[];
      if(count($condition)){
      	if(isset($condition['name'] && !empty($condition['name']))){
      		$where['name'] = $condition['name'];
      	}
      	if(isset($condition['catid'] && !empty($condition['catid']))){
      		$where['catid'] = $condition['catid'];
      	}
      	if(isset($condition['supplyid'] && !empty($condition['supplyid']))){
      		$where['supplyid'] = $condition['supplyid'];
      	}
      	if(isset($condition['price'] && !empty($condition['price']))){
      		$where['price'] = $condition['price'];
      	}
      	if(isset($condition['servicecontent'] && !empty($condition['servicecontent']))){
      		$where['servicecontent'] = $condition['servicecontent'];
      	}
      	if(isset($condition['content'] && !empty($condition['content']))){
      		$where['content'] = $condition['content'];
      	}
      }
       $list = \app\common\model\ShopSupplyGoods::where($where)->select();
        return $list;
	}

}
?>