<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:34:"./template/pc/lists_article_zp.htm";i:1689956066;s:40:"/data/user/htdocs/template/pc/header.htm";i:1689869392;s:40:"/data/user/htdocs/template/pc/footer.htm";i:1689869391;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>">
	<!-- 页面描述 -->
	<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>">
	<title><?php echo $eyou['field']['seo_title']; ?></title>
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/aos.css">
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/swiper.min.css">
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/main.css">

    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/aos.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/dyfrom.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/main.js"></script>
</head>

<body>
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
	<div class="nbanner">
		<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/bmskc.jpg">
	</div>
	<div class="bannertop">
		<div class="search">
			<div class="searchbox">
				<div class="searchbox_nav">
					<div class="searchbox_nav_navtop">全国重点院校<i class="layui-icon layui-icon-down"></i></div>
					<div class="searchbox_nav_navcom">
						<label class="sjxtotp"></label>
						<ul>
							<li>
								<a href="http://www.ayhmjy.com/zdyx/1.html">九大美院</a>
							</li>
							<li>
								<a href="http://www.ayhmjy.com/zdyx/4.html">985、211院校</a>
							</li>
							<li>
								<a href="http://www.ayhmjy.com/zdyx/3.html">15所参照艺术院校</a>
							</li>
							<li>
								<a href="http://www.ayhmjy.com/zdyx/2.html">31所独立院校</a>
							</li>
							<li>
								<a href="http://www.ayhmjy.com/zdyx/0.html">普通院校</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="searchbox_right">
					<form action="http://www.ayhmjy.com/home/index/search">
						<input type="text" name="q" placeholder="输入想搜索的内容">
						<button><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/sousuo.png"></i><label>搜索</label></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="zpzs">
		<div class="warpper">
			<div class="zptop">
				<div class="title"><strong>作品展示</strong><span>Good work</span></div>
				<div class="activeclidk">
					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "72"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "activecoler", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<span class="hegexian <?php echo $field['currentclass']; ?>">
						<a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a>
					</span>
					<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
				</div>
			</div>
			<div class="zplist">
				<ul>
					<?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "keyword"=> "",      "idlist"=> "",      "idrange"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 10, "", "zhiwei", "desc", "on","off","");if(!empty($_result_tmp) && (is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<li><a href="<?php echo $field['arcurl']; ?>">
							<div class="img"><img src="<?php echo $field['litpic']; ?>" title="<?php echo $field['title']; ?>"
									alt="<?php echo $field['title']; ?>"></div>
							<div class="txt over1"><?php echo $field['title']; ?></div>
						</a>
					</li>
					<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
				</ul>
			</div>
			<div class="paging" id="paging">
				<ul class="pageulcom"></ul>
			</div>
		</div>
	</div>
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
	
</body>

</html>