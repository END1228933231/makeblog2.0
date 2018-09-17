<?php

namespace app\index\controller;

use app\index\controller\Common;

use app\index\model\User;
use app\index\model\Article as ArticleModel;


class Article extends Common{
	public function index(){
        $artid=input('artid');
        $article=new ArticleModel();
        $artres=$article->find($artid);
        $this->assign('artres',$artres);
        return $this->fetch('article');
	}

}