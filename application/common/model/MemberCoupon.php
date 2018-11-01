<?php
namespace app\common\model;
class MemberCoupon extends Base{
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function coupon(){
	    return $this->belongsTo("Coupon","couponid");
	}
	
}