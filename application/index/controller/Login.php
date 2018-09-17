<?php

namespace app\index\controller;

use app\index\controller\Common;

use app\index\model\User;
use think\Loader;
use \think\Request;

class Login extends Common{
	public function register($username='',$password='',$email=''){
		if(request()->isPost()){
			$user=new User();
			$data=([
				'username' => $username,
				'password' =>$password,
				'email' => $email
			]);
			$user->data($data,true);
			$res=$user->save();
			// dump($res);
			if($res) return $this->fetch("login");
			else echo "注册失败";
		}else{
			return $this->fetch();
		}
		
	}

	public function login(){
		if(request()->isPost()){
			$user = new User();
			$data=input('post.');
			$time=empty($data['rempasd'])?0:3600*24*7;
			cookie('cookie_name', $data['username'],$time);
			cookie('cookie_pasd', $data['password'],$time);

			$res=$user::get([
				'username' => $data['username'],
				'password' => $data['password']
			]);
			if($res){
				session('id', $res['id']);
				session('index_name', $res['username']);
				$this->redirect($_SERVER['HTTP_REFERER'],302);
				echo '<script>location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
			}else{
				// $this->error('登录失败');
				echo '<script>alert("密码错误，登录失败");history.back(-1);</script>';
			}
		}else{
			return $this->fetch();
		}
	}

	public function logout(){
		session(null);
		// cookie(null);
		$this->redirect($_SERVER['HTTP_REFERER'],302);

		// return $this->fetch('index/index');
    }
}

