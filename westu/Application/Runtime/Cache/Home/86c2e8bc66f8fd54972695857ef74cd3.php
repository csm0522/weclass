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
    <style>
        #selected{
            color:white;
        }
    </style>
</head>
<body>
<div id ="head">
    <div class ="img1">
        <a href="index.html"><img src="/westu/Public/Home/image/index/logo.png"  ></a>
    </div>
    <div class="headw">
        <ul>
            <li style ="margin-left:-5px"><a  href="<?php echo U('index/index');?>" id="selected1">首页</a></li>
            <li><a href="<?php echo U('course/index');?>" id=selected1" onclick="showit()">全部课程</a></li>
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

<script>
    $(document).ready(function(){
        $('#selected'+i).on('click',function(){
            this.style.color="white";
        })
    })
</script>
<link rel="stylesheet" type="text/css" href="/westu/Public/Home/css/punlish.css"/>
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
                                                                        class="newTxt" name="names"
                                                                        placeholder="简洁明了的教学叙述,可以加分噢。最多只能输入50个字">
                    </td>
                </tr>
                <tr>
                    <th style="height:30px;padding-bottom: 15px">视频分类</th>
                    <td style="height:30px;padding-bottom: 15px">
                        <select name="types">
                            <option value="0">请选择类型</option>
                            <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$to): $mod = ($i % 2 );++$i;?><option value="<?php echo ($to["tid"]); ?>"><?php echo ($to["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th style="height:40px;vertical-align: top;padding-top:22px;padding-bottom: 15px">视频简介</th>
                    <td style="height:40px;padding-bottom: 15px"><textarea maxlength="2000" name="intro"
                                                                           class="newArea "
                                                                           placeholder="准确到位的视频简单说明，最多只能输入200个字"></textarea>

                </tr>
                <tr>
                    <th style="height:30px;padding-bottom:15px">封面图片</th>
                    <td style="height:30px;padding-bottom:15px"><input type="file" name="img"
                                                                       style="cursor: pointer; opacity:100;width:150px;height:20px;">
                        <span style="margin-left:4%;width:100px;font-size:14px;padding-bottom: 15px">支持图片jpg/gif/png格式</span>
                    </td>
                </tr>
                <tr>
                    <th style="height:30px;padding-bottom: 30px;">视频链接</th>
                    <td style="height:30px;padding-bottom: 30px;"><input type="text" value="" class="newTxt"
                                                                         name="video">
                    </td>
                </tr>

            </table>
            <div class="Take" style="padding-left: 45%"><input type="submit" name="" value="确认" disabled="true" placeholder=""></div>
        </div>
    </form>
</div>

<div class="foot">
    <p style="padding-top:30px;">北京师范大学珠海分校信息技术学院数字媒体技术系2013级学生作品</p>
    <p style="padding-top:5px;">Copyright 2016 All Right Reserved ,开发团队:陈少敏、吴欣、吴锐伟 ,图片来源网络,侵删</p>
</div>

</body>
</html>