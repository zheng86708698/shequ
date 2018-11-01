<?php
namespace app\common\model;
class Property extends Base{
	public function building(){
	    return $this->hasMany("Building","propertyid");
	}
	public function propertyAdmin(){
	    return $this->hasOne("PropertyAdmin","propertyid");
	}
	public function society(){
	    return $this->belongsTo("Society","societyid");
	}
	
}