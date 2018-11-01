<?php
namespace app\common\model;
class GoodsOrder extends Base{
	
	public function goodsOrderSpec(){
	    return $this->belongsToMany("GoodsOrderSpec","orderid");
	}
	public function eval(){
	    return $this->hasOne("Eval","orderid");
	}
	public function goodsOrderGoods(){
	    return $this->belongsToMany("GoodsOrderGoods","orderid");
	}
	public function member(){
		return $this->belongsTo("Member","memberid");
	}
	public function goodsGroup(){
		return $this->belongsTo("GoodsGroup","Groupid");
	}
}