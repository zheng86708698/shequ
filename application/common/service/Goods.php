<?php
namespace app\common\service;
use think\Exception;
class Goods
{
	public static function newOne(array $arr){
		$goods = new \app\common\model\Goods();

		$result = $goods ->saveAll($arr);
		return $result;
	}

	public static function getOne($id){
		return \app\common\model\Goods::where(['id'=>$id])->find();
	}

	public static function setOne(string $id,array $arr){
	    $goods = \app\common\service\Goods::getOne($id);
	    
	   	$save = $goods->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}

	public static function delOne(string $id){
	    return \app\common\model\Goods::where(['id'=>$id])->delete();
	}

	public static function getList(array $condition = [],string $sort = "id",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['catid']) && !empty($condition['catid'])) {
				$where['catid'] = $condition['catid'];
			}else{
				throw new Exception("catid错误！");
			}

			if (isset($condition['name']) && !empty($condition['name'])) {
				$where['name'] = ['like','%'.$condition['name'].'%']
			}else{
				throw new Exception("name错误！");
			}

			if (isset($condition['price']) && !empty($condition['price']) ) {
				$where['price'] = ['BETWEEN',"$condition['height'],$condition['low']"]
			}else{
				throw new Exception("price错误！");
			}

			if (isset($condition['shopid']) && !empty($condition['shopid'])) {
				$where['shopid'] = $condition['shopid'];
			}else{
				throw new Exception('shopid错误');
			}
			if (isset($condition['type']) && !empty($condition['type'])) {
				$where['type'] = $condition['type'];
			}else{
				throw new Exception('type错误');
			}
			if (isset($condition['status']) && !empty($condition['status'])) {
				$where['status'] = $condition['status'];
			}else{
				throw new Exception('status错误');
			}
		}
		$list = \app\common\model\Goods::order($sort.' '.$by)->where($where)->select();
        return $list;
	}
}