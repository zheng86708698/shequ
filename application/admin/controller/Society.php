<?php
namespace app\admin\controller;
use think\Controller;
use think\Cache;
class Society extends Common
{
	public function list(){
		$data['name'] = input('phone');
		if (request()->isGet()) {
			$this->assign('data', $data);
			return $this->fetch();
		}
		$data['page'] = intval(input('page'));
        $data['limit'] = intval(input('limit'));
        $society = \app\common\service\Society::getList($data);
        $this->assign('society',$society);
	}
}



