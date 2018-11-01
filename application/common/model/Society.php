<?php
namespace app\common\model;
class Society extends Base{
	public function member(){
	    return $this->hasMany("Member","societyid");
	}
	public function property(){
	    return $this->hasOne("Property","id");
	}
	public function navigate(){
		return $this->hasMany("Navigate","societyid");
	}
	public function shop(){
		return $this->hasMany("Shop","societyid");
	}
	
}