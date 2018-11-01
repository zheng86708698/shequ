<?php
namespace app\common\model;
class MemberFeeLog extends Base{
	
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	
	
}