<?php
namespace app\admin\controller;
use think\Controller;
use think\Cache;
use think\Session;
use think\Db;
class Login extends Controller
{   
    public function login(){
    	if (request()->isPost()) {
    		$name = input('post.login');
         	$pwd = md5(input('post.pwd'));
            $code = input('post.code');
            if (!captcha_check($code)) {
                return json(['msg' => '验证码错误', 'status' => 100]);
            }
         	$login =\app\common\service\Admin::login($name,$pwd);
         	if ($login) {
                Session::set('admin_info',$login);
                Session::set('expire',time()+1200);
                $arr['adminid'] = $login->id;
                $arr['ip'] = $this->request->ip();
                $arr['time'] = time();
                $log = \app\common\service\AdminLog::newOne($arr);
                $configs = Db::name('setting')->field('key,value')->select();
                cache('configs', $configs);
         		return json(['msg' => '登录成功', 'status' => 200]);
         	}else{
         		return json(['msg' => '账号或密码错误', 'status' => 100]);
         	}
    	}
    	
        return $this->fetch();
    }

    public function loginOut(){
        $this->redirect('Login/login');
        session('admin_info',null);
    }

}
