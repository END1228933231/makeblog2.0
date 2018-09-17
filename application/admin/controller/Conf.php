<?php

namespace app\admin\controller;

use think\Loader;
use app\admin\controller\Common;
use app\admin\model\Conf as ConfModel;

class Conf extends Common{
    // 首页
    public function index(){
        return $this->fetch('lst');
    }

    // 列表页
    public function lst(){
        $conf = new ConfModel();
        if (request()->isPost()) {
            $confs=input('post.');
            foreach ($confs as $k => $v) {
                $conf->update(['id' => $k, 'sort' =>$v]);
            }
            $this->success('更新排序成功',url('lst'));
            return;
        }
        $confres = $conf->order('sort asc')->paginate(5);
        $page = $confres->render();
        $this->assign(array(
            'confres' => $confres,
            'page' => $page
        ));
        return $this->fetch();
    }

    // 添加页
    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            $validate = Loader::validate('conf');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            // 替换中文逗号
            if($data['values']){
                $data['values']=str_replace('，',',',$data['values']);
            }
            $conf=new ConfModel();
            if($conf->save($data) !== false){
                $this->success('添加配置成功',url('lst'));
            }else{
                $this->error('添加配置失败');
            }
        }
        return $this->fetch();
    }

    // 编辑页
    public function edit(){
        $conf = new ConfModel();
        if(request()->isPost()){
            $data=input('post.');
            $validate = Loader::validate('conf');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            // 替换中文逗号
            if($data['values']){
                $data['values']=str_replace('，',',',$data['values']);
            }
            $save=$conf->save($data,['id' => $data['id']]);
            if($save){
                $this->success('修改配置成功',url('lst'));
            }else{
                $this->error('修改配置失败');
            }
        }
        $confs = $conf->find(input('id'));
        $this->assign('confs',$confs);
        return $this->fetch();
    }

    public function del(){
       $del = ConfModel::destroy(input('id'));
        if($del){
            $this->success("删除配置成功",url('lst'));
        }else{
            $this->error("删除配置失败");
        }
    }

    public function conf(){
        if(request()->isPost()){
            $data = input('post.');
            // 如果复选框没有选中，将值置空
            if(!input('code')){
                $data['code']='';
            }
            if($data){
                foreach ($data as $k => $v) {
                    ConfModel::where('enname',$k)->update(['value'=>$v]);
                }
                $this->success('修改配置成功',url('conf'));
            }
        }
        $confres=ConfModel::order('sort asc')->select();
        $this->assign('confres',$confres);
        return $this->fetch();
    }
}