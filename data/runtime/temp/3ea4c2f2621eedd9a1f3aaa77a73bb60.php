<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:31:"./template/pc/lists_article.htm";i:1689865537;s:40:"/data/user/htdocs/template/pc/header.htm";i:1689869392;s:40:"/data/user/htdocs/template/pc/banner.htm";i:1689865537;s:40:"/data/user/htdocs/template/pc/footer.htm";i:1689869391;}*/ ?>
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
		<div class="menu-toggle">
			<button class="button icon-navicon" data-target="#subnav">
				<span><i class="fa fa-reorder margin-small-right"></i><?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = $eyou['field']['parent_id']; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?><?php echo $field['typename']; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?><!-- 上一级栏目名称 --></span>
			</button>
			<h3><?php echo $eyou['field']['typename']; ?></h3><!-- 当前栏目名称 -->
			<ul class="nav-navicon text-center" id="subnav">
                <li class="col-2">
                	<a href="<?php echo $eyou['field']['ptypeurl']; ?>" <?php if($eyou['field']['has_children'] > '0'): ?>class="active"<?php endif; ?>>全部</a>
                </li>
				<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				<li class="col-2">
					<a href="<?php echo $field2['typeurl']; ?>" class="<?php echo $field2['currentstyle']; ?>"><?php echo $field2['typename']; ?></a>
				</li>
				<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
			</ul>
		</div>
	</div>
</div>
<!-- 横向栏目样式 end -->	
<div class="layout bg-gray">
	<!--当前位置调用-->
	<div class="container hidden-l">
		<div class="line">
			<div class="nav-bread">
				<i class="fa fa-home margin-small-right" aria-hidden="true"></i> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", ""); echo $__VALUE__; ?>
			</div>
		</div>
	</div>
	<!--当前位置调用 end-->
	<div class="blank"></div>
	<div class="container">
        <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "keyword"=> "",      "idlist"=> "",      "idrange"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 9, "", "", "desc", "on","off","");if(!empty($_result_tmp) && (is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 40, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 50, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <div class="line bg-white list-news">
            <div class="x4">
                <div class="media-img">
                    <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" class="img-responsive" alt="<?php echo $field['title']; ?>"></a>
                </div>
            </div>
            <div class="x1 text-center">
                <div class="time text-center">
                    <p class="text-large Conv_DINCondensedC"><?php echo MyDate('d',$field['update_time']); ?></p>
                    <p class="Conv_DINCondensedC text-middle text-gray"><?php echo MyDate('Y-m',$field['update_time']); ?></p>
                </div>
            </div>
            <div class="x6">
                <div class="news margin-top">
                    <h3><a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a></h3>
                    <p class="text-gray hidden-l"><?php echo $field['seo_description']; ?></p>
                </div>
            </div>
            <div class="x1">
                <a href="<?php echo $field['arcurl']; ?>" class="button radius-none text-center"><i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
		<div class="blank-small"></div>
		<div class="text-center">
			<ul class="pagination">
			    <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "pre,pageno,next", "9"); echo $__VALUE__; ?>
			</ul>
		</div>
	</div>
	<div class="blank-large"></div>
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