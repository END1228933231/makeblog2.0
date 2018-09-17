<?php

namespace app\admin\controller;

use think\Controller;

use app\admin\model\Admin;

// 手动添加管理员信息
// http://localhost/makeblog2.0/public/admin/Addadmin

class Addadmin extends Controller{
    public function index(){
        // 会员名，密码，权限
        $username="user1";
        $password="user1";
        $permit="1";

        $admin = Admin::create([
            'username' => $username,
            'password' => $password,
            'permit' => $permit
        ]);
        if($admin) echo "添加".$username."成功,id=".$admin->id;
    }
}