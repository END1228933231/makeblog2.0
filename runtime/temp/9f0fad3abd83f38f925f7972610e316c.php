<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\public/../application/index\view\index\index.html";i:1537165810;s:82:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\application\index\view\common\cssInfo.html";i:1536298566;s:78:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\application\index\view\common\nav.html";i:1536678092;s:81:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\application\index\view\common\footer.html";i:1536643848;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="robots" content="all">
<meta name="author" content="author" />
<meta name="Copyright" content="Tencent" />
<meta name="keywords" content="<?php echo $confres['keyword']; ?>" />
<meta name="description" content="<?php echo $confres['desc']; ?>" />
<!-- css文件 -->
<link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
<link rel="stylesheet" href="/static/index/css/iconfont.css">
<link rel="stylesheet" type="text/css" href="/static/index/css/header.css">
<link rel="stylesheet" href="/static/index/css/style.css">
    <!-- 网站ico -->
    <!-- <link rel="icon" href="img/favicon.ico" /> -->
    <title><?php echo $confres['sitename']; ?></title>
</head>

<body>
    <header>
        <!-- 导航栏 -->
        <div class="container-fluid topBgColor">
    <!--顶栏-->
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo url('index/index'); ?>" class="hidden-xs">
                <img src="/static/index/img/Logo.png" class="img-responsive" alt="">
                
            </a>

            <a href="javascript:void();" class="visible-xs">
                <img src="/static/index/img/Logo.png" class="img-responsive logoImg" alt="">
            </a>
        </div>
        <!-- 左边导航栏 -->
        <nav class="navStyle">
            <ul class="navList">
                <li>
                    <a href="<?php echo url('index/index'); ?>">首页</a>
                </li>
                <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <li <?php if($cate['children'] != 0): ?>class="hoverDropDown" <?php endif; ?>>
                    <?php
                        $list = '';
                        if($cate['type'] == 1){
                            $list = "artlist"; 
                        }else if($cate['type'] == 2){
                            $list = "page";
                        }else if($cate['type'] == 3){
                            $list = "imglist";
                        }
                    ?> 
                    <a <?php if($cate['children'] == 0): ?>href="/index/<?php echo $list; ?>/index/cateid/<?php echo $cate['id']; ?>" <?php else: ?>href="#"<?php endif; ?>><?php echo $cate['catename']; ?></a>
                    <?php if($cate['children'] != 0): ?>
                    <ul class="dropdownMenu">
                        <?php if(is_array($cate['children']) || $cate['children'] instanceof \think\Collection || $cate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateson): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="/index/<?php echo $list; ?>/index/cateid/<?php echo $cateson['id']; ?>"><?php echo $cateson['catename']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </nav>
        <!-- 左边导航栏 -->
        <!-- 右边栏 -->
        <div class="topRight">
            <ul class="rightNav">
                <li>
                    <a>
                        <i class="iconfont icon-sousuo searchIco"></i>
                    </a>
                </li>
                <?php if(\think\Request::instance()->session('index_name') == ''): ?>
                    <li>
                        <a href="" data-toggle="modal" data-target="#loginModal">登录</a>
                    </li>
                    <li>
                        <a href="javascript:alert('敬请期待！');">注册</a>
                    </li>
                <?php else: ?>
                    <li class="loginAfter hoverDropDown">
                        <img src="/static/index/img/adam-jansen.jpg" alt="">
                        <a href="#"><?php echo \think\Request::instance()->session('index_name'); ?></a>
                        <ul class="dropdownMenu">
                            <li>
                                <a href="#">个人中心</a>
                            </li>
                            <li>
                                <a href="#">写博文</a>
                            </li>
                            <li>
                                <a href="<?php echo url('login/logout'); ?>">退出登录</a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- END-右边栏 -->
        <!-- 搜索框 -->
        <div class="search" name="search">
            <form action="<?php echo url('search/index'); ?>" method="get">
                <input type="text" placeholder="请输入搜索内容" name="keywords" />
                <!-- 搜索图标 -->
                <i class="iconfont icon-sousuo"></i>
            </form>
        </div>
        <!-- END-搜索框 -->
        <!-- 登录模态框 -->
        <div class="modal fade" id="loginModal" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">登录</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="login" action="<?php echo url('login/login'); ?>" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">账户</label>
                                <div class="col-sm-10">
                                    <input type="text" autocomplete="off" name="username" class="form-control"
                                        placeholder="账户" <?php if(\think\Request::instance()->cookie('cookie_pasd') != ''): ?>value="<?php echo \think\Request::instance()->cookie('cookie_pasd'); ?>"<?php endif; ?>>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                                <div class="col-sm-10">
                                    <input type="password" <?php if(\think\Request::instance()->cookie('cookie_pasd') != ''): ?>value="<?php echo \think\Cookie::get('cookie_pasd'); ?>"<?php endif; ?> class="form-control" placeholder="密码" name="password" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="rempasd" value="1" <?php if(\think\Request::instance()->cookie('cookie_pasd') != ''): ?>checked<?php endif; ?>> 记住密码
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" style="width: 120px;">登录</button>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <a href="" class=" pull-left">忘记密码?</a>
                            <a href="" class="">前去注册</a>
                        </div>
                    </div>
                    <!-- END-modal-body -->
                </div>
                <!-- END-modal-content -->
            </div>
            <!-- END-modal-dialog -->
        </div>
        <!-- END-登录模态框 -->
    </div>
    <!-- END-conatainer -->
</div>
<!-- END-container-fluid -->
        <!-- END-导航栏 -->
    </header>
    <main>
        <div class="container-fluid paddingLR">
            <!-- 轮播图 -->
            <div id="myCarousel" class="carousel slide topCarousel hidden-xs">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/static/index/img/carousel1.jpg" class="img-responsive width100" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="/static/index/img/carousel1.jpg" class="img-responsive width100" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="/static/index/img/carousel1.jpg" class="img-responsive width100" alt="Third slide">
                    </div>
                </div>
            </div>
            <!-- END-轮播图 -->

            <!-- 潮流前线 -->
            <div class="trendCarousel">
                <div class="container">
                    <div class="row">
                        <div class="newsTitle visible-xs col-xs-12" style="z-index:1000;">
                            <h3>潮流前线</h3>
                            <a href="<?php echo url('imglist/index',array('cateid'=>14)); ?>">
                                <span>more+</span>
                            </a>
                        </div>
                        <div id="trendCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <?php 
                                    for($i=0;$i<3;$i++){
                                ?>
                                <div class="item <?php if($i == 1): ?>active<?php endif; ?>">
                                    <div class="row">
                                        <ul>
                                            <?php
                                                for($j=0;$j<4;$j++){
                                            ?>
                                            <li class="col-lg-3 col-md-3 col-sm-3 noticeItem">
                                                <?php
                                                    $pop=$popArt[$i][$j];
                                                ?>
                                                <a href="<?php echo url('article/index',array('artid'=>$pop['id'])); ?>">
                                                    <div class="noticeImg">
                                                        <img src="<?php echo $pop['thumb']; ?>" class="img-responsive" alt="">
                                                        <span class="noticeImgTime"><?php echo date("Y.m.d",$pop['time']); ?></span>
                                                    </div>
                                                    <div class="noticeTitle"><?php echo $pop['title']; ?></div>
                                                    <div class="noticeHr"></div>
                                                    <p class="noticeContent">
                                                        <?php echo $pop['desc']; ?>
                                                    </p>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="carouselNav hidden-xs">
                                <a class="" href="#trendCarousel" data-slide="prev" title="上一页">上一页</a>
                                <span>
                                    <a href="<?php echo url('imglist/index',array('cateid'=>14)); ?>" title="潮流前线">潮流前线</a>
                                </span>
                                <a class="" href="#trendCarousel" data-slide="next" title="下一页">下一页</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END-潮流前线 -->
            <!-- END-中间上部分 -->
            <div class="whiteBg">
                <div class="container">
                    <!-- 中间上部分 -->
                    <div class="row">
                        <!-- 精彩赛事 -->
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="game">
                                <div class="newsTitle">
                                    <h3>精彩赛事</h3>
                                    <a href="<?php echo url('artlist/index',array('cateid'=>19)); ?>">
                                        <span>more+</span>
                                    </a>
                                </div>
                                <div id="gameCarousel" class="carousel slide posiRelative">
                                    <!-- 轮播（Carousel）项目 -->
                                    <div class="carousel-inner">
                                        <?php if(is_array($techImgArt) || $techImgArt instanceof \think\Collection || $techImgArt instanceof \think\Paginator): $i = 0; $__LIST__ = $techImgArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$techImg): $mod = ($i % 2 );++$i;?>
                                        <div class="item <?php if($i == 1): ?>active<?php endif; ?>">
                                            <div class="bigImgNews">
                                                <a href="<?php echo url('article/index',array('artid'=>$techImg['id'])); ?>">
                                                    <img src="<?php echo $techImg['thumb']; ?>" class="img-responsive" alt="">
                                                    <div class="newIco">新闻</div>
                                                    <p>
                                                        <span><?php echo date("Y.m.d",$techImg['time']); ?></span>
                                                        <?php echo $techImg['title']; ?>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <!-- 轮播（Carousel）导航 -->
                                    <a class="left leftBtn" href="#gameCarousel" role="button" data-slide="prev">
                                        <i class="glyphicon iconfont icon-xiangzuo1" aria-hidden="true"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right rightBtn" href="#gameCarousel" role="button" data-slide="next">
                                        <i class="glyphicon iconfont icon-xiangyou1" aria-hidden="true"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- END-#gameCarousel -->
                                <ul>
                                    <?php if(is_array($gameArt) || $gameArt instanceof \think\Collection || $gameArt instanceof \think\Paginator): $i = 0; $__LIST__ = $gameArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$game): $mod = ($i % 2 );++$i;?>
                                    <li class="gameList">
                                        <a href="<?php echo url('article/index',array('artid'=>$game['id'])); ?>" target="blank">
                                            <p><?php echo $game['title']; ?></p>
                                            <span><?php echo date("Y.m.d",$game['time']); ?></span>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <!-- END-game -->
                        </div>
                        <!-- END-精彩赛事 -->
                        <!-- 热门博文 -->
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <div class="hotBlog">
                                <div class="newsTitle">
                                    <h3>热门博文</h3>
                                    <a href="<?php echo url('artlist/index',array('cateid'=>15)); ?>">
                                        <span>more+</span>
                                    </a>
                                </div>
                                <ul class="hotBlogContent">
                                    <!-- 5篇 -->
                                    <?php if(is_array($techArt) || $techArt instanceof \think\Collection || $techArt instanceof \think\Paginator): $i = 0; $__LIST__ = $techArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tech): $mod = ($i % 2 );++$i;?>
                                    <li class="hotList">
                                        <a href="<?php echo url('article/index',array('artid'=>$tech['id'])); ?>" target="blank">
                                            <h3><?php echo $tech['title']; ?></h3>
                                            <p><?php echo $tech['desc']; ?></p>
                                        </a>
                                        <span class="author">
                                            <a href=""><?php echo $tech['author']; ?></a>
                                        </span>
                                        <span class="hottime"><?php echo date("Y.m.d",$tech['time']); ?></span>
                                        <ul class="hotRight">
                                            <li>
                                                <a href="<?php echo url('article/index',array('artid'=>$tech['id'])); ?>" target="blank"><?php echo $tech['click']; ?></a>阅读</li>
                                            <li>
                                                <a href="<?php echo url('article/index',array('artid'=>$tech['id'])); ?>" target="blank"><?php echo $tech['comment']; ?></a>评论</li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- END-热门博文 -->
                    </div>
                    <!-- END-中间上部分 -->
                </div>
                <!-- END-container -->
            </div>
            <!-- END-中间上部分 -->
            <!-- 中间部分 -->
            <div class="blueBg hidden-lg">
                <div class="container">
                    <div class="row">
                        <!-- 技术博文 -->
                        <div class="col-lg-8 col-md-8 col-sm-8 tabHeight">
                            <div class="">
                                <!-- tab列表 -->
                                <ul class="listTab">
                                    <li class="active">
                                        <a href="javascript:;" data-tab="#tab1">最新上线</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-tab="#tab2">机械博文</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-tab="#tab3">视觉博文</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-tab="#tab4">电控博文</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-tab="#tab5">游戏博文</a>
                                    </li>
                                    <a href="" class="tabMore">more+</a>
                                </ul>
                                <!-- END-listTab -->
                                <!-- END-tab列表 -->
                                <div class="clearfix"></div>
                                <!-- tab内容 -->
                                <div class="tabContent">
                                    <!-- item -->
                                    <div class="active" id="tab1">

                                    </div>
                                    <!-- END-item -->
                                    <!-- item -->
                                    <div id="tab2">abcd</div>
                                    <!-- END-item -->
                                    <!-- item -->
                                    <div id="tab3"></div>
                                    <!-- END-item -->
                                    <!-- item -->
                                    <div id="tab4"></div>
                                    <!-- END-item -->
                                    <!-- item -->
                                    <div id="tab5"></div>
                                    <!-- END-item -->
                                </div>
                                <!-- END-tabContent -->
                                <!-- END-tab内容 -->
                            </div>
                            <!-- END-row -->
                        </div>
                        <!-- END-技术博文 -->
                        <!-- 技术团队 -->
                        <div class="col-lg-4 col-md-4 col-sm-4 team">
                            <div class="newsTitle">
                                <h3>技术团队</h3>
                                <a href="/makeblog2.0/public/index.php/index/imglist/index/cateid/17">
                                    <span>more+</span>
                                </a>
                            </div>
                            <div id="teamCarousel" class="carousel slide">
                                <!-- 轮播（Carousel）项目 -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href="">
                                            <img src="/static/index/img/teamShow1.jpg" class="teamImg" alt="First slide">
                                            <div class="teamIntr">
                                                <h3>队名：&ensp;ACE机器人俱乐部</h3>
                                                <span class="teamTime">成立时间：&ensp;2017年7月</span>
                                                <span>队长：&ensp;张宁</span>
                                                <span class="teamGroup">分组：&ensp;机械，软件，电控，宣传，运营，游戏</span>
                                                <p>团队介绍：ACE机器人俱乐部于2017年7月成立，前身是东莞理工学院RobotPioneer战队，ACE取自ace的王牌之意，表达了对队团队的期望——队员们在参加比赛和项目中，通过不断学习和探索，打造属于团队和自己在机器人领域的王牌</p>
                                            </div>
                                            <!-- END-teamIntr -->
                                        </a>
                                    </div>
                                    <!-- END-item -->
                                    <div class="item">
                                        <a href="">
                                            <img src="/static/index/img/teamShow1.jpg" class="teamImg" alt="First slide">
                                            <div class="teamIntr">
                                                <h3>队名：&ensp;ACE机器人俱乐部</h3>
                                                <span class="teamTime">成立时间：&ensp;2017年7月</span>
                                                <span>队长：&ensp;张宁</span>
                                                <span class="teamGroup">分组：&ensp;机械组，软件组，电控组，宣传组，运营组，游戏组</span>
                                                <p>团队介绍：ACE机器人俱乐部于2017年7月成立，前身是东莞理工学院RobotPioneer战队，ACE取自ace的王牌之意，表达了对队团队的期望——队员们在参加比赛和项目中，通过不断学习和探索，打造属于团队和自己在机器人领域的王牌</p>
                                            </div>
                                            <!-- END-teamIntr -->
                                        </a>
                                    </div>
                                    <!-- END-item -->
                                    <div class="item">
                                        <a href="">
                                            <img src="/static/index/img/teamShow1.jpg" class="teamImg" alt="First slide">
                                            <div class="teamIntr">
                                                <h3>队名：&ensp;ACE机器人俱乐部</h3>
                                                <span class="teamTime">成立时间：&ensp;2017年7月</span>
                                                <span>队长：&ensp;张宁</span>
                                                <span class="teamGroup">分组：&ensp;机械组，软件组，电控组，宣传组，运营组，游戏组</span>
                                                <p>团队介绍：ACE机器人俱乐部于2017年7月成立，前身是东莞理工学院RobotPioneer战队，ACE取自ace的王牌之意，表达了对队团队的期望——队员们在参加比赛和项目中，通过不断学习和探索，打造属于团队和自己在机器人领域的王牌</p>
                                            </div>
                                            <!-- END-teamIntr -->
                                        </a>
                                    </div>
                                    <!-- END-item -->
                                </div>
                                <!-- 轮播（Carousel）导航 -->
                                <div class="teamDir">
                                    <a class="left" href="#teamCarousel" role="button" data-slide="prev">
                                        <span class="" aria-hidden="true">上一页</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right" href="#teamCarousel" role="button" data-slide="next">
                                        <span class="" aria-hidden="true">下一页</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END-技术团队 -->
                    </div>
                </div>
            </div>
            <!-- 中间部分 -->
            <!-- 风采作品 -->
            <div class="container marTop30">
                <div class="newsTitle">
                    <h3>风采作品</h3>
                    <a href="<?php echo url('imglist/index',array('cateid'=>18)); ?>">
                        <span>more+</span>
                    </a>
                </div>
                <div class="row rowMar">
                    <?php if(is_array($showArt) || $showArt instanceof \think\Collection || $showArt instanceof \think\Paginator): $i = 0; $__LIST__ = $showArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$show): $mod = ($i % 2 );++$i;if($i == 1||$i == 3): ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 nopad advertiseBox">
                        <a href="<?php echo url('article/index',array('artid'=>$show['id'])); ?>" target="blank">
                            <img src="<?php echo $show['thumb']; ?>" alt="" class="xcImg">
                            <div class="topTri"></div>
                            <div class="advertiseText">
                                <p class="title"><?php echo $show['title']; ?></p>
                                <p class="time"><?php echo date("Y.m.d",$show['time']); ?></p>
                                <p class="content"><?php echo $show['desc']; ?></p>
                            </div>
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 nopad advertiseBox phoneBgAdv" target="blank">
                        <a href="<?php echo url('article/index',array('artid'=>$show['id'])); ?>">
                            <div class="advertiseText">
                                    <p class="title"><?php echo $show['title']; ?></p>
                                    <p class="time"><?php echo date("Y.m.d",$show['time']); ?></p>
                                    <p class="content"><?php echo $show['desc']; ?></p>
                            </div>
                            <img src="<?php echo $show['thumb']; ?>" alt="" class="xcImg">
                            <div class="bottomTri"></div>
                        </a>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!-- END-风采作品 -->
        </div>
    </main>
    <footer>
        <!-- 页脚 -->
        <div class="foot footposition">
	<p>技术支持：制造工作室团队</p>
</div>
        <!-- END-页脚 -->
    </footer>
    <!-- boostrap_js文件 -->
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/public.js"></script>
</body>

</html>