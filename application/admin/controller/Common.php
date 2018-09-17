<?php

namespace app\admin\controller;

use think\Controller;

// 手动添加管理员信息
// http://localhost/makeblog2.0/public/admin/Addadmin

class Common extends Controller{
    public function _initialize(){
        if(!session('id') || !session('name')){
            $this->error('您尚未登录系统',url('index/index'));
        }
        // 获取所有栏目
        $this->getAllcate();
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