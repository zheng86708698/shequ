<?php
namespace app\common\model;
class Admin extends Base{
	public function retire(){
	    return $this->hasMany("Retire","confirmerid");
	}
	public function shopRetire(){
	    return $this->hasMany("ShopRetire","confirmerid");
	}
	public function adminClassified(){
	    return $this->hasMany("AdminClassified","adminid");
	}
	public function adminLog(){
	    return $this->hasMany("AdminLog","adminid");
	}
	
}