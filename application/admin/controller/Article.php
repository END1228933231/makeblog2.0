<?php

namespace app\admin\controller;

use think\Loader;
use app\admin\controller\Common;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;

class Article extends Common{
    // 首页
    public function index(){
        return $this->fetch('lst');
    }

    // 列表页
    public function lst(){
        // 链表查询
        $articleres = db('article')->field('a.*,b.catename')->alias('a')->join('make_cate b','a.cateid=b.id')->order('id desc')->paginate(6);
        $page = $articleres->render();
        $this->assign('page',$page);
        $this->assign('articleres',$articleres);
        return $this->fetch();
    }

    // 分栏目列表页
    public function catelist(){
        $cateid=input('cateid');
        $catename=db('cate')->field('catename,id')->find($cateid);
        $articleres=db('article')->where('cateid',$cateid)->order('id desc')->paginate(6);
        $page=$articleres->render();
        $this->assign(array(
            'catename' => $catename,
            'articleres' => $articleres,
            'page' => $page
        ));
        return $this->fetch();
    }

    // 添加页
    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            $data['time']=time();
            $article=new ArticleModel;
            $validate = Loader::validate('article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            if($article->save($data)){
                $this->success('添加文章成功',url('lst'));
            }else{
                $this->error('添加文章失败');
            }
            return;
        }
        $cate=new CateModel();
        if(input('cateid')){
            $listid = input('cateid');
            $this->assign('listid',$listid);
            // dump($catename); die;
        }else{
            $listid="0";
            $this->assign('listid',$listid);
        }
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }

    // 编辑页
    public function edit(){
        $article=new ArticleModel;
        if(request()->isPost()){
            $data = input('post.');
            $validate = Loader::validate('article');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $save = $article->save($data,['id'=>$data['id']]);
            if($save !== false){
                $this->success('修改文章成功',url('lst'));
            }else{
                $this->error('修改文章失败');
            }
            return;
        }
        $artres=$article->find(input('id'));
        $this->assign('artres',$artres);

        $cate=new CateModel();
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }

    //删除
    public function del(){
        if(ArticleModel::destroy(input('id'))){
            $this->success('删除文章成功',url('lst'));
        }else{
            $this->error('删除文章失败');
        }
    } 
}