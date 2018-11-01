<?php
namespace app\common\model;
class SupplyGoodsBanner extends Base{
	
	
	public function supplyGoodsBanner(){
	    return $this->belongsTo("SupplyGoodsBanner","goodsid");
	}
	
}