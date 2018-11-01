<?php
namespace app\common\model;
use think\Model;
class Base extends Model{
	protected $connection = [
			// 数据库类型
			'type'        => 'mysql',
			// 服务器地址
			'hostname'    => '127.0.0.1',
			// 数据库名
			'database'    => 'sqg',
			// 数据库用户名
			'username'    => 'root',
			// 数据库密码
			'password'    => 'root',
			// 数据库编码默认采用utf8
			'charset'     => 'utf8',
			// 数据库表前缀
			'prefix'      => 'sqg_',
			// 数据库调试模式
			'debug'       => false,
	];
}
