<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>作品分享管理后台</title>

		<link rel="stylesheet" href="/westu/Application/Admin/View/Public/Admin/css/common.css" type="text/css" media="screen" />
		<script type="text/javascript" src="/westu/Application/Admin/View/Public/Admin/js/jquery.min.js"></script>
		<script type="text/javascript" src="/westu/Application/Admin/View/Public/Admin/js/tendina.min.js"></script>
		<script type="text/javascript" src="/westu/Application/Admin/View/Public/Admin/js/common.js"></script>
		<link rel="stylesheet" href="/westu/Application/Admin/View/Public/Admin/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/westu/Application/Admin/View/Public/Admin/font-awesome/css/font-awesome.min.css">
		<script src="/westu/Application/Admin/View/Public/Admin/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="/westu/Application/Admin/View/Public/Admin/css/index.css" type="text/css" media="screen" />


	</head>

	<body style="overflow: auto;">
		<!--顶部-->
		<div class="top" style="position: fixed;top:0;z-index: 999;">
			<div style="float: left"><span>作品分享管理中心</span></div>
			<div id="ad_setting" class="ad_setting">
				<span style="margin-right:14px;font-size: 1.8rem;">欢迎您：<?php echo (session('username')); ?></span>
				<a class="ad_setting_a" style="font-size: 1.8rem;" href="<?php echo U('User/logout');?>">注销</a>

			</div>
		</div>
		<!--顶部结束-->
		<!--菜单-->
		<div class="left-menu" style="margin-top:60px;">
			<ul id="menu">
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta" href="<?php echo U('Index/index');?>" ><span class="glyphicon glyphicon-home"></span>欢迎</a>
				</li>
				<li class="menu-list">
					<a href="<?php echo U('User/UserList');?>" style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-user"></span>用户管理</a>
					<ul>
						<li><a href="<?php echo U('User/Stulist');?>">学生用户列表</a></li>
						<li><a href="<?php echo U('User/Tealist');?>">老师用户列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-th-list"></span>课程管理</a>
					<ul><li><a href="<?php echo U('Works/worksList');?>" >作品列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-comment"></span>评论管理</a>
					<ul><li><a href="#" >评论列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-warning-sign"></span>系统管理</a>
					<ul><li><a href="#" >系统通知</a></li>
						<li><a href="#" >意见反馈</a></li>
					</ul>
				</li>
			</ul>
		</div>
<div style="margin-left:180px;margin-top:60px;padding-bottom:50px;overflow: scroll;">
	<div class="alert alert-info" role="alert">
		<h1>上传课程列表</h1></div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th style="width:60px;;text-align: center;">序号</th>
				<th style="width:80px;;text-align: center;">用户</th>
				<th style="width:200px;;text-align: center;">标题</th>
				<th style="width:60px;;text-align: center;">分类</th>
				<th style="width:160px;;text-align: center;">课程封图</th>
				<th style="width:160px;;text-align: center;">发布时间</th>
				<th style="width:60px;;text-align: center;">点击量</th>
				<th style="width:80px;;text-align: center;">查看</th>
				<th style="width:80px;;text-align: center;">删除</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $k=>$C): ?><tr>
					<td><?php echo ($k+1); ?></td>
					<td><?php echo ($C["username"]); ?></td>
					<td><?php echo ($C["name"]); ?></td>
					<td><?php echo ($C["typename"]); ?></td>
					<td><img src="/westu/Public/<?php echo ($C["img"]); ?>" height='150' alt="" /></td>
					<td><?php echo ($C["createttime"]); ?></td>
					<td><?php echo ($C["num"]); ?></td>
					<td>
						<a href="/westu/Home//course/showdetail/id/<?php echo ($C["cid"]); ?>"><button class="btn btn-primary" type="button">查看</button></a>
					</td>
					<td>
						<?php if($C['tag'] == 1 ): ?><label class="btn btn-primary" type="button" style="background: black;color:white;width: 82px;">已删除</label>

							<a href="/westu/index.php/Admin/Works/unDeleWorks/id/<?php echo ($C["cid"]); ?>" class="primary" ><button class="btn btn-primary" type="button"style="background: orange;color:white;width: 82px;">解除</button></a>
							<?php elseif($C['tag'] == 0 ): ?> <a href="/westu/index.php/Admin/Works/deleWorks/id/<?php echo ($C["cid"]); ?>" class="primary" ><button class="btn btn-danger" type="button">删除该课程</button></a><?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>

		</tbody>

	</table>
	<?php echo ($page); ?>
</div>

</body>

</html>