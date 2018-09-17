<?php

namespace app\admin\model;

use think\Model;


class Admin extends Model{
	public function setPasswordAttr($val){
		return md5($val);
	}

	public function getadmin(){
		return $this::paginate(5);
	}

	public function deladmin($id){
		if($this::destroy($id)){
			return 1;
		}else{
			return 2;
		}
	}

	public function saveadmin($data,$admin){
		if(!$data['password']){
			$data['passord'] = $admin['password'];
		}else{
			$data['password'] = md5($data['password']);
		}

		return $this::update(['username'=>$data['username'],'password' => $data['password']],['id'=>$data['id']]);
	}
}