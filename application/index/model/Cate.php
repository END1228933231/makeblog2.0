<?php

namespace app\index\model;

use think\Model;

class Cate extends Model{
    public function getsonid($cateid){
		$cateres=$this->select();
        $arr=$this->_getsonid($cateres,$cateid);
        $arr[]=$cateid;
        $strid=implode(',',$arr);
        return $strid;
	}

	public function _getsonid($cateres,$cateid){
		static $arr=array();
		foreach ($cateres as $key => $value) {
			if($value['pid'] == $cateid){
				$arr[]=$value['id'];
				// 递归
				$this->_getsonid($cateres,$value['id']);
			}
		}
		return $arr;
	}

	public function getparents($cateid){
        $cateres=$this->field('id,pid,catename')->select();
        $cates=db('cate')->field('id,pid,catename')->find($cateid);
        $pid=$cates['pid'];
        if($pid){
            $arr=$this->_getparentsid($cateres,$pid);
        }
        $arr[]=$cates;
        return $arr;
    }

    public function _getparentsid($cateres,$pid){
        static $arr=array();
        foreach ($cateres as $k => $v) {
            if($v['id'] == $pid){
                $arr[]=$v;
                $this->_getparentsid($cateres,$v['pid']);
            }
        }

        return $arr;
    }
}