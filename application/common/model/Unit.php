<?php
namespace app\common\model;
class Unit extends Base{
	public function room(){
	    return $this->hasMany("Room","unitid");
	}
	public function building(){
	    return $this->belongsTo("Building","buildingid");
	}
	
}