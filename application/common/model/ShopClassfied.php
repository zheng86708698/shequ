<?php
namespace app\common\model;
class ShopClassfied extends Base{
	public function shopAdminClassified(){
	    return $this->hasMany("ShopAdminClassified","classifiedid");
	}
	
	
}