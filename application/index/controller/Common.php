<?php

namespace app\index\controller;

use think\Controller;
use app\index\model\Conf;
use app\index\model\Cate;
use app\index\model\Article;

class Common extends Controller{
    public function _initialize(){
        // 当前位置
        if(input('cateid')){
            $this->getCateName(input('cateid'));
        }
        if(input('artid')){
            $article=db('article')->field('cateid')->find(input('artid'));
            $cateid=$article['cateid'];
            $this->getPos($cateid);
        }
        // 网站配置项
        $this->getConf();
        // 网站栏目导航
        $this->getNavCates();
    }

    // 获取导航条栏目信息
    public function getNavCates(){
        $cateres=db('cate')->where(array('pid'=>0))->select();
        foreach ($cateres as $k => $v) {
            $children=db('cate')->where(array('pid'=>$v['id']))->select();
            if($children){
                $cateres[$k]['children']=$children;
            }else{
                $cateres[$k]['children']=0;
            }
        }
        $this->assign('cateres',$cateres);
    }

    // 获取配置
    public function getConf(){
        $conf=new Conf();
        $_confres=$conf->getAllConf();
        $confres=array();
        foreach ($_confres as $k => $v) {
            $confres[$v['enname']]=$v['value'];
        }
        $this->assign('confres',$confres);
    }

    public function getCateName($cateid){
        $cate=new Cate();
        $posArr=$cate->field('catename')->find($cateid);
        $this->assign('posArr',$posArr);
    }

    public function getPos($cateid){
        $cate=new Cate();
        $posArr=$cate->getparents($cateid);
        $art=new Article();
        if($posArr[0]['id']){
            $hotres=$art->getHotRes($posArr[0]['id']);
        }else{
            $hotres=$art->getHotRes($posArr[1]['id']);
        }
        $this->assign('hotres',$hotres);
    }
}