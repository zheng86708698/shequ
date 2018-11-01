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
    /**
     * [_table_return layui表单返回]
     * @param  integer $code  [状态]
     * @param  string  $msg   [信息]
     * @param  integer $count [条数]
     * @param  [type]  $data  [数据]
     * @return [type]         [json]
     */
    public function _table_return($code = 0, $msg = "", $count = 0, $data = [])
    {
        // return $this->_return(['code' => $code, 'msg' => $msg, 'count' => $count, 'data' => $data]);
        $data = ['code' => $code, 'msg' => $msg, 'count' => $count, 'data' => $data];
        exit($data);
    }
}