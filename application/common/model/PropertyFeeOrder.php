<?php
namespace app\common\model;
class PropertyFeeOrder extends Base{
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function room(){
	    return $this->belongsTo("Room","roomid");
	}
}