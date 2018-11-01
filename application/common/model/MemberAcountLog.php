<?php
namespace app\common\model;
class MemberAcountLog extends Base{
	public function member(){
	    return $this->hasMany("Member","memberid");
	}
}