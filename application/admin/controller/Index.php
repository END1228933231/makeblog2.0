<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Admin;
// use app\admin\validate\Admin;
use think\Session;
use think\Loader;
use think\captcha\Captcha;

class Index extends Controller{
	// 登录
	public function index(){
		if(request()->isPost()){
			$data=input('post.');
			$validate = Loader::validate('admin');
            if(!$validate->scene('login')->check($data)){
                $this->error($validate->getError());
            }
			if(!captcha_check($data['code'])){
				$this->error('验证码错误');
			};
			$admin = new Admin();
			$res=$admin::get([
				'username' => $data['username'],
			]);
			if($res){
				if($res['password'] == md5($data['password'])){
					session('id', $res['id']);
					session('name', $res['username']);
					// 获取所有栏目
					$this->getAllcate();
					return $this->fetch('admin/index');
				}else{
					$this->error('密码错误');
				}
			}else{
				$this->error('用户名不存在');
			}
		}else{
		    return $this->fetch();
		}
	}

	public function getAllcate(){
        $cateLst=db('cate')->where('pid',0)->field('id,catename,pid')->select();

        foreach ($cateLst as $k => $v) {
            $child=db('cate')->where('pid','=',$v['id'])->field('id,catename,pid')->select();
            if($child){
                $cateLst[$k]['child'] = $child;
            }else{
                $cateLst[$k]['child'] = 0;
            }
        }
        // dump($cateLst); die;
        $this->assign('cateLst',$cateLst);
    }
}