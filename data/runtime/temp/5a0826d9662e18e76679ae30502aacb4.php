<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:30:"./template/pc/lists_single.htm";i:1689865538;s:40:"/data/user/htdocs/template/pc/header.htm";i:1689869392;s:40:"/data/user/htdocs/template/pc/banner.htm";i:1689865537;s:40:"/data/user/htdocs/template/pc/footer.htm";i:1689869391;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_ico"); echo $__VALUE__; ?>" rel="shortcut icon" type="image/x-icon" />
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/pintuer.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/header.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/style.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/Lib/font-awesome/css/font-awesome.min.css","","","",""); echo $__VALUE__; ?>
<!--[if lt IE 9]><?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/respond.js","","","",""); echo $__VALUE__; ?> <![endif]-->
</head>
<body>
<!--网站公用头部——开始-->
<div class="header">
    <div class="warpper">
        <div class="fl logo"><a href="http://www.ayhmjy.com/"><img
                    src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/8a43ef8143d62d3e290f4604490e1b67.png"></a></div>
        <div class="fr nav">
            <ul>
                <li class="active"><a href="http://www.ayhmjy.com/">首页</a></li>
                <li class=""><a href="http://www.ayhmjy.com/new/700.html">面授课程</a></li>
                <li class=""><a href="http://www.ayhmjy.com/new/1301.html">团队介绍</a></li>
                <li class=""><a href="http://www.ayhmjy.com/new/23.html">作品展示</a></li>
                <li class=""><a href="http://www.ayhmjy.com/new/1027.html">全国分校</a></li>
                <li class=""><a href="http://www.ayhmjy.com/new/5317.html">美考资讯</a></li>
                <li class=""><a href="http://www.ayhmjy.com/new/277.html">关于我们</a></li>
            </ul>
        </div>
        <div></div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- 频道banner,可在栏目图片里编辑 -->
<div class="channel-banner" <?php if(!(empty($eyou['field']['typelitpic']) || (($eyou['field']['typelitpic'] instanceof \think\Collection || $eyou['field']['typelitpic'] instanceof \think\Paginator ) && $eyou['field']['typelitpic']->isEmpty()))): ?> style="background-image: url(<?php echo $eyou['field']['typelitpic']; ?>)" <?php else: ?> style="background-image: url(<?php echo gettoptype($eyou['field']['typeid'],'litpic'); ?>)" <?php endif; ?>> 
	<div class="banner-info">
		<div class="container text-center">
			<h3 class="text-white"><?php echo $eyou['field']['typename']; ?></h3>
			<p class="Conv_DINCondensedC text-white"><?php echo $eyou['field']['englist_name']; ?></p>
		</div>
	</div>
</div>
<!-- 频道banner end -->	
<!-- 横向栏目样式 begin -->
<div class="nav-x">
	<div class="container">
		<ul class="nav-navicon text-center" id="subnav">
			<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
			<li class="col-2">
				<a href="<?php echo $field2['typeurl']; ?>" class="<?php echo $field2['currentstyle']; ?>"><?php echo $field2['typename']; ?></a>
			</li>
			<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
		</ul>
	</div>
</div>
<!-- 横向栏目样式 end -->
<div class="layout bg-gray">
<div class="blank-big"></div>
<div class="container">
	<div class="line">
		<div class="x12">
			<div class="article bg-white">
				<div class="padding-large">
				<div class="post">
					<h1><?php echo $eyou['field']['typename']; ?></h1>
					<div class="blank"></div>
					<?php echo $eyou['field']['content']; ?>
				</div>
				<div class="blank-big"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="blank-big"></div>
</div>
<!--网站公用底部——开始-->
<div class="footer">

    <div class="top">

        <div class="footer-top-inside">

            <div class="flogo"><a href="http://www.ayhmjy.com/">

                    <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/29750ef407dbabccdf17d9257049eeb9.png">

                </a></div>

            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=770935666&amp;site=qq&amp;menu=yes"
                class="qq"></a>

            <a href="https://weibo.com/p/1006062284049645/home?from=page_100606&amp;mod=TAB#place" target="_blank">
                <div class="weibo"></div>
            </a>

            <div class="tel"></div>

            <ul>

                <li>友情链接</li>


                <li>

                    <a href="https://p.qiao.baidu.com/cps/chat?siteId=14981019&amp;userId=29479597"
                        target="_blank">美考资讯内容及所有图片来源于网络，如有侵权，请联系删除！</a>

                </li>


            </ul>

            <div class="tell">招生合作电话：17323832826</div>

            <div class="er"
                style="background: url(/upload/admin/20210726/f870ddb3f7622f21e7311df467f99252.jpg) no-repeat center center/100%;">
            </div>

            <div class="itr">扫码关注</div>

            <div class="bei">重庆艾艺荷马教育科技股份有限公司版权所有备案号： <a style="font-size: 14px;" target="_blank"
                    href="https://beian.miit.gov.cn/#/Integrated/index"> 渝ICP备16006556号-4</a></div>

        </div>

    </div>

    <div class="bottom"></div>

</div>
<!--网站公用底部——结束-->
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/pintuer.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","","","",""); echo $__VALUE__; ?>
</body>
</html>