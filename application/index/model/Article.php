<?php

namespace app\index\model;

use think\Model;
use app\index\model\Cate;

class Article extends Model{
    public function getAllArticles($cateid){
        $cate=new Cate();
        $allCateID=$cate->getsonid($cateid);
        $artRes=db('article')->where("cateid IN($allCateID)")->order('id desc')->paginate(8);
        return $artRes;
    }

    public function getHotRes($cateid){
        $cate=new Cate();
        $allCateID=$cate->getsonid($cateid);
        $artRes=db('article')->where("cateid IN($allCateID)")->field('title,id')->order('click desc')->limit(8)->select();
        return $artRes;
    }

    public function getMoreHotRes(){
        $cate=new Cate();
        $artRes=db('article')->field('title,id')->order('click desc')->limit(8)->select();
        return $artRes;
    }

    public function getNewArticle(){
        $newArticleRes=$this->limit(10)->order('id desc')->select();
    }
}