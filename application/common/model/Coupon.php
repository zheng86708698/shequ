<?php
namespace app\common\model;
class Coupon extends Base{
	public function memberCoupon(){
	    return $this->hasMany("MemberCoupon","couponid");
	}
	public function shop(){
	    return $this->belongsTo("Shop","shopid");
	}
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	
}