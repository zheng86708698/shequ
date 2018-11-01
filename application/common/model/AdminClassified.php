<?php
namespace app\common\model;
class AdminClassified extends Base{
	public function admin(){
	    return $this->belongsTo("Admin","adminid");
	}
	public function classfied(){
	    return $this->belongsTo("Classfied","classifiedid");
	}
	
}