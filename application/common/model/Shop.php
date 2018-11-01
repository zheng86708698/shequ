<?php
namespace app\common\model;
class Shop extends Base{
	public function shopAcountLog(){
	    return $this->hasMany("ShopAcountLog","shopid");
	}
	public function visitor(){
	    return $this->hasMany("Visitor","shopid");
	}
	public function shopRetire(){
	    return $this->hasMany("ShopRetire","shopid");
	}
	public function coupon(){
	    return $this->hasMany("Coupon","shopid");
	}
	public function goods(){
	    return $this->hasMany("Goods","shopid");
	}
	public function shopAdmin(){
	    return $this->hasOne("ShopAdmin","shopid");
	}
	public function society(){
	    return $this->belongsTo("Society","societyid");
	}
	public function memeber(){
	    return $this->belongsTo("Memeber","memeberid");
	}
	
}