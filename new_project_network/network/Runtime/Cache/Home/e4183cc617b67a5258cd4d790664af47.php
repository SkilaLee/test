<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="baidu-site-verification" content="gMSvLHvnWi" />
    <link rel="stylesheet" type="text/css" href="http://libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>/index_style.css">
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>/login_style.css">
    <link rel="shortcut icon" href="http://toruneko.sinaapp.com/favicon.ico" type="image/x-icon"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Toruneko</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="http://www.toruneko.net">Home</a></li>
                    <li><a href="http://blog.toruneko.net">Blog</a></li>
                    <li><a href="http://blog.toruneko.net/19">Public Api</a></li>
                    <li><a href="https://github.com/toruneko/redlib" target="_blank">RedLib</a></li>
                    <li><a href="http://123.57.74.156:88" target="_blank">DNA SE</a></li>
                    <li><a href="http://blog.toruneko.net/rss">RSS</a></li>
                </ul>
                <ul class="nav navbar-nav" id="login">
                    <li><a href="<?php echo (MANAGER); ?>index">
                            <?php if(is_array($name)): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$na): $mod = ($i % 2 );++$i; echo ($name); endforeach; endif; else: echo "" ;endif; ?> 你好!</a></li>
                    <li><a href="<?php echo (VIEW); ?>cancel">注销登陆</a></li>
                </ul>
                <form action="http://blog.toruneko.net/search" class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" name="kw" class="form-control" placeholder="关键字" />
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid blog-container"><div class="row">
    
    <div class="col-md-9 blog-container-content">
        <div class="page-header"><span><a href="#comment" class="btn btn-default">留下足迹</a></span><h2><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["title"]); endforeach; endif; else: echo "" ;endif; ?></h2></div>
        <div class="panel">
            <div class="panel-body">
               <pre>
                   <?php echo ($vo["content"]); ?>
               </pre>                 
            </div>
            <div class="panel-footer">
            <span class="bdsharebuttonbox">
                <a href="#" class="bds_more" data-cmd="more"></a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            </span>
                创建于：<?php echo (date("Y-m-d",$vo["time"])); ?> By <?php echo ($vo["name"]); ?>           
                <div style="float:right;">
                <a href="<?php echo (MANAGER); ?>edit?id=<?php echo ($vo["content_id"]); ?>">编辑</a>
                <a href="<?php echo (MANAGER); ?>delete?id=<?php echo ($vo["content_id"]); ?>">删除</a>
            </div></div>
        </div>
        <ul class="pager">
            <li class="previous"><a href="<?php echo (MANAGER); ?>content?id=<?php echo ($vo["content_id-1"]); ?>">&larr; 上一篇</a></li>
            <li class="next"><a href="<?php echo (MANAGER); ?>content?id=<?php echo ($vo["content_id+1"]); ?>">下一篇 &rarr;</a></li>
        </ul>
        <div class="page-header"><h4>留下足迹</h4><a name="comment"></a></div>
        <ul class="list-group commentList" id="commentList">
            <span class="empty"></span>        </ul>
                <form class="form-horizontal" id="commentBox" action="<?php echo (MANAGER); ?>discuss?id={vo.content_id}" method="post">    
                    <div class="form-group" id="commentReply">
        <label class="col-md-2 control-label">回复</label>
        <div class="col-md-6">
            <input class="form-control" type="text" disabled="disabled">
            <input value="0" name="fid" id="ContactForm_fid" type="hidden" />        </div>
        <div class="col-md-2">
            <a class="btn btn-default cancel" href="##">取消</a>        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_username">昵称 <span class="required">*</span></label>        <div class="col-md-6">
            <input class="form-control" name="username" id="ContactForm_username" type="text" />        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_email">邮箱 <span class="required">*</span></label>        <div class="col-md-6">
            <input class="form-control" name="email" id="ContactForm_email" type="text" />        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_content">留言 <span class="required">*</span></label>        <div class="col-md-6">
            <textarea class="form-control" style="height:150px" name="content" id="ContactForm_content"></textarea>        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
                <div class="col-md-offset-1 col-md-1" style="
  margin-right: 29.333333%;
  float: right;
">
            <input class="btn btn-default" type="submit" name="yt0" value="提交" />        </div>
        <div class="col-md-2"></div>
    </div>
</form>    </div>
    <div class="col-md-3 blog-container-sidebar" id="sidebar">
    
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#category"></span>
        <h6>分类标签</h6>
    </div>
    <div class="list-group" id="category">
        <a href="<?php echo (MANAGER); ?>type?type=<?php echo ($vo["type"]); ?>" class="list-group-item">
    <span class="badge">6</span>
    <?php echo ($vo["type"]); ?></a>
    </div>
</div></div></div>
    <div class="container-fluid text-center">
        &copy; 2014 - 2015      Toruneko. All rights reserved.
        Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>.        <a href="http://sae.sina.com.cn/">
            <img title="Sae App Engine" alt="Sae App Engine" width="117" height="12" src="http://sae.sina.com.cn/doc/_images/poweredby-117x12px.gif"/>
        </a>
    </div>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/main/blog.js"></script>
<script type="text/javascript" src="http://cdn.bootcss.com/prettify/r298/prettify.min.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
prettyPrint();
var offset = 75;
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

var current = window.location.href;
$('.nav li').each(function(){
    var href = $(this).find('a').attr('href');
    if(href == current){
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    }else if(current.match('^'+href+'.*')){
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    }
});


var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e259f8f91c0fa95b00c128e2cb9c9503";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();

/*]]>*/
</script>
</body>
</html>