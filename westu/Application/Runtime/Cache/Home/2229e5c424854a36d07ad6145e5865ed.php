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
            <li style ="margin-left:-5px"><a  href="<?php echo U('index/index');?>" id="s1">首页</a></li>
            <li><a href="<?php echo U('course/index');?>" id="s2" >全部课程</a></li>
            <li><a href="http://itc.bnuz.edu.cn/about.aspx?id=19" >数字媒体技术系</a></li>
            <li><a href="#" >关于我们</a></li>
        </ul>
    </div>
    <div class="headright">
        <div class="heads"><img src="/westu/Public/Home/image/index/sousuo.png" ><input type="text" name="" value="" placeholder=""></div>
        <div class="headr"><span><a href="<?php echo U('login/index');?>"style="color:white;" >登录</a></span><span>|</span><span><a href="<?php echo U('register/index');?>" style="color:white;">注册</a></span></div>
    </div>
    <div class="clear"></div>
</div>

<link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/liebiao.css"/>
<script type="text/javascript" src="/westu/Public/Home/javascript/jquery.easydrag.handler.beta2.js"></script>
<style>
    #s2{
        color:white;
    }
</style>
<!--列表页-->
<div id="container" style="min-height: 500px;">
    <div class="container1">
        <div class="head1">
            <p class="p1" style="border-bottom: 1px solid  #D0D0D0; padding-bottom: 20px;">全部课程</p>
            <div style="border-bottom: 1px solid #edf1f2">
                <ul>
                    <li class="p2">分类</li>
                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$to): $mod = ($i % 2 );++$i;?><a href="/westu/index.php/Home/course/showlist/id/<?php echo ($to["tid"]); ?>">
                            <li class="p3" id="type<?php echo ($to["tid"]); ?>"><?php echo ($to["typename"]); ?></li>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="clear"></div>
            </div>

            <div class="tool1">
                <ul>
                    <li class="p2 active" style="padding-left: 5px;padding-right: 5px;">最新</li>
                    <a href="">
                        <li class="p3">最热</li>
                    </a>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="content1">
            <div class="dade">
                <?php if(is_array($courselist)): $i = 0; $__LIST__ = $courselist;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?><div class="xiaode"><a href="play.html">
                        <img src="image/liebiao/img1.jpg"/>
                        <p class="content-p1">HTML+CSS基础课程</p>
                        <p class="content-p2" style="height: 10px;">8小时带领大家步步深入学习标签和基础知…</p>
                        <p class="content-p3">更新完毕 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;396313人学习</p></a>
                    </div><?php endforeach; endif; else: echo "暂无数据" ;endif; ?>

                <div class="clear"></div>
            </div>

        </div>
    </div>

</div>

<div class="foot" >
    <p style="padding-top:30px;">北京师范大学珠海分校信息技术学院数字媒体技术系2013级学生作品</p>
    <p style="padding-top:5px;">Copyright 2016 All Right Reserved ,开发团队:陈少敏、吴欣、吴锐伟 ,图片来源网络,侵删</p>
</div>

</body>
</html>