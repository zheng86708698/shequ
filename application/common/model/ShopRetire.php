<?php
namespace app\common\model;
class ShopRetire extends Base{
	public function shop(){
	    return $this->belongsTo("Shop","id");
	}
	public function admin(){
	    return $this->belongsTo("Admin","confirmerid");
	}
	
	
}