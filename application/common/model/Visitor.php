<?php
namespace app\common\model;
class Visitor extends Base{
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function shop(){
	    return $this->belongsTo("Shop","shopid");
	}
	
}