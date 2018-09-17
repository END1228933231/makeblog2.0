<?php

namespace app\admin\controller;

use think\Loader;
use app\admin\controller\Common;
use app\admin\model\Admin as AdminModel;

class Admin extends Common{
    // 首页
    public function index(){
        return $this->fetch();
    }

    // 列表页
    public function lst(){
        $admin = new AdminModel();
        $adminres = $admin->getadmin();
        $page = $adminres->render();
        $this->assign('page',$page);
        $this->assign('adminres',$adminres);
        return $this->fetch();
    }

    // 添加页
    public function add(){
        $admin = new AdminModel();
        if(request()->isPost()){
            $permit = "1";
            $add = input('post.');
            $validate = Loader::validate('admin');
            if(!$validate->scene('add')->check($add)){
                $this->error($validate->getError());
            }
            $admin->create([
                'username' => $add['username'],
                'password' => $add['password'],
                'permit' => $permit
            ]);
        }
        return $this->fetch();
    }

    // 编辑页
    public function edit($id){
        // $admin=db('admin')->field('id,username')->find($id);
        $admins=db('admin')->find($id);
        if(request()->isPost()){
            $data = input("post.");
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $admin = new adminModel();
            $res = $admin->saveadmin($data,$admins);
            $validate = Loader::validate('admin');
            if($res !== false){
                $this->success("修改成功",url('lst'));
            }else {
                $this->error("修改失败");
            }
            return;
        }
        if(!$admins){
            $this->error("管理员不存在");
        }
        
        $this->assign('admin',$admins);
        return $this->fetch();
    }

    public function del($id){
        $admin = new AdminModel();
        $res = $admin->deladmin($id);
        if($res == '1'){
            $this->success("删除成功",url('lst'));
        }else{
            $this->error("删除失败");
        }
    }

    public function logout(){
        session(null);
        $this->success("退出成功",url('index/index'));
    }
}