<?php
namespace app\common\model;
class Qrcode extends Base{
	public function member(){
	    return $this->hasMany("member","memberid");
	}
	
	
}