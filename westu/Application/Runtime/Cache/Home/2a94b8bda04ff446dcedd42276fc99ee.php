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

<style>
    #s1 {
        color: white;
    }
</style>
<div>
    <div class="banner">
        <div class="example2">
            <ul>
                <li><img src="/westu/Public/Home/image/index/banner3.jpg" alt="1"/></li>
                <li><img src="/westu/Public/Home/image/index/banner2.jpg" alt="2"/></li>
                <li><img src="/westu/Public/Home/image/index/banner1.jpg" alt="3"/></li>
            </ul>
            <ol>
                <li></li>
                <li></li>
                <li></li>

            </ol>
        </div>
        <!--Luara图片切换骨架end-->
        <script>
            $(function () {
                <!--调用Luara示例-->
                $(".example2").luara({
                    width: "1200",
                    height: "340",
                    interval: 4500,
                    selected: "seleted",
                    deriction: "left"
                });

            });
        </script>
    </div>
</div>
<div class="main">
    <div class="main1-1">
        <h3>推荐课程</h3>
        <?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?><a href="/westu/index.php/Home/course/showdetail/id/<?php echo ($co["cid"]); ?>">
                <div class="kecheng1">
                    <img src="/westu/Public/<?php echo ($co["img"]); ?>" height="128" width="228">
                    <div class="main1-1-1"><p><?php echo ($co["name"]); ?></p></div>

                    <div class="main1-2">
                        <div class="main1-2l"><?php echo ($co["typename"]); ?></div>
                        <div class="main1-2r">点击量:<?php echo ($co["num"]); ?></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div class="main1-1">
    <h3>最新课程</h3>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/westu/index.php/Home/course/showdetail/id/<?php echo ($vo["cid"]); ?>">
            <div class="kecheng1">
                <img src="/westu/Public/<?php echo ($vo["img"]); ?>" height="128" width="228">
                <div class="main1-1-1"><p><?php echo ($vo["name"]); ?></p></div>
                <div class="main1-2">
                    <div class="main1-2l"><?php echo ($vo["typename"]); ?></div>

                    <div class="main1-2r">点击量:<?php echo ($vo["num"]); ?></div>
                    <div class="clear"></div>
                </div>
            </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>

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