<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head runat="server">
    <title>数媒在线课堂</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="学习网站，提供在线课程">
    <link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/index.css"/>
    <script src="/westu/Public/Home/javascript/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/westu/Public/Home/javascript/jquery.easydrag.handler.beta2.js"></script>
    <script type="text/javascript" src="/westu/Public/Home/javascript/md5.js"></script>
    <!--Luara js文件-->
    <script src="/westu/Public/Home/javascript/jquery.luara.0.0.1.min.js"></script>
    <style>
        .headright .heads a:visited,.headright .heads a:hover,.headright .heads a:focus,.headright .heads a:active{
            color: white;
        }
    </style>
</head>
<body>
<div id="head">
    <div class="img1">
        <a href="<?php echo U('index/index');?>"><img src="/westu/Public/Home/image/index/logo.png"></a>
    </div>
    <div class="headw">
        <ul>
            <li style="margin-left:-5px"><a href="<?php echo U('index/index');?>" id="s1">首页</a></li>
            <li><a href="<?php echo U('course/index');?>" id="s2">全部课程</a></li>
            <li><a href="http://itc.bnuz.edu.cn/about.aspx?id=19">数字媒体技术系</a></li>
        </ul>
    </div>
    <div class="headright">
        <div class="heads"><img src="/westu/Public/Home/image/index/sousuo.png"><input type="text" name="" value="" placeholder="">
            <a href="">搜索</a>
        </div>

        <?php if(empty(session('uid'))){?>
        <div class="headr">
            <span><a href="/westu/index.php/Home/login/index" style="color:white;">登录</a></span>
            <span>|</span>
            <span><a href="/westu/index.php/Home/register/index" style="color:white;">注册</a></span>
        </div>
        <?php }?>


        <?php if(!empty(session('uid'))){?>
        <div class="headr">
            <span><a href="/westu/index.php/Home/person/index" style="color:white;">个人中心</a></span>
            <span>|</span>
            <span><a href="/westu/index.php/Home/login/logout" style="color:white;">注销</a></span>
        </div>
        <?php }?>


    </div>
    <div class="clear"></div>
</div>

<link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/login.css"/>
<div class="main1">
    <div class="headm">
        <ul>
            <a href="<?php echo U('login/index');?>">
                <li style="background:#fa243d;color:white;">登录</li>
            </a>
            <a href="<?php echo U('register/index');?>">
                <li>注册</li>
            </a>
            <a href="<?php echo U('index/index');?>">
                <li><img src="/westu/Public/Home/image/index/close.png"
                         style="width:20%;margin-left:180px;margin-top:-4px;opacity:0.7"></li>
            </a>
        </ul>
        <div class="clear"></div>

    </div>

    <div class="information" style="margin-top:30px;"><span>输入账号</span><input type="text" name="" value=""
                                                                              id="username">
        <span
                style="margin-left:10px;color:darkred" id="resuser">帐号不存在</span></div>
    <script>
        $('#resuser').hide();
    </script>
    <div class="information"><span>输入密码</span><input type="password" name="" value="" id="pwd"></div>

    <div class="footl"><input type="button" name="" value="登录" id="loginbtn"></div>
</div>

<script>
    $('#resuser').hide();
    $('#username').on('blur',function(){
        var names = $('#username').val();
        $.ajax({
            url: '<?php echo U('register/checkusername');?>',
            data: {name:names},
            type: 'post',
            success: function (data) {
                console.log(data);
                if (data.result == 1) {
                    $('#resuser').hide();
                }
                else {
                    $('#resuser').show();
                }
            }
        });
    });
    $('#loginbtn').on('click', function () {
        var names = $('#username').val();
        var pwds = $('#pwd').val();
        var userdata = {
            username: names,
            pwd: hex_md5(pwds),
        };
        $.ajax({
            url: '<?php echo U('login/logins');?>',
            data: userdata,
            type: 'post',
            success: function (data) {
                console.log(data);
                if (data.result == 0) {
                    window.location.href = "<?php echo U('index/index');?>";
                }
                else {
                    alert(data.msg);
                }
            }
        });
    })
</script>
</body>
</html>