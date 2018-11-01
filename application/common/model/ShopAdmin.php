<?php
namespace app\common\model;
class ShopAdmin extends Base{
	public function shop(){
	    return $this->belongsTo("Shop","shopid");
	}
	
	public function ShopAdminClassified(){
	    return $this->hasOne("ShopAdminClassified","adminid");
	}
}