<?php
namespace app\common\model;
class GoodsOrderSpec extends Base{
	
	public function goodsOrder(){
	    return $this->belongsTo("GoodsOrder","orderid");
	}
	public function goodsSpec(){
	    return $this->belongsTo("GoodsSpec","specid");
	}
	
}