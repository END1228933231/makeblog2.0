<?php

namespace app\admin\validate;
use think\Validate;


class Admin extends Validate{
    protected $rule = [
        // unique注意需要加数据库名称
        'username' => 'unique:admin|require|max:10',
        'password' => 'require',
    ];

    protected $message = [
        'username.require' => '用户名不能为空',
        'username.unique' => '用户名不能重复',
        'username.max' => '用户名不能超过10个字符',

        'password.require' => '密码不能为空',
    ];

    protected $scene=[
        'add' => ['username','password'],
        'edit' => ['username','password'],
        'login' => ['username' =>'require','password']
    ];
}