<?php
namespace app\admin\controller;
use think\Controller;

class Member extends Common
{
	public function memberList(){

		return $this->fetch('memberlist');
	}
}