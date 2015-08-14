<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/data.css">
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.4.4/jquery.js"></script>
    <script type="text/javascript" src="<?php echo (JS_URL); ?>/slimbox2.js"></script>
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>/slimbox2.css" type="text/css" media="screen" />
    <script type = "text/javascript" src = "http://echarts.baidu.com/build/dist/echarts.js"></script>
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
                        <a href = "map.html">重邮地图</a>
                    </li>
                    <li class = "data_t">
                        <a href = "data.html">数据展示</a>
                    </li>
                    <li class="page_t">
                        <a href="page.html">重邮百科</a>
                    </li>
                    <li>
                        <a href="windcolor.html">邮子风采</a>
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
                    <li class = "data_t">
                        <a href="data.html">数据展示</a>
                    </li>
                    <li class="page_t">
                        <a href="page.html">重邮百科</a>
                    </li>
                    <li>
                        <a href="windcolor.html">邮子风采</a>
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
                <a id = "btu_2D">查询信息</a>
                <a class="active" id = "btu_3D">数据展示</a>
                <img src="<?php echo (IMG_URL); ?>/datatitle.png" alt="" class="maptitle">
                <img src="<?php echo (IMG_URL); ?>/mapbg.png" class= "mapbg">
                <div class = "mapstatic">
                    <div id="D2map">
                        <div class="page_top">
                            <ul class="page_ul" id="an_page_ul">
                                <li class="stu_li"><a id = "find_btu1">找室友</a></li>
                                <li class="stu_li"><a id = "find_btu2">找同学</a></li>
                                <li class="stu_li"><a id = "find_btu3">找辅导员</a></li>
                                <li class="stu_li"><a id = "find_btu4">找志同道合</a></li>
                            </ul>
                        </div>
                        <div class="page_mid_big">
                               <div id="friend">
                                   <ul class="page_mid_mid_ul">
                                        <?php if(is_array($roomie)): $i = 0; $__LIST__ = $roomie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room): $mod = ($i % 2 );++$i;?><li >
                                                <p><?php echo ($room["stu_sch"]); ?>&nbsp;&nbsp;<?php echo ($room["stu_major"]); ?>&nbsp;&nbsp;<?php echo ($room["stu_name"]); ?>&nbsp;&nbsp;<?php echo ($room["stu_gender"]); ?>&nbsp;&nbsp;<?php echo ($room["stu_address"]); ?>&nbsp;&nbsp;<?php echo ($room["stu_phone"]); ?>&nbsp;&nbsp;<?php echo ($room["stu_qq"]); ?><br/>
                                                </p>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                               </div>
                               <div id="room">
                                   <ul class="page_mid_mid_ul">
                                        <?php if(is_array($classmate)): $i = 0; $__LIST__ = $classmate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class): $mod = ($i % 2 );++$i;?><li >
                                                <p><?php echo ($class["stu_sch"]); ?>&nbsp;&nbsp;<?php echo ($class["stu_major"]); ?>&nbsp;&nbsp;<?php echo ($class["stu_name"]); ?>&nbsp;&nbsp;<?php echo ($class["stu_gender"]); ?>&nbsp;&nbsp;<?php echo ($class["stu_address"]); ?>&nbsp;&nbsp;<?php echo ($class["stu_phone"]); ?>&nbsp;&nbsp;<?php echo ($class["stu_qq"]); ?><br/>
                                                </p>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                               </div>
                               <div id="teacher">
                                <ul class="page_img_ul" >
                                    <?php if(is_array($teacher)): $i = 0; $__LIST__ = $teacher;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tch): $mod = ($i % 2 );++$i;?><li class="page_img" style="margin-top:67px;">
                                            <a id="person1" href="<?php echo (IMG_URL); ?>/teacher/<?php echo ($tch["tch_sch"]); ?>（<?php echo ($tch["tch_name"]); ?>）.jpg" rel="lightbox" title="<?php echo ($tch["tch_sch"]); ?>-<?php echo ($tch["tch_name"]); ?>"></a>
                                            <p><?php echo ($tch["tch_sch"]); ?>-<?php echo ($tch["tch_name"]); ?></p>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                               </div>
                               <div id="interest">
                                   <ul class="page_mid_mid_ul">
                                        <li>    
                                            <p>你的爱好为:
                                                    <?php echo ($hobby['hobby_one']); ?>&nbsp;&nbsp;
                                                    <?php echo ($hobby['hobby_two']); ?>&nbsp;&nbsp;
                                                    <?php echo ($hobby['hobby_three']); ?>&nbsp;&nbsp;
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                这些人与你有相同爱好:
                                            </p>
                                        </li>
                                        <?php if(empty($friend_info)): ?><li>
                                                <p>
                                                    <?php echo ($empty); ?>
                                                </p>
                                            </li>
                                        <?php else: ?> 
                                             <li >
                                                <p>学院&nbsp;&nbsp;专业&nbsp;&nbsp;名字&nbsp;&nbsp;性别&nbsp;&nbsp;籍贯&nbsp;&nbsp;电话&nbsp;&nbsp;QQ<br/>
                                                </p>
                                            </li>
                                            <?php if(is_array($friend_info)): $i = 0; $__LIST__ = $friend_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$friend): $mod = ($i % 2 );++$i;?><li >
                                                    <p><?php echo ($friend["stu_sch"]); ?>&nbsp;&nbsp;<?php echo ($friend["stu_major"]); ?>&nbsp;&nbsp;<?php echo ($friend["stu_name"]); ?>&nbsp;&nbsp;<?php echo ($friend["stu_gender"]); ?>&nbsp;&nbsp;<?php echo ($friend["stu_address"]); ?>&nbsp;&nbsp;<?php echo ($friend["stu_phone"]); ?>&nbsp;&nbsp;<?php echo ($friend["stu_qq"]); ?><br/>
                                                    </p>
                                                </li><?php endforeach; endif; else: echo "" ;endif; endif; ?> 
                                    </ul>
                               </div>  
                       </div>
                       <div class="page_bottom">
                        <!-- 分页的地方 -->
                       </div>
                   </div>
                   <div id="D3map" >
                    <div class="page_top" class="page">
                        <ul class="page_ul" id="an_page_ul">
                            <li class="stu_li"><a id = "data_btu1">同乡比例</a></li>
                            <li class="stu_li"><a id = "data_btu2">男女比例</a></li>
                            <li class="stu_li"><a id = "data_btu3">同年同月</a></li>
                            <li class="stu_li"><a id = "data_btu4">最难科目</a></li>
                            <li class="stu_li"><a id = "data_btu5">毕业去向数据</a></li>
                        </ul>
                    </div>
                    <div class="page_mid_big">
                       <div id="page_mid_next"></div>
                       <div class="page_mid_next" id = "row">
                        <h1 id = "WH1">你所在学院及学校的男女比</h1>
                        <h1 id = "WH2">学校里与你同年同月及同星座的比例为</h1>
                        <div id="row1"></div>
                        <div id="row2"></div>
                    </div>
                    <div class="page_mid_next" id = "clomu">
                        <div id="clomu1"></div>
                        <div id="clomu2"></div>
                    </div>
                    <div class="share">
                        <div class="jiathis_style_32x32">
                            <a class="jiathis_button_tsina share1"></a>
                            <a class="jiathis_button_weixin share2" ></a>
                            <a class="jiathis_button_qzone share3"></a>
                        </div>
                        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="page_bottom">
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
    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
    <script src="<?php echo (JS_URL); ?>/demo.js"></script>
    <script src="<?php echo (JS_URL); ?>/data.js"></script>
    <script src="<?php echo (JS_URL); ?>/fix.js"></script>
    <script>
    window.onload = function(){
        var NAME = ["<?php echo ($address); ?>","其余人数","脱单男","脱单女"];
        var VALUE = [{"name":"<?php echo ($address); ?>","value":"<?php echo ($townee_info['townee']); ?>"},
        {"name":"其余人数","value":"<?php echo ($townee_info['other']); ?>"},
        ];
        var TITLE = "在重邮，你的老乡人数占全校人数的比例为";
        var BILI = "<?php echo ($townee_info['scale']); ?>%";        
        charst(NAME,VALUE,TITLE,BILI);
    }
    data_btu1.onclick = function(){
        var NAME = ["<?php echo ($address); ?>","其余人数","脱单男","脱单女"];
        var VALUE = [{"name":"<?php echo ($address); ?>","value":"<?php echo ($townee_info['townee']); ?>"},
        {"name":"其余人数","value":"<?php echo ($townee_info['other']); ?>"},
        ];
        var TITLE = "在重邮，你的老乡人数占全校人数的比例为";
        var BILI = "<?php echo ($townee_info['scale']); ?>%";        
        charst(NAME,VALUE,TITLE,BILI);
    }
    data_btu2.onclick = function(){
        var singleDog = [
        {"name":"男","value":"<?php echo ($scale_major['boy_num']); ?>"},
        {"name":"女","value":"<?php echo ($scale_major['lady_num']); ?>"},
        ]
        var notalone =[
        {"name":"脱单男","value":"30"},
        {"name":"脱单女","value":"70"},
        ]
        charst_sex(singleDog,notalone);
    }
    data_btu3.onclick = function(){
        var age = ["<?php echo ($birthday['year']); ?>年<?php echo ($birthday['month']); ?>月","其他"];
        var agevalue = [
        {"name":"<?php echo ($birthday['year']); ?>年<?php echo ($birthday['month']); ?>月","value":"<?php echo ($birthday['birth_num']); ?>"},
        {"name":"其他","value":"<?php echo ($birthday['other_num']); ?>"},
        ]
        var star = ["<?php echo ($cons_num['cons_name']); ?>","其他"];
        var starvalue = [
        {"name":"<?php echo ($cons_num['cons_name']); ?>","value":"<?php echo ($cons_num['same_num']); ?>"},
        {"name":"其他","value":"<?php echo ($cons_num['other_num']); ?>"},
        ] 
        chart_age(age,agevalue,star,starvalue);
    }
    data_btu4.onclick = function(){
        charst_subject();
    }
    data_btu5.onclick = function(){
            var content = "通信学院的出国升学率为22.3%，灵活就业率为0.48%，待就业率为2.08%，就业率为97.92%";//学院的文字数据介绍
            charst_end(content);
        }
        
        </script>
    </body>
    </html>