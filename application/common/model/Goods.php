<?php
namespace app\common\model;
class Goods extends Base{
	
	public function shop(){
	    return $this->belongsTo("Shop","shopid");
	}
	public function goodsCat(){
	    return $this->belongsTo("GoodsCat","catid");
	}
	public function coupon(){
	    return $this->hasMany("Coupon","goodsid");
	}
	public function collect(){
	    return $this->belongsToMany("Collect","goodsid");
	}
	public function goodsVisitor(){
	    return $this->belongsToMany("GoodsVisitor","goodsid");
	}
	public function eval(){
	    return $this->hasMany("Eval","goodsid");
	}
	public function goodsOrdergoods(){
	    return $this->hasMany("GoodsOrdergoods","goodsid");
	}
	public function goodsGroup(){
	    return $this->hasMany("GoodsGroup","goodsid");
	}
	public function goodsSpec(){
	    return $this->belongsToMany("GoodsSpec","goodsid");
	}
	public function goodsBanner(){
	    return $this->hasmany("GoodsBanner","goodsid");
	}
	public function goodsServer(){
	    return $this->hasOne("GoodsServer","goodsid");
	}
}