<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:30:"./template/pc/view_article.htm";i:1689865538;s:40:"/data/user/htdocs/template/pc/header.htm";i:1689869392;s:40:"/data/user/htdocs/template/pc/footer.htm";i:1689869391;}*/ ?>
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
<div class="layout bg-gray">
	<div class="container">
		<div class="line">
			<div class="x12">
				<div class="nav-bread">
					<i class="fa fa-home margin-small-right" aria-hidden="true"></i> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", ""); echo $__VALUE__; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="line">
			<div class="x9">
				<div class="sidebar-l">
					<!--内容 begin-->
					<div class="article">
						<div class="padding-large bg-white">
							<div class="post">
								<h1><?php echo $eyou['field']['title']; ?></h1>
								<div class="blank"></div>
								<div class="text-gray padding-big-bottom text-default">
									<span class="margin-right">作者：<?php echo $eyou['field']['author']; ?></span>
									<span class="margin-right">更新时间：<?php echo MyDate('Y-m-d',$eyou['field']['update_time']); ?></span>
									<span class="margin-right">点击数：<?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagArcclick = new \think\template\taglib\eyou\TagArcclick; $__VALUE__ = $tagArcclick->getArcclick($aid, "", ""); echo $__VALUE__; ?></span>
                                    
								</div>
								<hr class="bg-gray">
								<div class="blank"></div>
								<?php echo $eyou['field']['content']; ?>
							</div>
                            <div class="blank-small"></div>
                            <div class="text-center">
                            <!-- 收藏代码开始  -->
                            <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagCollect = new \think\template\taglib\eyou\TagCollect; $_result = $tagCollect->getCollect($aid, "<i class='fa fa-heart margin-small-right'></i>已收藏", "<i class='fa fa-heart margin-small-right'></i>加入收藏", "off"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $collect = $__LIST__;?>
                                <a class="button hidden-l bg-gray border-none radius-rounded text-center text-main" <?php echo $collect['onclick']; ?>><?php echo $collect['cancel']; ?></a>
                                <?php echo $collect['hidden']; endif; else: echo "";endif; unset($aid); $collect = []; ?>
                            <!--  收藏代码结束 -->
                            </div>
							<!--tag-->
							<div class="blank-middle"></div>
							<?php if(!(empty($eyou['field']['tags']) || (($eyou['field']['tags'] instanceof \think\Collection || $eyou['field']['tags'] instanceof \think\Paginator ) && $eyou['field']['tags']->isEmpty()))): ?>
								<span>Tag：</span>
								<?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagTag = new \think\template\taglib\eyou\TagTag; $_result = $tagTag->getTag(0, $typeid, $aid, 100, "new", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 100, true) : $_result->slice(0, 100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
								<a href="<?php echo $field['link']; ?>" class="tag tags bg-yellow radius-rounded text-white margin-small-bottom padding-small" <?php echo $field['target']; ?>><?php echo $field['tag']; ?></a>
								<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $field = []; endif; ?>
							<div class="blank-small"></div>
							<!--tag end-->
							<div class="padding-large-top border-top height">
								<div class="line">
									<div class="x10">
										<?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 30, false);  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys11";}'); echo $__VALUE__; ?>：<a href="<?php echo $field['arcurl']; ?>" class="text-gray" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys11";}'); echo $__VALUE__; ?>：<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a>
										<?php else:  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys11";}'); echo $__VALUE__; ?>：<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys10";}'); echo $__VALUE__; endif; $field = []; ?>
										<div class="blank"></div>
										<?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 30, false);  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys12";}'); echo $__VALUE__; ?>：<a href="<?php echo $field['arcurl']; ?>" class="text-gray" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys12";}'); echo $__VALUE__; ?>：<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a>
										<?php else:  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys12";}'); echo $__VALUE__; ?>：<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys10";}'); echo $__VALUE__; endif; $field = []; ?>
									</div>
									<div class="x2 text-center">
										<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = $eyou['field']['parent_id']; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
										<a href="<?php echo $field['typeurl']; ?>" class="button button-big button-block bg-yellow margin-top radius-rounded border-none text-default"><i class="fa fa-mail-reply margin-small-right"></i>返回列表</a>
										<!-- <?php echo $field['typename']; ?> -->
										<?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									</div>
							   </div>
							</div>
						</div>
					</div>
				</div>
				<div class="blank"></div>
			</div>
			<div class="x3">
				<div class="sidebar-r">
					<div class="bg-white padding-big">
						<div class="title-l">
							<h2>随便看看</h2>
						</div>
						<ul class="list-post-text">
							<!-- orderby='rand'随机 -->
							 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'orderby' => 'rand',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "rand", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
								<li class="dot"><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" class="height"><?php echo $field['title']; ?></a></li>
							 <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
						</ul>
					</div>
					<div class="blank-small"></div>
					<div class="bg-white padding-big">
						<div class="title-l">
							<h2>产品推荐</h2>
						</div>

						<div class="list-post-x">
							<!-- flag='h' -->
							<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 5; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '3',
  'loop' => '5',
  'r' => 'eyou:artlist',
  'row' => '5',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
								<div class="media media-x">
									<?php if($field['is_litpic'] == '1'): ?>
									<div class="thumb-md float-left radius">
										<a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" class="img-responsive" alt="<?php echo $field['title']; ?>"></a>
									</div>
									<?php endif; ?>
									<div class="media-body">
										<h3><a href="<?php echo $field['arcurl']; ?>" class="text-middle"><?php echo $field['title']; ?></a></h3>
									</div>
								</div>
							<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
						</div>
					</div>
					<div class="blank-small"></div>
				</div>
			</div>
		</div><!--line end-->
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