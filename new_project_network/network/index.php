<?php 
	header("content-type:text/html;charset=utf8");

	//数据库配置在home/config.php
	//js改了几处图片链接,main.js那里面的几个图片链接被我换成了绝对定位....直接Ctrl+f .png可以找到
	//html上的链接用的常量

	//定义css,js,img常量,方便后期维护
	define("SITE_URL","http://localhost/test/new_project_network");


	define("CSS_URL",SITE_URL."/network/public/Home/css");
	define("JS_URL",SITE_URL."/network/public/Home/js");
	define("IMG_URL",SITE_URL."/network/public/Home/image");

	//view 常量
	define("VIEW", SITE_URL."/network/index.php/Home/User");
	//把目前tp模式由生成模式变为开发模式
	define ("APP_DEBUG",true);
	//引入框架的核心程序
	require "../thinkPHP/ThinkPHP/ThinkPHP.php";
	// require "http://localhost/network/index.php/Home/User/index";
 ?>