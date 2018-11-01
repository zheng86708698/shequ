<?php
namespace app\common\model;
class Retire extends Base{
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function admin(){
	    return $this->belongsTo("Admin","confirmerid");
	}
	
	
}