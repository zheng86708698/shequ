<?php
namespace app\common\service;
class Qrcode
{
	public static function newOne(array $arr){
		$admin = new \app\common\model\Qrcode();
		$result = $admin->allowField(true)->save($arr);
		return $result;
	}
	public static function getOne(string $name){
	    return \app\common\model\Qrcode::where(['name'=>$name])->find();
	}
	public static function getList(string $sort = "id",string $by = "asc")
		$list = \app\common\model\Qrcode::order($sort.' '.$by)->select();
        return $list;
}