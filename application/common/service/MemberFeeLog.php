<?php
namespace app\common\service;
/**
 * 
 */
class MemberFeeLog
{
	public static function newOne(array $arr){
		$coupon = new \app\common\model\MemberFeeLog();
		$result = $coupon->allowField(true)->save($arr);
		return $result;
	}
	public static function getList(string $memberid,string $sort = "time",string $by = "asc"){
		$list = \app\common\model\MemberFeeLog::order($sort.' '.$by)->where('memberid',$memberid)->select();
        return $list;
	}
}