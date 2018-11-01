<?php
namespace app\common\model;
class GoodsGroup extends Base{
	public function goodsOrder(){
	    return $this->hasMany("GoodsOrder","groupid");
	}
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	
}