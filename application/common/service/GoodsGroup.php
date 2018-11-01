<?php
namespace app\common\service;
use think\Exception;
class GoodsGroup
{
	public static function newOne(array $arr){
		$goodsGroup = new \app\common\model\GoodsGroup();
		$result = $goodsGroup->allowField(true)->saveAll($arr);
		return $result;
	}

	public static function setOne(string $id,array $arr){
		$group = \app\common\service\GoodsGroup::getOne($id);
	    $save = $group->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}

	public static function delOne(string $id){
		 return \app\common\model\GoodsGroup::where(['id'=>$id])->delete();
	}
	public static function getList(array $condition=[],string $sort = "id",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['goodsid']&&!empty($condition['goodsid']))) {
				$where['goodsid'] = $condition['goodsid'];
			}else{
				throw new Exception("goodsid错误");
			}
			if (isset($condition['status']&&!empty($condition['status']))) {
				$where['status'] = $where['status'];
			}else{
				throw new Exception("状态错误");
			}
			if (isset($condition['memberid'])&&!empty($condition['memberid'])) {
				$where['memberid'] = $condition['memberid'];
			}else{
				throw new Exception("memberid错误！");
			}
			if (isset($condition['starttime'])&&!empty($condition['starttime'])) {
				$where['starttime'] = ['EGT',$condition['starttime']];
			}else{
				throw new Exception("starttime错误");
			}
			if (isset($condition['expiretime'])&&!empty($condition['expiretime'])) {
				$where['expiretime'] = ['ELT',$condition['expiretime']];
			}else{
				throw new Exception("expiretime错误");
			}
		}
		$list = \app\common\model\GoodsGroup::order($sort.' '.$by)->where($where)->select();
        return $list;

	}
}