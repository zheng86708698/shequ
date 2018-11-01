<?php
namespace app\common\model;
class GoodsServer extends Base{
	
	public function goods(){
	    return $this->belongsTo("Goods","goodsid");
	}
	
	
}