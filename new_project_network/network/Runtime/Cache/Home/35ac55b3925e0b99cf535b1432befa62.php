<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/map.css">
</head>
<body>
	<div id="wap">	
	</div>
	<div id="login_page_father">
		<img src="<?php echo (IMG_URL); ?>/login_bg.png">
		<a id="close" href=""></a>
			<div id="login_content">
				<img id="login_logo" src="<?php echo (IMG_URL); ?>/new.png">
				<form action="" method="post">
					<div id="user_name_d">
						<img class="l" src="<?php echo (IMG_URL); ?>/login_img.png">
						<input id="user_name" type="text">
					</div>
					<div id="password_d">
						<img class="l" src="<?php echo (IMG_URL); ?>/pass_img.png">
						<input id="password" type="password">
					</div>
					<div id="phone_d">
						<img style="float:left;margin:10px 6px 0 0;" src="<?php echo (IMG_URL); ?>/phone.png">
						<input id="phone" type="text">
					</div>
					<div id="qq_d">
						<img style="float:left;margin:10px 6px 0 0;" src="<?php echo (IMG_URL); ?>/qq.png">
						<input id="qq" type="text">
					</div>
					<div id="behavior_d">
						<img style="float:left;" src="<?php echo (IMG_URL); ?>/behavior.png">
						<div id="post_behavior">
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
							<a href=""></a>
						</div>	
					</div>
				</form>
				<a id="login_sub" href="">登录</a>
				<a id="skip" href="">跳过</a>
				<a id="yes" href="">确认</a>
				<p id="warming">
					你输入的帐号/密码格式有误
				</p>
			</div>
		</div>
	<div class="big_header">
		<div class="header" id="header">
			<div class="header_container">
				<ul class="nav">
					<li class="cqupt">
						<img src="<?php echo (IMG_URL); ?>/cqupt.png">
						<img src="<?php echo (IMG_URL); ?>/cqupt_f.png">
					</li>
					<li class="index">
						<a href="index.html">首页</a>
					</li>
					<li class="map">
						<a href="map.html">重邮地图</a>
					</li>
					<li>
						<a href="data.html">大数据</a>
					</li>
					<li>
						<a href="page.html">重邮百科</a>
					</li>
					<li>
						<a href="windcolor.html">重邮风采</a>
					</li>
					<li>
						<a href="">大声HI</a>
					</li>
					<li class="last">
						<a href="">关于我们</a>
					</li>
					<li id="login1">
						<a>新生登录</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="header" id="H">
			<div class="header_container">
				<ul class="nav">
					<li class="cqupt">
						<img src="<?php echo (IMG_URL); ?>/cqupt.png">
						<img src="<?php echo (IMG_URL); ?>/cqupt_f.png">
					</li>
					<li class="index">
						<a href="index.html">首页</a>
					</li>
					<li class="map">
						<a href="map.html">重邮地图</a>
					</li>
					<li>
						<a href="data.html">大数据</a>
					</li>
					<li>
						<a href="page.html">重邮百科</a>
					</li>
					<li>
						<a href="windcolor.html">重邮风采</a>
					</li>
					<li>
						<a href="">大声HI</a>
					</li>
					<li class="last">
						<a href="">关于我们</a>
					</li>
					<li id="login2">
						<a>新生登录</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="timer">
		<img src="<?php echo (IMG_URL); ?>/maptimerbg.png">
		<div class="timer_container">
			<img id="cloud01" class="cloud01" src="<?php echo (IMG_URL); ?>/cloud01.png">
			<img id="cloud02" class="cloud02" src="<?php echo (IMG_URL); ?>/cloud03.png">
			<img id="cloud03" class="cloud03" src="<?php echo (IMG_URL); ?>/cloud04.png">
			<img id="cloud04" class="cloud04" src="<?php echo (IMG_URL); ?>/cloud05.png">
			<div class="logo"></div>
			<img class="car" src="<?php echo (IMG_URL); ?>/car.png">
			<img src="<?php echo (IMG_URL); ?>/hotball.png"class="hotball">
			<img class="line"src="<?php echo (IMG_URL); ?>/map_line.png">
		</div>
	</div>
	<div class="container">
		<img src="<?php echo (IMG_URL); ?>/mapground.png">
		<div class="container_content">
			<img class="line_right01" src="<?php echo (IMG_URL); ?>/line_right01.png">
			<div class="mapwrapper">
				<a class="active" id = "btu_2D">2D地图</a>
				<a id = "btu_3D">街景地图</a>
				<img src="<?php echo (IMG_URL); ?>/maptitle.png" alt="" class="maptitle">
				<div class = "mapstatic">
					<div id="D2map">
						<img src="<?php echo (IMG_URL); ?>/map.jpg" id="map">
						<div id="map-face"></div>
						<div id="smallmap"><img src="<?php echo (IMG_URL); ?>/smallmap.png"></div>
						<div id="smallmap-face"></div>
						<div id="smallmap-border"></div>
					</div>
					<div id="D3map" style = "height:586px; width:912px;">
					</div>
				</div>
				<img src="<?php echo (IMG_URL); ?>/grass.png" class = "grass">
			</div>
		</div>
		<a id="go_top" href="#"></a>
	</div> 
	<div class="footer">
		<div class="footer_content">
			<p class="b">
				<a href="">
					关于红岩网校
				</a>    
				<span>|</span>    
				<a href="">
					网站地图
				</a>    
				<span>|</span>   
				<a href="">
					指出错误
				</a>    
				<span>|</span>    
				<a href="">
					管理入口
				</a>    
				<span>|</span>
			</p>
			<p>
				本网站由红岩网校工作站负责开发，管理，不经红岩网校委员会书面同意，不得进行转载
			</p>
			<p style="padding-bottom:46px;">
				地址：重庆市南岸区崇文路2号（重庆邮电大学内） 400065 E-mail :redrock@cqupt.edu.cn (023-62461084)
			</p>
		</div>
	</div>
	<script src="<?php echo (JS_URL); ?>/demo.js"></script>
	<script src="<?php echo (JS_URL); ?>/map.js"></script>
	<script src="<?php echo (JS_URL); ?>/fix.js"></script>
	<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=d84d6d83e0e51e481e50454ccbe8986b"></script>
</body>
</html>