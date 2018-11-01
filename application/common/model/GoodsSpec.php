<?php
namespace app\common\model;
class GoodsSpec extends Base{
	public function goodsCars(){
		return $this->hasMany("GoodsCars","specid");
	}
	public function goodsOrderSpec(){
		return $this->hasMany("GoodsOrderSpec","specid");
	}
	public function goodsSpec(){
	    return $this->belongsTo("GoodsSpec","upspecid");
	}
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	
}