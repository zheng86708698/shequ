<?php
namespace app\common\model;
class Member extends Base{
	
	public function MemberAcountLog(){
	    return $this->hasOne("MemberAcountLog","memberid");
	}

	public function propertyFeeOrder(){
	    return $this->hasOne("PropertyFeeOrder","memberid");
	}
	public function propertyFeeOrder(){
	    return $this->hasOne("PropertyFeeOrder","memberid");
	}
	public function shop(){
	    return $this->hasOne("Shop","memberid");
	}
	public function retire(){
	    return $this->hasOne("Retire","memberid");
	}

	public function room(){
	    return $this->belongsTo("Room","roomid");
	}
	public function society(){
	    return $this->belongsTo("Scoiety","societyid");
	}
	public function qrcode(){
	    return $this->belongsTo("Qrcode","qrcodeid");
	}

	public function visitor(){
	    return $this->hasMany("Visitor","memberid");
	}
	public function eval(){
	    return $this->hasMany("Eval","memberid");
	}
	public function goodsOrder(){
	    return $this->hasMany("GoodsOrder","memberid");
	}
	public function goodsCars(){
	    return $this->hasMany("GoodsCars","memberid");
	}
	public function goodsGroup(){
	    return $this->hasMany("GoodsGroup","memberid");
	}
	public function collect(){
	    return $this->hasMany("Collect","memberid");
	}
	public function goodsCollect(){
	    return $this->hasMany("GoodsCollect","memberid");
	}
	public function memberCoupon(){
	    return $this->hasMany("MemberCoupon","memberid");
	}
	public function goodsVisitor(){
	    return $this->hasMany("GoodsVisitor","memberid");
	}
	public function shopAcountLog(){
	    return $this->hasMany("ShopAcountLog","memberid");
	}
	public function memberFeeLog(){
	    return $this->hasMany("MemberFeeLog","memberid");
	}
}