<?php
namespace app\admin\controller;
use think\Controller;
use think\Cache;
class Index extends Common
{
    public function index(){
        $admin = session('admin_info');
        $this->assign('name',$admin->name);
        return $this->fetch();
    }
    public function welcome(){
    	$uid = $this->adminInfo['id'];
    	$log = \app\common\service\AdminLog::getOne($uid);
    	$count = \app\common\service\AdminLog::count($uid);
    	$this->assign('count',$count);
    	$this->assign('adminid',$log->adminid);
    	$this->assign('ip',$log->ip);
    	$this->assign('time',date('Y-m-d H:i:s',$log->time));
    	$this->assign('log',$log);
    	return $this->fetch();
    }
}
