<?php
namespace app\common\model;
class PropertyAdmin extends Base{
	
	public function property(){
	    return $this->belongsTo("Property","propertyid");
	}
	
}