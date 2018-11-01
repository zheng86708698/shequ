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
}
