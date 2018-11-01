<?php
namespace app\common\model;
class AdminLog extends Base{
	
	public function admin(){
	    return $this->belongsTo("Admin","adminid");
	}
	
	
}