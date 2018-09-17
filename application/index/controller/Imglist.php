<?php

namespace app\index\controller;

use app\index\controller\Common;

use app\index\model\User;
use app\index\model\Article;


class Imglist extends Common{

	public function index(){
        $article=new Article();
        $artres=$article->getAllArticles(input('cateid'));
        $page=$artres->render();
        $this->assign(array(
            'artres' => $artres,
            'page' => $page
        ));
		return $this->fetch('imglist');
	}

}