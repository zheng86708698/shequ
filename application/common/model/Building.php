<?php
namespace app\common\model;
class Building extends Base{
	public function unit(){
	    return $this->hasMany("Unit","buildingid");
	}
	public function property(){
	    return $this->belongsTo("Property","propertyid");
	}
	
}