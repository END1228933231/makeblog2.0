<?php

namespace app\index\controller;

use app\index\controller\Common;

class Detail extends Common{
	public function detail(){
		return $this->fetch();
	}
}