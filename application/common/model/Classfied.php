<?php
namespace app\common\model;
class Classfied extends Base{
	public function AdminClassified(){
	    return $this->hasMany("AdminClassified","classifiedid");
	}
	
	
}