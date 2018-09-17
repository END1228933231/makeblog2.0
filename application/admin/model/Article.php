<?php

namespace app\admin\model;

use think\Model;

class Article extends model{
    protected static function init()
    {
        // 图片插入前
        Article::beforeInsert(function ($data) {
            if($_FILES['thumb']['tmp_name']){
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    $thumb =  DS . 'uploads'.'/'.$info->getSaveName();
                    $data['thumb'] = $thumb;
                }
            }
        });

        // 图片更新前
        Article::beforeUpdate(function ($data) {
            if($_FILES['thumb']['tmp_name']){
                $arts=Article::find($data->id);
                $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                if(file_exists($thumbpath)){
                    @unlink($thumbpath);
                }
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    $thumb =  DS . 'uploads'.'/'.$info->getSaveName();
                    $data['thumb'] = $thumb;
                }
            }
        });

        // 删除缩略图
        Article::beforeDelete(function ($data) {
            $arts=Article::find($data->id);
            $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
            if(file_exists($thumbpath)){
                @unlink($thumbpath);
            }
        });
    }
}