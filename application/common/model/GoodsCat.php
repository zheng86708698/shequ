<?php
namespace app\common\model;
class GoodsCat extends Base{
	
	public function goods(){
	    return $this->hasMany("Goods","catid");
	}
	public function shopSupplyGoods(){
	    return $this->hasMany("ShopSupplyGoods","catid");
	}
	public function goodsCat(){
	    return $this->belongsTo("GoodsCat","upcatid");
	}
	
}