<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head runat="server">
    <title>数媒在线课堂</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="学习网站，提供在线课程">
    <link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/index.css"/>
    <script src="/westu/Public/Home/javascript/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/westu/Public/Home/javascript/jquery.easydrag.handler.beta2.js"></script>

    <!--Luara js文件-->
    <script src="/westu/Public/Home/javascript/jquery.luara.0.0.1.min.js"></script>
</head>
<body>
<div id ="head">
    <div class ="img1">
        <a href="index.html"><img src="/westu/Public/Home/image/index/logo.png"  ></a>
    </div>
    <div class="headw">
        <ul>
            <li style ="margin-left:-5px"><a  href="<?php echo U('index/index');?>" style="color:white;" >首页</a></li>
            <li><a href="<?php echo U('punlish/index');?>">全部课程</a></li>
            <li><a href="http://itc.bnuz.edu.cn/about.aspx?id=19">数字媒体技术系</a></li>
            <li><a href="#">关于我们</a></li>
        </ul>
    </div>
    <div class="headright">
        <div class="heads"><img src="/westu/Public/Home/image/index/sousuo.png" ><input type="text" name="" value="" placeholder=""></div>
        <div class="headr"><span><a href="<?php echo U('login/index');?>"style="color:white;" >登录</a></span><span>|</span><span><a href="<?php echo U('register/index');?>" style="color:white;">注册</a></span></div>
    </div>
    <div class="clear"></div>
</div>
    <link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/login.css"/>
    <div class="main1">
    <div class="headm">
    <ul>
    <a href="<?php echo U('login/index');?>"><li>登录</li></a>
    <a href="<?php echo U('register/index');?>"><li style="background:#fa243d;color:white;">注册</li></a>
     <a href="<?php echo U('index/index');?>"><li><img src="/westu/Public/Home/image/index/close.png" style="width:20%;margin-left:180px;margin-top:-4px;opacity:0.7" ></li></a>
    </ul>
       <div class="clear"></div>
    </div>
    <div class="information"  style ="margin-top:30px;"><span>设置昵称</span><input type="password" name="" value=""></div>
    <div class="information" ><span>设置账号</span><input type="text" name="" value=""></div>
    <div class="information"><span>设置密码</span><input type="password" name="" value=""></div>
    <div class="information"><span>确认密码</span><input type="password" name="" value=""></div>
         <div class="information1"><span>身份选择</span>
     <select name="shenfen">
     <option value="1">学生</option>
      <option value="2">老师</option>
     option
     </select></div>

    <div class="footl"><input type="submit" name="" value="注册"></div>
    </div>
    </body>
</html>