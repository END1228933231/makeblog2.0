<?php

namespace app\admin\model;

use think\Model;


class Cate extends Model{
	public function catetree(){
		$cateres = $this->order('sort desc')->select();
		return $this->sort($cateres);
	}

	public function sort($data,$pid=0,$level=0){
		static $arr=array();
		foreach ($data as $key => $value) {
			if($value['pid'] == $pid){
				$value['level']=$level;
				$arr[]=$value;
				// 递归
				$this->sort($data,$value['id'],$level+1);
			}
		}
		return $arr;
	}

	public function delcate($id){
		if($this::destroy($id)){
			return 1;
		}else{
			return 2;
		}
	}

	public function getsonid($cateid){
		$cateres=$this->select();
		return $this->_getsonid($cateres,$cateid);
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
}