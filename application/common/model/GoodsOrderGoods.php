<?php
namespace app\common\model;
class GoodsOrderGoods extends Base{
	
	public function goodsOrder(){
	    return $this->belongsTo("GoodsOrder","orderid");
	}
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	
}