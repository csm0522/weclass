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

<link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/person.css"/>

<div class="heada" style="background:url(/westu/Public/Home/image/person/banner.jpg) ">
    <div class="headt"><img src="/westu/Public/Home/image/person/use1.jpg"></div>
    <div class="headw1">
        <h2 class="web-font" style="margin-bottom: 5px"><?php echo $userinfo['username']; ?></h2>
        <h4 class="web-font" style="margin-bottom: 40px;color: white;">
            <?php
 if(empty($userinfo['intro'])){echo('快一句话介绍自己吧~');}else{echo $userinfo['intro'];} ?></p>
        </h4>
        <div class="Take"><a href="/westu/index.php/Home/person/edit"><input type="button" name="" value="编辑" placeholder=""></a>
        </div>
        <?php if($userinfo['tag'] == 2 ): ?><div class="publish" id="pubbtn"><a href="/westu/index.php/Home/punlish/index"><input type="button" name="" value="视频发布" placeholder=""></a></div>
            <else if condition="$userinfo['tag'] eq 1 "/><?php endif; ?>
    </div>

    <div class="headw2">
        <div class="guan1">
            <p style="margin-bottom: 5px;">
                <?php echo $concern; ?></p>
            <p>关注</p></div>
        <div class="guan2"><p style="margin-bottom: 5px;">  <?php echo $fan; ?></p> </p>
            <p>粉丝</p></div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="list">
    <div class="list1">
        <ul>
            <li style="background:url(/westu/Public/Home/image/person/background.png) " id="study" onclick="study()"><a
                    href="#">我的收藏</a></li>
            <li id="concern" onclick="concern()"><a href="#">我的关注</a></li>
            <li id="fan" onclick="fan()"><a href="#">我的粉丝</a></li>
            <div class="clear"></div>
        </ul>

    </div>
</div>
<!--  第一个人页面 -->
<div class="clear"></div>
<div id="person1">
    <div class="article">
        <?php if(empty($mycourse)): ?><div class="article1">
                <div class="a-img"><img src="/westu/Public/Home/image/person/swift6.jpg"></div>
                <div class="a-x">
                    <p>暂无收藏课程</p>
                </div>
            </div><?php endif; ?>
        <?php if(is_array($mycourse)): $i = 0; $__LIST__ = $mycourse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mo): $mod = ($i % 2 );++$i;?><div class="article1">
                <div class="a-img"><img src="/westu/Public/<?php echo ($mo["img"]); ?>"></div>
                <div class="a-x">
                    <h2><?php echo ($mo["name"]); ?></h2>
                    <p style="margin-top:20px;margin-right:5px;font-size:13px;color:#8e8e8e;">收藏时间:<?php echo ($mo["createtime"]); ?></p>
                    <div class="clear"></div>
                    <div class="study"><a href="/westu/index.php/Home/course/showdetail/id/<?php echo ($mo["cid"]); ?>">
                        <button style="display: block;width: 80px;height: 40px;color:darkred;background-color: transparent;border: 1px solid darkred;border-radius: 5px;">前往学习</button>
                    </a></div>

                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

</div>
<div class="clear"></div>

<!-- 第二个人页面 -->
<div id="person2">
    <div class="article">
        <?php if(empty($course)): ?><a href="#">
                <div class="kecheng1">
                    <img src="/westu/Public/Home/image/index/p1.jpg" height="128" width="228">
                    <div class="main1-1-1"><?php echo ($co["username"]); ?></div>
                </div>
            </a><?php endif; ?>
        <?php if(is_array($concern)): $i = 0; $__LIST__ = $concern;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?><div class="kecheng1">
                <img src="/westu/Public/Home/image/index/p1.jpg" height="128" width="228">
                <div class="main1-1-1"><?php echo ($co["username"]); ?></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
</div>
<!-- 第三个页面 -->
<div id="person3">
    <div class="article">
        <?php if(empty($course)): ?><a href="#">
                <div class="kecheng1">
                    <img src="/westu/Public/Home/image/index/p1.jpg" height="128" width="228">
                    <div class="main1-1-1"><?php echo ($co["username"]); ?></div>
                </div>
            </a><?php endif; ?>
        <?php if(is_array($concern)): $i = 0; $__LIST__ = $concern;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?><div class="kecheng1">
                <img src="/westu/Public/Home/image/index/p1.jpg" height="128" width="228">
                <div class="main1-1-1"><?php echo ($co["username"]); ?></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
</div>

<div class="foot" >
    <p style="padding-top:30px;">北京师范大学珠海分校信息技术学院数字媒体技术系2013级学生作品</p>
    <p style="padding-top:5px;">Copyright 2016 All Right Reserved ,开发团队:前端:吴欣、吴锐伟;后台:陈少敏,图片来源网络,侵删</p>
</div>

<script type="text/javascript">
    function study() {
        document.getElementById("study").style.background = " url(/westu/Public/Home/image/person/background.png)";
        document.getElementById("concern").style.background = "none";
        document.getElementById("fan").style.background = "none";
        document.getElementById("person1").style.display = "block";
        document.getElementById("person2").style.display = "none";
        document.getElementById("person3").style.display = "none";
    }
    function concern() {
        document.getElementById("concern").style.background = "url(/westu/Public/Home/image/person/background.png)";
        document.getElementById("study").style.background = "none";
        document.getElementById("fan").style.background = "none";
        document.getElementById("person2").style.display = "block";
        document.getElementById("person1").style.display = "none";
        document.getElementById("person3").style.display = "none";
    }
    function fan() {
        document.getElementById("fan").style.background = " url(/westu/Public/Home/image/person/background.png)";
        document.getElementById("study").style.background = "none";
        document.getElementById("concern").style.background = "none";
        document.getElementById("person3").style.display = "block";
        document.getElementById("person1").style.display = "none";
        document.getElementById("person2").style.display = "none";
    }
    study();
</script>
</body>
</html>