<?php
namespace app\common\model;
class GoodsBanner extends Base{
	
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	
	
}