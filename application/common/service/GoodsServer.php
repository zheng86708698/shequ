<?php
namespace app\common\service;

class GoodsServer
{
	public static function newOne(array $arr){
		$server = new \app\common\model\GoodsServer();
		$result = $server->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function getOne($id){
		return \app\common\model\GoodsServer::where(['id'=>$id])->find();
	}
	public static function setOne(string $id,array $arr){
	    $server = \app\common\service\GoodsServer::getOne($id);
	    
	   	$save = $server->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}
	public static function delOne(string $id){
	    return \app\common\model\GoodsServer::where(['id'=>$id])->delete();
	}
	public static function getList(array $condition = [],string $sort = "time",string $by = "asc"){
		$where = [];
		if (count($cndition)) {
			if (isset($condition['goodsid'])&&!empty($condition['goodsid'])) {
				$where['goodsid'] = $condition['goodsid'];
			}
			if (isset($condition['memberid'])&&!empty($condition['memberid'])) {
				$where['memberid'] = $condition['memberid'];
			}
		$list = \app\common\model\GoodsServer::order($sort.' '.$by)->where($where)->select();
        return $list;
		}

	}
}