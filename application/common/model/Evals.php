<?php
namespace app\common\model;
class Evals extends Base{
	
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	public function goodsOrder(){
	    return $this->belongsTo("GoodsOrder","orderid");
	}
	
}