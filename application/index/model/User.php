<?php

namespace app\index\model;

use think\Model;

/**
 *  用户注册信息
 */
class User extends Model
{
	public function setPasswordAttr($value){
		return md5($value);
	}

	 public function setUsernameAttr($value)
    {
        return strtolower($value);
    }
	
}