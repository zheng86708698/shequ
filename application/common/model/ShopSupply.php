<?php
namespace app\common\model;
class ShopSupply extends Base{
	
	public function shopSupplyGoods(){
	    return $this->hasMany("ShopSupplyGoods","catid");
	}
	
	
}