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

<script src="/westu/Public/Home/javascript/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/westu/Public/Home/javascript/jquery.easydrag.handler.beta2.js"></script>

<!--Luara js文件-->
<script src="/westu/Public/Home/javascript/jquery.luara.0.0.1.min.js"></script>
<link href="/westu/Public/Home/css/video-js.min.css" rel="stylesheet">
<script src="/westu/Public/Home/javascript/video.min.js"></script>
<link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/xiangqing.css"/>
<style>
    .videoshow .title {
        margin-left: 11%;
        margin-top: 50px;
        font-size: 16px;
    }

    .videoshow .title .titleright {
        float: right;
        display: inline-block;
        width: 90px;
        height: 30px;
        margin-right: 15%;
        color: darkred;
        border: 1px solid darkred;
        border-radius: 20px;
        background-color: transparent;
        outline: none;
        transition: all 0.3s linear;
    }

    .videoshow .title .titleright:hover {
        color: white;
        border: 1px solid darkred;
        border-radius: 10px;
        background-color: darkred;
    }
</style>
<?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?><div class="videoshow">
        <div class="title">
            <div id="classsid" style="display: none"><?php echo ($co["cid"]); ?></div>
            <span style="font-size: 16px;"><?php echo ($co["name"]); ?></span>
            <button class="titleright" onclick="adds()" id="addbtn">加入收藏</button>
        </div>
        <div class="clear"></div>
        <div class="vedio" style="width: 1100px;margin-left:auto;margin-right:auto;margin-top:15px;">
            <!--视频插入的地方-->
            <embed src="<?php echo ($co["video"]); ?>"
                   quality="high" width="1100" height="500" align="middle" allowScriptAccess="always"
                   allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
<script>
    $(function () {
        var cid = $("#classsid").html();
        var j = $("#addbtn");
        $.ajax({
            url: '<?php echo U('course/checkstatus');?>',
            data: {id: cid,},
            type: 'post',
            success: function (res) {
                j.html(res.msg);
            }

        })
    });
    function adds() {
        var cid = $("#classsid").html();
        $.ajax({
            url: '<?php echo U('course/addclass');?>',
            data: {id: cid,},
            type: 'post',
            success: function (res) {
                if (res.result == 0) {
                    alert(res.msg);
                }
                else if (res.result == 1) {
                    alert(res.msg);
                }else{
                    alert(res.msg);
                }
            }

        })
    }


</script>
<div class="content">
    <div class="content-left">
        <div class="left-top">
            <p class="p3">课程介绍</p>
            <p class="p4" style="margin-top: 10px;">
                <?php echo $course["cintro"]; ?></p>
        </div>


        <div class="left-bottom">
            <p class="p3">课程评价</p>

            <div class="pinglun">
                <div class="pinglun-left">
                </div>

                <div class="pinglun-right">
                    <p class="pinglun-p1" style="margin-right: 15px;">小哲sunflower</p>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <div class="clear"></div>
                    <p class="pinglun-p2">作为一个初学者，这个教程很好，也很适合在上班的时候学，很容易理解~！</p>
                    <p class="pinglun-p3">时间：2015-12-03 17:18:58</p>
                </div>

            </div>
            <div class="clear"></div>
            <div class="pinglun">
                <div class="pinglun-left">
                </div>

                <div class="pinglun-right">
                    <p class="pinglun-p1" style="margin-right: 15px;">小哲sunflower</p>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <div class="clear"></div>
                    <p class="pinglun-p2">作为一个初学者，这个教程很好，也很适合在上班的时候学，很容易理解~！</p>
                    <p class="pinglun-p3">时间：2015-12-03 17:18:58</p>
                </div>

            </div>
            <div class="clear"></div>
            <div class="pinglun">
                <div class="pinglun-left">
                </div>

                <div class="pinglun-right">
                    <p class="pinglun-p1" style="margin-right: 15px;">小哲sunflower</p>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <div class="clear"></div>
                    <p class="pinglun-p2">作为一个初学者，这个教程很好，也很适合在上班的时候学，很容易理解~！</p>
                    <p class="pinglun-p3">时间：2015-12-03 17:18:58</p>
                </div>

            </div>
            <div class="clear"></div>
            <div class="pinglun">
                <div class="pinglun-left">
                </div>

                <div class="pinglun-right">
                    <p class="pinglun-p1" style="margin-right: 15px;">小哲sunflower</p>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <div class="clear"></div>
                    <p class="pinglun-p2">作为一个初学者，这个教程很好，也很适合在上班的时候学，很容易理解~！</p>
                    <p class="pinglun-p3">时间：2015-12-03 17:18:58</p>
                </div>

            </div>
            <div class="clear"></div>
        </div>


    </div>

    <div class="content-right">
        <p class="box4-p1" style="margin-top: 40px;">讲师介绍</p>
        <div class="box4">
            <h2> <?php echo $teacher[0]["username"]; ?></h2>
            <p class="box4-p3"> <?php echo $teacher[0]["intro"]; ?></p>
        </div>
    </div>
</div>


<div class="clear"></div>


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