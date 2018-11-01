<?php
namespace app\common\model;
class Collect extends Base{
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	
}