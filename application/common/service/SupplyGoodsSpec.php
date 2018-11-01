<?php
	namespace app\common\service;
   class SupplyGoodsSpec{
   	   public static function newOne($name=null,$goodsid=null,$upspecid=null,$price=null,$inventory=null){
   	   	   $Spec = new \app\common\model\SupplyGoodsSpec();
	   	   $Spec->name =$name;
	   	   $Spec ->goodsid =$goodsid;
	   	   $Spec ->upsuecid = $upspecid;
	   	   $Spec ->price=$price;
	   	   $Spec ->inventory=$inventory;
	   	   $Spec ->save();
	   	   return $Spec;
   	   }
   	   public static function getList(array $condition = []){
   	   	 $where[];
   	   	 if(count($condition)){
   	   	 	if(isset($condition['goodsid'] && !empty($condition['goodsid']))){
   	   	 		$where['goodsid'] = $condition['goodsid'];
   	   	 	}
   	   	 	if(isset($condition['name'] && !empty($condition['name']))){
   	   	 		$where['name'] = $condition['name'];
   	   	 	}
   	   	 }
   	   	 	$list = \app\common\model\SupplyGoodsSpec::where($where)->select();
        	return $list;
   	   	}
   	   public static function delOne($id){
	    return \app\common\model\SupplyGoodsSpec::where(['id'=>$id])->delete();
	  	}
		public static function getOne($id){
	    return \app\common\model\SupplyGoodsSpec::where(['id'=>$id])->find();
		}	
		public static function setOne($id,$arr){
	    $admin = \app\common\service\SupplyGoodsSpec::getOne($id);
	   	$save = $admin->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}

   }





?>