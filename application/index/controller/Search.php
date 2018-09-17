<?php

namespace app\index\controller;

use app\index\controller\Common;

use app\index\model\User;
use app\index\model\Article;


class Search extends Common{

	public function index(){
        $article=new Article();
        $keywords=input('keywords');
        $serList=$article->order('id desc')->where('title','like','%'.$keywords.'%')->paginate(5);
        $hotres=$article->getMoreHotRes();
        $page=$serList->render();
        $this->assign(array(
            'serList' => $serList,
            'hotres' => $hotres,
            'page' => $page,
            'keywords' => $keywords
        ));
		return $this->fetch('search');
	}

}