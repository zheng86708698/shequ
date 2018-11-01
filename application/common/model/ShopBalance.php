<?php
namespace app\common\model;
class MemberCoupon extends Base{
	
	public function shop(){
	    return $this->belongsTo("Shop","shopid");
	}
	
}