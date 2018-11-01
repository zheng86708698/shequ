<?php
namespace app\common\service;
class Admin
{
	public static function newOne($login=null,$pwd=null,$name=null,$tel=null,$email=null){
		$admin = new \app\common\model\Admin();
		$admin ->login = $login;
		$admin ->pwd = md5($pwd);
		$admin ->name = $name;
		$admin ->tel = $tel;
		$admin ->email = $email;
		$admin ->save();
		return $admin;
	} 

	public static function getOne($id){
	    return \app\common\model\Admin::where(['id'=>$id])->find();
	}
	public static function login( string $login,string $pwd){
	    return \app\common\model\Admin::where(['login'=>$login,'pwd'=>$pwd])->find();
	}
	public static function delOne($id){
	    return \app\common\model\Admin::where(['id'=>$id])->delete();
	}

	public static function setOne($id,$arr){
	    $admin = \app\common\service\Admin::getOne($id);
	    
	   	$save = $admin->allowField(true)->save($arr,['id'=>$id]);
	    return $save;
	}

}

