<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\public/../application/admin\view\index\index.html";i:1536853697;s:81:"D:\phpstudy\PHPTutorial\WWW\makeblog2.0\application\admin\view\common\footer.html";i:1535127776;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="stylesheet" type="text/css" href="/static/admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/login.css">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/css/beyond.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/static/admin/css/nav.css">

    <title>后台登录—制造工作室</title>
</head>
<style>
    
</style>
<body>
    <header>
        <div class="navbar navStyle">
            <div class="navbar-inner">
                <div class="navbar-container">
                    <!-- Navbar Barnd -->
                    <div class="navbar-header pull-left">
                        <a href="#" class="navbar-brand">
                            <small>
                                <img src="/static/admin/img/Logo.png" alt="">
                            </small>
                        </a>
                        <span class="adminLogin">制造工作室后台&ensp;1.0</span>
                    </div>
                    <!-- /Navbar Barnd -->
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="loginForm" >
            <form action="<?php echo url('index'); ?>" method="post" id="adminLogin">
                <div class="logInput">
                    <input type="text" name="username" placeholder="账号">
                </div>

                <div class="logInput">
                    <input type="password" name="password" placeholder="密码">
                </div>

                <div class="checkNum">
                    验证码：
                    <input type="text" name="code" size="4">
                    <img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?Math.random();'" alt="captcha" />
                </div>

                <div class="" style="clear:both;"></div>    

                <div class="logBtn" style="margin-top:30px;">
                    <button type="submit" >登录</button>
                </div>
                
            </form>
        </div>   
    </main>

    <footer>
        <div class="foot">
	<p>技术支持：制造工作室团队(个人)</p>
</div>
    </footer>

    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
</body>
</html>
