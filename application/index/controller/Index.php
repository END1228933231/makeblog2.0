<?php

namespace app\index\controller;

use app\index\controller\Common;

use app\index\model\Article;
// cateid: 潮流前线14,技术博文15，团队资讯16，技术团队17，风采作品18，经典赛事19 

class Index extends Common{

	public function index(){	
		// 潮流前线12篇 cateid=14
		$poparr = $this->getNewArt(14,12);
		$popArt = array();
		$m = 0;
		for($i=0;$i<3;$i++){
			for($j=0;$j<4;$j++){
				$popArt[$i][$j] = $poparr[$m];
				$m++;
			}
		}
		// 经典赛事3+5 cateid=19
		// 轮播图
		$techImgArt = db('article')->where('cateid',19)->where('thumb','not null')->order('click desc')->limit(3)->select();
		$gameArt = $this->getNewArt(19,5);
		// 技术博文5篇 cateid=15
		$techArt = $this->getNewArt(15,5);
		// 风采作品4篇 cateid=18
		$showArt = $this->getNewArt(18,4);
		$this->assign(array(
			'popArt' => $popArt,
			'gameArt' => $gameArt,
			'techImgArt' => $techImgArt,
			'techArt' => $techArt,
			'showArt' => $showArt,
		));
		return $this->fetch();
	}

	// 获取最新文章
	public function getNewArt($cateid,$num){
		$newArt = db('article')->where('cateid',$cateid)->order('id desc')->limit($num)->select();
		return $newArt;
	}
}