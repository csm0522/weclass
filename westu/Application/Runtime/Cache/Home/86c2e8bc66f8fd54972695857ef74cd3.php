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
            <li><a href="#">关于我们</a></li>
        </ul>
    </div>
    <div class="headright">
        <div class="heads"><img src="/westu/Public/Home/image/index/sousuo.png"><input type="text" name="" value="" placeholder="">

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

<link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/punlish.css"/>
<style>
    .tips{
        float:right;
        margin-right: 5px;
        color: darkred;
    }

</style>
<div id="main_punlish">
    <div class="title_p">
        <ul>
            <li style="border-top: 3px solid #f44450;background:white;"><a href="punlish.html">视频发布</a></li>

        </ul>
    </div>
    <form method="post" action="<?php echo U('punlish/impclass');?>" enctype="multipart/form-data">
        <div class="punlish_d">
            <table>
                <tr>
                    <th style="height:70px;padding-bottom: 15px">视频名称</th>
                    <td style="height:70px;padding-bottom: 15px"><input maxlength="50" type="text" value=""
                                                                        class="newTxt" name="cname"
                                                                        placeholder="简洁明了的给课程一个名称吧。">
                    </td>
                </tr>
                <tr>
                    <th style="height:30px;padding-bottom: 15px">视频分类</th>
                    <td style="height:30px;padding-bottom: 15px">
                        <select name="type">
                            <option value="0">请选择课程分类</option>
                            <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$to): $mod = ($i % 2 );++$i;?><option value="<?php echo ($to["tid"]); ?>"><?php echo ($to["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <span class="tips" id="selected">视频链接?</span>
                    </td>
                </tr>
                <tr>
                    <th style="height:40px;vertical-align: top;padding-top:22px;padding-bottom: 15px">视频简介</th>
                    <td style="height:40px;padding-bottom: 15px"><textarea maxlength="200" name="intro"
                                                                           class="newArea "
                                                                           placeholder="准确到位的视频说明，将会加分哦~"></textarea>

                </tr>
                <tr>
                    <th style="height:30px;padding-bottom:15px">封面图片</th>
                    <td style="height:30px;padding-bottom:15px"><input type="file" name="imgs"
                                                                       style="cursor: pointer; opacity:100;width:450px;height:20px;">
                        <span class="tips">仅支持图片jpg/gif/png格式</span>
                    </td>
                </tr>
                <tr>
                    <th style="height:30px;padding-bottom: 30px;">视频链接</th>
                    <td style="height:30px;padding-bottom: 30px;"><input type="text" value="" class="newTxt"
                                                                         name="video" placeholder="遇到问题?点击右侧获得帮助。">
                      <span style="margin-left: 5px">视频链接?</span>
                    </td>
                </tr>

            </table>
            <div class="Take" style="padding-left: 45%"><input type="submit" name="" value="确认"  placeholder=""></div>
        </div>
    </form>
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