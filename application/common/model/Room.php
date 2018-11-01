<?php
namespace app\common\model;
class Room extends Base{
	public function propertyFeeOrder(){
	    return $this->hasOne("PropertyFeeOrder","roomid");
	}
	public function member(){
	    return $this->hasMany("Member","roomid");
	}
	public function unit(){
	    return $this->belongsTo("Unit","unitid");
	}
}