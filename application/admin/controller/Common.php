<?php

namespace app\admin\controller;

use think\Controller;
use think\View;
use think\Cache;
use think\captcha\Captcha;
class Common extends Controller
{
	public function _initialize()
    {
        $user = session('admin_info');
        if (empty($user)) {
            //echo "<script>window.location.href={:url('Login/login')}</script>";
            $this->redirect('Login/login');
        }
        //当前方法
        $action = request()->module() . "/" . request()->controller() . "/" . request()->action();

       // if (!$this->checkAuth($action)) {
       //      return $this->error('权限不足', url('index/Index/welcome'));
       //  }

        $this->adminInfo = $user;
        $id = $this->adminInfo['id'];
        $this->assign('admin', $this->adminInfo);
    }
}