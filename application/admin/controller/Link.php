<?php

namespace app\admin\controller;

use think\Loader;
use app\admin\controller\Common;
use app\admin\model\Link as LinkModel;

class Link extends Common{
    // 首页
    public function index(){
        return $this->fetch('lst');
    }

    // 列表页
    public function lst(){
        $link = new LinkModel();        
        if(request()->isPost()){
            $sorts=input('post.');
            foreach ($sorts as $k => $v) {
                $link->update(['id' => $k, 'sort' =>$v]);
            }
            $this->success('更新排序成功',url('lst'));
            return;
        }
        $linkres=$link->order('sort asc')->paginate(5);
        $this->assign('linkres',$linkres);
        $page = $linkres->render();
        $this->assign('page',$page);
        return $this->fetch();
    }

    // 添加页
    public function add(){
        $link = new LinkModel();
       if(request()->isPost()){
            $data = input('post.');
            $validate = Loader::validate('link');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
           $add = $link->create($data);
           if($add){
               $this->success('添加友情链接成功',url('lst'));
           }else{
               $this->error('添加友情链接失败');
           }
       }
        return $this->fetch();
    }

    // 编辑页
    public function edit(){
        $link = new LinkModel();
        if(request()->isPost()){
            $data = input('post.');
            $validate = Loader::validate('link');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $save = $link->save($data,['id'=>$data['id']]);
            if($save !== false){
                $this->success('修改链接成功',url('lst'));
            }else{
                $this->error('修改链接失败');
            }
            return;
        }
        $links = $link->find(input('id'));
        $this->assign('links',$links);
        return $this->fetch();
    }

    public function del(){
       $del = LinkModel::destroy(input('id'));
        if($del){
            $this->success("删除成功",url('lst'));
        }else{
            $this->error("删除失败");
        }
    }
}