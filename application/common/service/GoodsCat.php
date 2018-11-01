<?php
namespace app\common\service;
use think\Exception;
class GoodsCat
{
	public static function newOne(array $arr){
		$goodCat = new \app\common\model\GoodCat();
		$result = $goodCat->allowField(true)->saveAll($arr);
		return $result;
	}
	public static function getOne($id){
	    return \app\common\model\GoodsCat::where(['id'=>$id])->find();
	}
	// public static function getList($id){
	// 	$list = \app\common\model\GoodsCat::alias('g')->join('goods_cat gc','g.id = gc.upcatid')->where('g.id',$id)->select();
	// 	return $list;
	// }
	public static function delOne($id){
		$goodsCat = \app\common\model\GoodsCat::where(['id'=>$id])->find();
		$upcat = \app\common\model\GoodsCat::all(['upcatid'=>$id]);
		if (!empty($upcat)) {
			foreach ($upcat as $key => $value) {
			 $ids[] = $value->id;
			}
		}
		$ids[] = $id;
		return \app\common\model\GoodsCat::destroy($ids);
	}
}