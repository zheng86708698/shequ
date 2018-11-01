<?php
namespace app\common\model;
class GoodsCars extends Base{
	
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function goodsSpec(){
	    return $this->belongsTo("GoodsSpec","specid");
	}
	
}