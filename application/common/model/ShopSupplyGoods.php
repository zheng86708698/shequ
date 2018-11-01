<?php
namespace app\common\model;
class ShopSupplyGoods extends Base{
	
	public function supplyGoodsSpec(){
	    return $this->hasMany("SupplyGoodsSpec","goodsid");
	}
	public function supplyGoodsBanner(){
	    return $this->hasMany("SupplyGoodsBanner","goodsid");
	}
	public function shopSupply(){
	    return $this->belongsTo("ShopSupply","supplyid");
	}
	public function goodsCat(){
	    return $this->belongsTo("GoodsCat","catid");
	}
	
}