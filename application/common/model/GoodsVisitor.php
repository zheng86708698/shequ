<?php
namespace app\common\model;
class GoodsVisitor extends Base{
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	
}