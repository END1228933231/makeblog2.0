<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:90:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\public/../application/admin\view\article\edit.html";i:1536454981;s:82:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\application\admin\view\common\cssInfo.html";i:1535613748;s:78:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\application\admin\view\common\nav.html";i:1536678028;s:82:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\application\admin\view\common\sidebar.html";i:1536717085;s:81:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\application\admin\view\common\jsInfo.html";i:1535613887;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--Basic Styles-->
<!-- <link href="/static/admin/css/bootstrap.css" rel="stylesheet"> -->
<link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
<link href="/static/admin/css/font-awesome.css" rel="stylesheet">
<link href="/static/admin/css/weather-icons.css" rel="stylesheet">

<!--Beyond styles-->
<link id="beyond-link" href="/static/admin/css/beyond.css" rel="stylesheet" type="text/css">
<link href="/static/admin/css/demo.css" rel="stylesheet">
<link href="/static/admin/css/typicons.css" rel="stylesheet">
<link href="/static/admin/css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="/static/admin/css/nav.css">

    <script type="text/javascript" charset="utf-8" src="/static/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/admin/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>


    <title>添加页</title>
</head>

<body>
    <header>
        <!-- 头部 -->
<header>
    <div class="navbar navStyle">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand" id="sidebar-collapse">
                        <small>
                            <img src="/static/admin/img/Logo.png" alt="">
                        </small>
                    </a>
                    <span class="adminLogin">制造工作室后台&ensp;1.0</span>
                </div>
                <!-- /Navbar Barnd -->

                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="/static/admin/img/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2>
                                            <span class="profile">
                                                <span><?php echo \think\Request::instance()->session('name'); ?></span>
                                            </span>
                                        </h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username">
                                        <a>David Stevenson</a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="<?php echo url('admin/logout'); ?>">
                                            退出登录
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="<?php echo url('admin/edit',array('id' => \think\Request::instance()->session('id'))); ?>">
                                            修改密码
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                                no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
</header>
<!-- /头部 -->
    </header>
    <main>
        <div class="main-container container-fluid">
            <div class="page-container">
                <!-- 侧边栏 -->
                <!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lst'); ?>">
                        <span class="menu-text">
                            管理列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('admin/add'); ?>">
                        <span class="menu-text">
                            添加用户 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文章</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lst'); ?>">
                        <span class="menu-text">
                            文章列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('article/add'); ?>">
                        <span class="menu-text">
                            添加文章 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

                <?php if(is_array($cateLst) || $cateLst instanceof \think\Collection || $cateLst instanceof \think\Paginator): $i = 0; $__LIST__ = $cateLst;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$catelst): $mod = ($i % 2 );++$i;?>
                <li>
                    <a <?php if($catelst['child'] == 0): ?>href="<?php echo url('article/catelist',array('cateid'=>$catelst['id'])); ?>"
                        <?php else: ?>href="#" class="menu-dropdown" <?php endif; ?> > 
                        <span class="menu-text">><?php echo $catelst['catename']; ?></span>
                        <i class="menu-expand"></i>
                    </a>
                    <?php if($catelst['child'] != 0): ?>
                    <ul class="submenu">
                        <?php if(is_array($catelst['child']) || $catelst['child'] instanceof \think\Collection || $catelst['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $catelst['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('article/catelist',array('cateid'=>$child['id'])); ?>">
                                <span class="menu-text">
                                    >><?php echo $child['catename']; ?> </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-folder"></i>
                <span class="menu-text">栏目管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/lst'); ?>">
                        <span class="menu-text">
                            栏目列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('cate/add'); ?>">
                        <span class="menu-text">
                            添加栏目 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-chain"></i>
                <span class="menu-text">友情链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('link/lst'); ?>">
                        <span class="menu-text">
                            链接列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('link/add'); ?>">
                        <span class="menu-text">
                            添加栏目 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('conf/conf'); ?>">
                        <span class="menu-text">
                            配置项 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('conf/lst'); ?>">
                        <span class="menu-text">
                            配置列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>
<!-- /Page Sidebar -->

                <!-- Page Content -->
                <div class="page-content">
                    <!-- Page Breadcrumb -->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">系统</a>
                            </li>
                            <li>
                                <a href="<?php echo url('lst'); ?>">文章</a>
                            </li>
                            <li class="active">修改文章</li>
                        </ul>
                    </div>
                    <!-- /Page Breadcrumb -->

                    <!-- Page Body -->
                    <div class="page-body">

                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="widget">
                                    <div class="widget-header bordered-bottom bordered-blue">
                                        <span class="widget-caption">修改文章</span>
                                    </div>
                                    <div class="widget-body">
                                        <div id="horizontal-form">
                                            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id" placeholder="" value="<?php echo $artres['id']; ?>" />
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="title" placeholder="" name="title"
                                                            required="" type="text" value="<?php echo $artres['title']; ?>">
                                                    </div>
                                                    <p class="help-block col-sm-4 red">* 必填</p>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="author" placeholder="" name="author"
                                                            required="" type="text" value="<?php echo $artres['author']; ?>">
                                                    </div>
                                                    <p class="help-block col-sm-4 red">* 必填</p>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username" class="col-sm-2 control-label no-padding-right">关键词</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="keywords" placeholder="" name="keywords"
                                                            required="" type="text" value="<?php echo $artres['keywords']; ?>">
                                                    </div>
                                                    <p class="help-block col-sm-4 red">* 必填</p>
                                                </div>


                                                <div class="form-group">
                                                    <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" name="desc" id="desc""><?php echo $artres['desc']; ?></textarea>
                                                    </div>
                                                    <p class="
                                                            help-block col-sm-4 red">* 必填</p>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" style="border:0; padding-left: 0;" id="thumb" placeholder="" name="thumb"
                                                            type="file">
                                                            <?php if($artres['thumb'] == ''): ?>
                                                            暂无缩略图
                                                            <?php else: ?>
                                                            <img src="<?php echo $artres['thumb']; ?>" alt="" width="30px">
                                                            <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cateid" class="col-sm-2 control-label no-padding-right">上级栏目</label>
                                                    <div class="col-sm-6">
                                                        <select name="cateid" id="">
                                                            <option value="0">顶级栏目</option>
                                                            <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                            <option value="<?php echo $cate['id']; ?>" <?php if($cate['id'] == $artres['cateid']): ?>selected="selected"<?php endif; ?> ><?php echo str_repeat('-',$cate['level']*4) ?><?php echo $cate['catename']; ?></option>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </select>
                                                    </div>
                                                    <p class="help-block col-sm-4 red">* 必填</p>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username" class="col-sm-2 control-label no-padding-right">文章内容</label>
                                                    <div class="col-sm-6">
                                                        <!-- 百度富文本编辑器 -->
                                                        <textarea name="content" id="content"><?php echo $artres['content']; ?></textarea>
                                                    </div>
                                                    <p class="help-block col-sm-4 red">* 必填</p>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-default">修改文章</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Page Body -->
                </div>
                <!-- /Page Content -->
            </div>
        </div>
    </main>

    <!-- 引入js -->
    <!--Basic Scripts-->
<script src="/static/admin/js/jquery_002.js"></script>
<!-- <script src="/static/admin/js/bootstrap.js"></script> -->
<script src="/static/admin/js/jquery.js"></script>
<!-- <script src="/static/index/js/jquery-3.3.1.min.js"></script> -->
<script src="/static/index/js/bootstrap.min.js"></script>
<!--Beyond Scripts-->
<script src="/static/admin/js/beyond.js"></script>

    <script type="text/javascript">
        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        UE.getEditor('content', {
            initialFrameWidth: 800,
            initialFrameHeight: 400,
        });
    </script>

</body>

</html>