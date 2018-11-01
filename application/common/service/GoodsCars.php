<?php
namespace app\common\service;
use think\Exception;
class GoodsCars
{
	public static function newOne(array $arr){
		$goodsCars = new \app\common\model\GoodsCars();
		$result = $goodsCars->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function setOne(int $id,int $num){
		$goods = \app\common\service\GoodsCars::getOne($id);
	    
	   	$save = $goods->save('num',$num);
	    return $save;
	}
	public static function delOne(int $id){
		return \app\common\model\goodsCars::where(['id'=>$id])->delete();
	}
	public static function getList(array $condition=[]){
		$where = [];
		if (count($condition)) {
			if (isset($condition['memberid'] && !empty($condition['memberid']))) {
				$where['memberid'] = $condition['memberid'];
			}else{
				throw new Exception("memberid错误！");
			}
			if (isset($condition['status'] && !empty($condition['status']))) {
				$where['status'] = $condition['status'];
			}else{
				throw new Exception('status错误');
			}
		}
		$list = \app\common\model\GoodsCars::where($where)->select();
        return $list;
	}
}