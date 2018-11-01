<?php
namespace app\common\model;
class SupplyGoodsSpec extends Base{
	
	
	public function supplyGoodsSpec(){
	    return $this->belongsTo("SupplyGoodsSpec","upspecid");
	}
	public function shopSupplyGoods(){
	    return $this->belongsTo("ShopSupplyGoods","goodsid");
	}
}