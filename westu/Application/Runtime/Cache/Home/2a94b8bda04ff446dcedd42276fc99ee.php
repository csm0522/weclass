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

<style>
    #s1{
        color:white;
    }
</style>
<div class="banner">
    <div class="example2">
        <ul>
            <li><img src="/westu/Public/Home/image/index/3.jpg" alt="1"/></li>
            <li><img src="/westu/Public/Home/image/index/2.jpg" alt="2"/></li>
            <li><img src="/westu/Public/Home/image/index/1.jpg" alt="3"/></li>
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
<div class="main">
    <div class="main1-1">
        <h3>推荐课程</h3>
        <a href="#">
            <div class="kecheng1">
                <img src="/westu/Public/Home/image/index/crouse1.jpg" height="128" width="228">
                <div class="main1-1-1">HTML5移动Wed&nbspAPP阅读器</div>
                <div class="main1-2">
                    <div class="main1-2l">68.00元</div>

                    <div class="main1-2r">976人在学习</div>
                    <div class="clear"></div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="kecheng1">
                <img src="/westu/Public/Home/image/index/c2.jpg" height="128" width="228">
                <div class="main1-1-1">前台到后台开发整站</div>
                <div class="main1-2">
                    <div class="main1-2l">66.00元</div>

                    <div class="main1-2r">676人在学习</div>
                    <div class="clear"></div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="kecheng1">
                <img src="/westu/Public/Home/image/index/c3.jpg" height="128" width="228">
                <div class="main1-1-1">所向披靡响应式开发</div>
                <div class="main1-2">
                    <div class="main1-2l">49.00元</div>

                    <div class="main1-2r">777人在学习</div>
                    <div class="clear"></div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="kecheng1">
                <img src="/westu/Public/Home/image/index/c4.jpg" height="128" width="228">
                <div class="main1-1-1">数据库SQL架构</div>
                <div class="main1-2">
                    <div class="main1-2l">45.00元</div>

                    <div class="main1-2r">765人在学习</div>
                    <div class="clear"></div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="kecheng1">
                <img src="/westu/Public/Home/image/index/c5.jpg" height="128" width="228">
                <div class="main1-1-1">APP整套开发教程</div>
                <div class="main1-2">
                    <div class="main1-2l">70.00元</div>

                    <div class="main1-2r">988人在学习</div>
                    <div class="clear"></div>
                </div>
            </div>
        </a>
    </div>
</div>
<div id="main2">
    <div class="main2-1">
        <div class="m21"><p>Web</p>
            <p style="margin-top:3px;">前端工程师</p>
            <p style="font-size:14px;margin-top:20px;">可能是最受欢迎的职业</p></div>
        <div class="m22">
            <div class="m22-1">
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m2-1.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m2-2.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m2-3.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m5-4.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>

            </div>


            <div class="m22-2">
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m5-5.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m5-6.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m6-3.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m6-4.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>

    <div class="main2-1">
        <div class="m23"><p>Java</p>
            <p style="margin-top:3px;">工程师</p>
            <p style="font-size:14px;margin-top:20px;">学java，有对象</p></div>
        <div class="m22">
            <div class="m22-1">
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/m2-1.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/j1.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/j2.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/j3.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>

            </div>


            <div class="m22-2">
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/c2.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/c3.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/c4.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="kecheng2" style="margin-top:0px">
                        <img src="/westu/Public/Home/image/index/c5.jpg">
                        <div class="main2-2-1" id="#">数据库SQL架构</div>
                        <div class="main2-2">

                            <div class="main2-2r">765人在学习</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>

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