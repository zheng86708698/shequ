<?php
namespace app\common\service;
use think\Exception;
class Coupon
{
	public static function newOne($arr){
		$Coupon = new \app\common\model\Coupon();
		$result = $Coupon ->saveAll($arr);
		return $result;
	}
	public static function delOne($id){
	    return \app\common\model\Coupon::where(['id'=>$id])->delete();
	}
	public static function setOne($id,$arr){
	    $Coupon = new \app\common\model\Coupon();
	    foreach ($arr as $key => $value) {
	    	$arrr[] = $key;
	    }
	   	$save = $Coupon->allowField($arrr)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function getList( $condition = [],$sort = "id",$by = "asc"){
        $where = [];
        if(count($condition)){
            if(isset($condition['name'])){
                if($condition['name'] != ""){
                    if(is_string($condition['name'])){
                        $where['name'] = ['like','%'.$condition['name'].'%'];
                    }else{
                        throw new Exception("name错误！");
                    }
                }
                
            }
            if(isset($condition['goodsid'])){
                if($condition['goodsid'] != ""){
                    if(is_int($condition['goodsid'])){
                        $where['goodsid'] = $condition['goodsid'];
                    }else{
                        throw new Exception("goodsid错误！");
                    }
                }
                
            }
            if(isset($condition['starttime'])){
                if($condition['starttime'] != ""){
                    $starttime = strtotime($condition['starttime']);
                    if(is_int($starttime)){
                        $where['starttime'] = ["EGT",$starttime];
                    }else{
                        throw new Exception("starttime错误！");
                    }
                }
                
            }
            if(isset($condition['expiretime'])){
                if($condition['expiretime'] != ""){
                    $expiretime = strtotime($condition['expiretime']);
                    if(is_int($expiretime)){
                         $where['expiretime'] = ["ELT",$expiretime];
                    }else{
                        throw new Exception("expiretime错误！");
                    }
                }
                
            }
            if(isset($condition['discount'])){
                if($condition['discount'] != ""){
                    if(is_string($discount)){
                         $where['discount'] = $condition['discount'];
                    }else{
                        throw new Exception("discount错误！");
                    }
                }
                
            }
        }
        $list = \app\common\model\Coupon::order($sort.' '.$by)->where($where)->select();
        return $list;
    }
}