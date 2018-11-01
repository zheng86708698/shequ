<?php
namespace app\common\model;
class ShopAdminClassified extends Base{
	public function shopAdmin(){
	    return $this->belongsTo("ShopAdmin","adminid");
	}
	public function shopClassfied(){
	    return $this->belongsTo("ShopClassfied","classifiedid");
	}
	
	
}