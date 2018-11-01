<?php
namespace app\common\service;

class GoodsSpec
{
	public static function newOne(array $arr){
		$spec = new \app\common\model\GoodsSpec();
		$result = $spec->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function getOne($id){
		return \app\common\model\GoodsSpec::where(['id'=>$id])->find();
	}
	public static function setOne(string $id,array $arr){
	    $spec = \app\common\service\GoodsSpec::getOne($id);
	    
	   	$save = $spec->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\GoodsSpec::where(['id'=>$id])->delete();
	}
	public static function getList(array $condition = [],string $sort = "id",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['goodsid'])&&!empty($condition['goodsid'])) {
				$where['goodsid'] = $condition['goodsid'];
			}
			if (isset($condition['name'])&&!empty($condition['name'])) {
				$where['name'] = $condition['name'];
			}
		$list = \app\common\model\GoodsSpec::order($sort.' '.$by)->where($where)->select();
        return $list;
		}

	}
}