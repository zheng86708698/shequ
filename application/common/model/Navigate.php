<?php
namespace app\common\model;
class Navigate extends Base{
	public function society(){
	    return $this->belongsTo("Society","societyid");
	}
	
	
}