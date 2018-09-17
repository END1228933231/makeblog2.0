<?php

namespace app\admin\validate;
use think\Validate;


class Article extends Validate{
    protected $rule = [
        // unique注意需要加数据库名称
        'title' => 'unique:article|require|max:150',
        'cateid' => 'require',
        'content' => 'require'
    ];

    protected $message = [
        'title.require' => '标题不能为空',
        'title.unique' => '标题不能重复',
        'title.max' => '标题不能超过150个字符',

        
        'cateid.require' => '栏目不能为空',

        'content.require' => '文章内容不为空',
    ];

    protected $scene=[
        'add' => ['title','cateid','content'],
        'edit' => ['title','cateid','content'],
    ];
}