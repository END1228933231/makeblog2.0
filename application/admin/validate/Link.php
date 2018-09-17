<?php

namespace app\admin\validate;
use think\Validate;


class Link extends Validate{
    protected $rule = [
        // unique注意需要加数据库名称
        'title' => 'unique:link|require|max:25',
        'url' => 'url|unique:link|require|max:60',
        'desc' => 'require',
    ];

    protected $message = [
        'title.require' => '标题不能为空',
        'title.unique' => '标题不能重复',
        'title.max' => '标题不能超过60个字符',

        'url.require' => 'url不能为空',
        'url.unique' => 'url不能重复',
        'url.unique' => 'url不能超过60个字符',
        'url.url' => 'url地址规则不正确',

        'desc.require' => '链接描述不为空',
    ];

    protected $scene=[
        'add' => ['title'=>'require|unique:link','url','desc'],
        'edit' => ['title'=>'require|unique:link','url'],
    ];
}