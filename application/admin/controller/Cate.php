<?php

namespace app\admin\controller;
use app\admin\controller\Common;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;

class Cate extends Common{
    // 前置操作
    protected $beforeActionList = [
        'delsoncate'  =>  ['only'=>'del'],
    ];

    // 首页
    public function index(){
        return $this->fetch('lst');
    }

    // 列表页
    public function lst(){
        $cate = new CateModel();
        if (request()->isPost()) {
            $sorts=input('post.');
            foreach ($sorts as $k => $v) {
                $cate->update(['id' => $k, 'sort' =>$v]);
            }
            $this->success('更新排序成功',url('lst'));
            return;
        }
        $cateres = $cate->catetree();
        // $page = $cateres->render();
        // $this->assign('page',$page);
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }

    // 添加页
    public function add(){
        $cate=new CateModel();
        if(request()->isPost()){
            $add = $cate->save(input('post.'));
            if($add){
                $this->success('添加栏目成功！',url('lst'));
            }else {
                $this->error('添加栏目失败！');
            }
        }
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }

    // 编辑页
    public function edit(){
        $cate=new CateModel();
        if (request()->isPost()) {
           $save = $cate->save(input('post.'),['id'=>input('id')]);
           if($save ){
               $this->success('修改栏目成功',url('lst'));
           }else{
                $this->error('修改栏目失败');
           }
            return;
        }
        $cates = $cate->find(input('id'));
        $cateres = $cate->catetree();
        $this->assign('cateres',$cateres);
        $this->assign('cates',$cates);
        return $this->fetch();
    }

    public function del($id){
        $cate = new CateModel();
        $res = $cate->delcate($id);
        if($res !== false){
            $this->success("删除成功",url('lst'));
        }else{
            $this->error("删除失败");
        }
    }

    public function delsoncate(){
        $cateid=input('id');
        $cate = new CateModel();
        $sonids=$cate->getsonid($cateid);
        $allcateid=$sonids;
        $addcateid[]=$cateid;
        foreach($allcateid as $k=>$v){
            $article=new ArticleModel();
            $article->where(array('cateid' => $v))->delete();
        }

        if($sonids){
            $cate->delcate($sonids);
        }
    }

    public function logout(){
        session(null);
        $this->success("退出成功",url('index/index'));
    }
}