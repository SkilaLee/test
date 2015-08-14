<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title></title>    
    <meta charset="utf-8">
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.4.4/jquery.js"></script>
    <script type="text/javascript" src="<?php echo (JS_URL); ?>/slimbox2.js"></script>
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>/slimbox2.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/windcolor.css">
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
                    <li class="windcolor_t">
                        <a href="windcolor.html">重邮风彩</a>
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
                    <li class="windcolor_t">
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
                    <a class="active">重邮风采</a>
                <img src="<?php echo (IMG_URL); ?>/color_title.png" alt="" class="maptitle">
                <div class = "mapstatic">
                    <div id="D2map" class="page">
                        <div class="page_top">
                            <ul class="page_ul" id="color_ul">
                                <li class="page_li_first"><a >五四之星</a></li>
                                <li class="page_li"><a >优秀老师</a></li>
                                <li class="page_li"><a class="page_active">校园风物</a></li>
                                <li class="page_li"><a >原创视频</a></li>
                                
                            </ul>
                        </div>
                        <div class="page_mid_big" id="color_choose">
                            <div class="page_mid" style="display:none">
                                <ul class="page_img_ul" >
                                    <li class="page_img page_img_spe" ><a id="person1" href="<?php echo (IMG_URL); ?>/person_1.png" rel="lightbox" title="孝老敬亲之星-蔡长庆"></a>
                                        <span >孝老敬亲之星-蔡长庆</span></li>
                                    <li class="page_img"><a id="person2" href="<?php echo (IMG_URL); ?>/person_2.png" rel="lightbox" title="党员模范之星-王斌"></a>
                                        <span>党员模范之星-王斌</span></li>
                                    <li class="page_img"><a id="person3" href="<?php echo (IMG_URL); ?>/person_3.png" rel="lightbox" title="才艺特长之星-张永晖"></a>
                                        <span>才艺特长之星-张永晖</span></li>
                                    <li class="page_img"><a id="person4" href="<?php echo (IMG_URL); ?>/person_4.png" rel="lightbox" title="健康运动之星-高全利"></a>
                                        <span>健康运动之星-高全利</span></li>
                                    <li class="page_img" style="margin-top:67px;"><a id="person5" href="<?php echo (IMG_URL); ?>/person_5.png" rel="lightbox" title="网络建设之星-蒋子良"></a>
                                        <span>网络建设之星-蒋子良</span></li>
                                    <li class="page_img" style="margin-top:67px;"><a id="person6" href="<?php echo (IMG_URL); ?>/person_6.png" rel="lightbox" title="科技创新之星-叶升蔚"></a>
                                        <span>科技创新之星-叶升蔚</span></li>
                                    <li class="page_img" style="margin-top:67px;"><a id="person7" href="<?php echo (IMG_URL); ?>/person_7.png" rel="lightbox" title="自立自强之星-阮福亮"></a>
                                        <span>自立自强之星-阮福亮</span></li>
                                    <li class="page_img" style="margin-top:67px;"><a id="person8" href="<?php echo (IMG_URL); ?>/person_8.png" rel="lightbox" title="勤奋好学之星-肖颖"></a>
                                    <span>勤奋好学之星-肖颖</span></li>
                                </ul>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul">
                                    </ul>
                                </div>
                            </div>
                            <div class="page_mid" style="display:none">
                                <div style="height:500px;" id="teacher_page">
                                    <div class="page_fix" style="display:block" >
                                        <ul class="page_img_ul" id="teacher_1">
                                            <li class="page_img page_img_spe" ><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_1"></a>
                                                <span >传媒艺术学院-王睿</span></li>
                                            <li class="page_img"><a  rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_2"></a>
                                                <span>体育学院-王樱桃</span></li>
                                            <li class="page_img"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_3" ></a>
                                                <span>自动化学院-付蔚</span></li>
                                            <li class="page_img"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_4"></a>
                                                <span>理学院-朱伟</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_5"></a>
                                                <span>理学院-张清华</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_6"></a>
                                                <span>马克思主义学院-闵绪国</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_7"></a>
                                                <span>传媒艺术学院-陈祺祺</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_8"></a>
                                            <span>生物信息学院-袁帅</span></li>
                                        </ul>
                                    </div>
                                    <div class="page_fix" style="display:none" >
                                        <ul class="page_img_ul" id="teacher_2">
                                            <li class="page_img page_img_spe" ><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_9"></a>
                                                <span >外国语学院-高非</span></li>
                                            <li class="page_img"><a  rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_10"></a>
                                                <span>通信与信息工程学院-漆晶</span></li>
                                            <li class="page_img"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_11"></a>
                                                <span>理学院-周贤菊</span></li>
                                            <li class="page_img"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_12"></a>
                                                <span>光电工程学院-罗元</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_13"></a>
                                                <span>理学院-郑继明</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_14"></a>
                                                <span>通信与信息工程学院-胡庆</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_15"></a>
                                                <span>体育学院-高冬</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_16"></a>
                                            <span>法学院-彭学良</span></li>
                                        </ul>
                                    </div>
                                     <div class="page_fix" style="display:none" >
                                        <ul class="page_img_ul" id="teacher_3">
                                            <li class="page_img page_img_spe" ><a   rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_17"></a>
                                                <span >通信与信息工程学院-蒋青</span></li>
                                            <li class="page_img"><a  rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_18"></a>
                                                <span style="font-size:13px;">计算机科学与技术学院-熊安萍</span></li>
                                            <li class="page_img"><a  rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_19"></a>
                                                <span>外国语学院-张琬悦</span></li>
                                            <li class="page_img"><a  rel="lightbox" href="<?php echo (IMG_URL); ?>/teacher_20"></a>
                                                <span>马克思主义学院-周兴茂</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="teacher_choose">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li"><a>3</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="page_mid" >
                                <div style="height:500px;" id="pic_main">
                                    <div class="page_fix" style="display:block;">
                                        <ul class="page_img_ul" id="win_img_1">
                                            <li class="page_img page_img_spe" ><a  href="<?php echo (IMG_URL); ?>/color_0.jpg" rel="lightbox" title="五栋篮球场"></a>
                                                <span >方法</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_1.jpg" rel="lightbox" title="数字图书馆"></a>
                                                <span>数字图书馆</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_2.jpg" rel="lightbox" title="校园一角"></a>
                                                <span>校园一角</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_3.jpg" rel="lightbox" title="我只是一个摄影爱好者"></a>
                                                <span>我只是一个摄影爱好者</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_4.jpg" rel="lightbox" title="似梦似幻"></a>
                                                <span>似梦似幻</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_5.jpg" rel="lightbox" title="学生活动中心昼与夜"></a>
                                                <span>学生活动中心昼与夜</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_6.jpg" rel="lightbox" title="落英缤纷"></a>
                                                <span>落英缤纷</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_7.jpg" rel="lightbox" title="二教"></a>
                                                <span>二教</span></li>
                                        </ul>
                                    </div>
                                    <div class="page_fix" style="display:none;">
                                        <ul class="page_img_ul" id="win_img_2">
                                            <li class="page_img page_img_spe" ><a  href="<?php echo (IMG_URL); ?>/color_8.jpg" rel="lightbox" title="五栋篮球场"></a>
                                                <span >第二页</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_9.jpg" rel="lightbox" title="数字图书馆"></a>
                                                <span>数字图书馆</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_10.jpg" rel="lightbox" title="校园一角"></a>
                                                <span>校园一角</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_11.jpg" rel="lightbox" title="我只是一个摄影爱好者"></a>
                                                <span>我只是一个摄影爱好者</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a href="<?php echo (IMG_URL); ?>/color_12.jpg" rel="lightbox" title="似梦似幻"></a>
                                                <span>似梦似幻</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_13.jpg" rel="lightbox" title="学生活动中心昼与夜"></a>
                                                <span>学生活动中心昼与夜</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_14.jpg" rel="lightbox" title="落英缤纷"></a>
                                                <span>落英缤纷</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_15.jpg" rel="lightbox" title="二教"></a>
                                                <span>二教</span></li>
                                        </ul>
                                    </div>
                                    <div class="page_fix" style="display:none;">
                                        <ul class="page_img_ul" id="win_img_3">
                                            <li class="page_img page_img_spe" ><a  href="<?php echo (IMG_URL); ?>/color_16.jpg" rel="lightbox" title="五栋篮球场"></a>
                                                <span >第三页</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_17.jpg" rel="lightbox" title="数字图书馆"></a>
                                                <span>数字图书馆</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_18.jpg" rel="lightbox" title="校园一角"></a>
                                                <span>校园一角</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_19.jpg" rel="lightbox" title="我只是一个摄影爱好者"></a>
                                                <span>我只是一个摄影爱好者</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_20.jpg" rel="lightbox" title="似梦似幻"></a>
                                                <span>似梦似幻</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_21.jpg" rel="lightbox" title="学生活动中心昼与夜"></a>
                                                <span>学生活动中心昼与夜</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_22.jpg" rel="lightbox" title="落英缤纷"></a>
                                                <span>落英缤纷</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="<?php echo (IMG_URL); ?>/color_23.jpg" rel="lightbox" title="二教"></a>
                                                <span>二教</span></li>
                                        </ul>
                                    </div>
                                    <div class="page_fix" style="display:none;">
                                        <ul class="page_img_ul" id="win_img_4">
                                            <li class="page_img page_img_spe" ><a  href="<?php echo (IMG_URL); ?>/color_24.jpg" rel="lightbox" title="五栋篮球场"></a>
                                                <span >第四页</span></li>
                                            <li class="page_img"><a  href="<?php echo (IMG_URL); ?>/color_25.jpg" rel="lightbox" title="数字图书馆"></a>
                                                <span>数字图书馆</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="pic_btn">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li"><a>3</a></li>
                                        <li class="page_bottom_li"><a>4</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="page_mid" style="display:none">
                                <div style="height:500px;" id="choose_video">
                                    <div class="page_fix" style="display:block" >
                                        <ul class="page_img_ul" id="video">
                                            <li class="page_img page_img_spe" ><a  href="http://v.youku.com/v_show/id_XNzExODM3Njk2.html?from=y1.2-1-95.3.12-2.1-1-1-11-0 "  target="_blank"></a>
                                                <span >五栋篮球场</span></li>
                                            <li class="page_img"><a  href="http://v.youku.com/v_show/id_XMTI2NjE0MDcwNA==.html?from=s1.8-1-1.2 "  target="_blank"></a>
                                                <span>数字图书馆</span></li>
                                            <li class="page_img"><a  href="http://v.youku.com/v_show/id_XNjA4NjQwMzY4.html?from=s1.8-1-1.2" target="_blank"></a>
                                                <span>校园一角</span></li>
                                            <li class="page_img"><a  href="http://v.youku.com/v_show/id_XNzA0MDc2ODA0.html?from=s1.8-1-1.1" target="_blank"></a>
                                                <span>我只是一个摄影爱好者</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="http://v.youku.com/v_show/id_XNDAzNzQ1MjA4.html?from=s1.8-1-1.1" target="_blank"></a>
                                                <span>似梦似幻</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="http://v.youku.com/v_show/id_XNDMyNTIzMzAw.html?from=s1.8-1-1.1" target="_blank"></a>
                                                <span>学生活动中心昼与夜</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="http://v.youku.com/v_show/id_XNzIxODU1OTYw.html?from=s1.8-1-1.1" target="_blank"></a>
                                                <span>落英缤纷</span></li>
                                            <li class="page_img" style="margin-top:67px;"><a  href="http://v.youku.com/v_show/id_XMTI4MjA1NjM4MA==.html?from=s1.8-1-1.2" target="_blank"></a>
                                                <span>二教</span></li>
                                        </ul>
                                    </div>
                                    <div class="page_fix" style="display:none;">
                                        <ul class="page_img_ul" id="video1">
                                            <li class="page_img page_img_spe" ><a  href="http://v.youku.com/v_show/id_XMTI4ODMxNjEwOA==.html?from=s1.8-1-1.2 " target="_blank" ></a>
                                                <span >五栋篮球场</span></li>
                                            <li class="page_img"><a  href="http://v.youku.com/v_show/id_XNDY2MTA3MjIw.html?from=s1.8-1-1.2 "  target="_blank"></a>
                                                <span>数字图书馆</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="video_btn">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
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
    <script src="<?php echo (JS_URL); ?>/windcolor.js"></script>
    <script src="<?php echo (JS_URL); ?>/fix.js"></script>
    <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=d84d6d83e0e51e481e50454ccbe8986b"></script>
</body>
</html>