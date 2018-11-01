<?php
namespace app\common\service;
/**
 * 
 */
class MemberCoupon
{
	public static function newOne(array $arr){
		$coupon = new \app\common\model\MemberCoupon();
		$result = $coupon->allowField(true)->save($arr);
		return $result;
	}
	public static function getList(array $condition = [],string $sort = "id",string $by = "asc"){
		$where = [];
		if (count($condition)) {
			if (isset($condition['couponid'])&&!empty($condition['couponid'])) {
				$where['couponid'] = $condition['couponid'];
			}
			if (isset($condition['memberid'])&&!empty($condition['memberid'])) {
				$where['memberid'] = $condition['memberid'];
			}
			if (isset($condition['status'])&&!empty($condition['status'])) {
				$where['status'] = $condition['status'];
			}
		}
		$list = \app\common\model\MemberAcountLog::order($sort.' '.$by)->where($where)->select();
        return $list;

	}
}