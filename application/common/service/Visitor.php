<?php
namespace app\common\service;
use think\Exception;
class Visitor{
	public static function newOne($arr){
        $Visitor = new \app\common\model\Visitor();
        $result = $Visitor->allowField(true)->saveAll($arr);
        return $result;
	}
	public static function getList(array $condition=[]){
	    $where[];
	    if(count($condition)){
	    	if(isset($condition['page'] && !empty($condition['page']))){
	    		$where['page'] = $condition['page'];
	    	}
	    	if(isset($condition['shopid'] && !empty($condition['shopid']))){
	    		$where['shopid'] = $condition['shopid'];
	    	}
	    	if (isset($condition['starttime'])&&isset($condition['endtime'])&&!empty($condition['endtime'])&&!empty($condition['endtime'])) {
				$where['creattime'] = ['BETWEEN',[$condition['starttime'],$condition['endtime']]];
			}
	    }
	    $list = \app\common\model\Visitor::where($where)->select();
        return $list;
	}

}






?>