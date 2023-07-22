<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:36:"./template/pc/lists_article_news.htm";i:1690016687;s:40:"/data/user/htdocs/template/pc/header.htm";i:1690016688;s:43:"/data/user/htdocs/template/pc/searchbar.htm";i:1690018447;s:40:"/data/user/htdocs/template/pc/footer.htm";i:1689869391;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>">
    <!-- 页面描述 -->
    <meta name="description"
        content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>">
    <title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
    <link rel="shortcut icon" href="">
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
        <div class="fl logo"><a href="/"><img
                    src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/8a43ef8143d62d3e290f4604490e1b67.png"></a></div>
        <div class="fr nav">
            <ul>
                <li class="active"><a href="/">首页</a></li>
                <li class=""><a href="/index.php?m=home&c=Lists&a=index&tid=68">面授课程</a></li>
                <li class=""><a href="/index.php?m=home&c=Lists&a=index&tid=69">团队介绍</a></li>
                <li class=""><a href="/index.php?m=home&c=Lists&a=index&tid=72">作品展示</a></li>
                <li class=""><a href="/index.php?m=home&c=Lists&a=index&tid=77">全国分校</a></li>
                <li class=""><a href="/index.php?m=home&c=Lists&a=index&tid=85">美考资讯</a></li>
                <li class=""><a href="/index.php?m=home&c=Lists&a=index&tid=79">关于我们</a></li>
            </ul>
        </div>
        <div></div>
        <div class="clearfix"></div>
    </div>
</div>
	<div style="height:78px"></div>
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
                        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "108"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <li>
                            <a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a>
                        </li>
                        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                    </ul>
                </div>
            </div>
            <div class="searchbox_right">
                <?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","","","","","default"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <form method="get" action="<?php echo $field['action']; ?>">
        <?php echo $field['hidden']; ?>
                    <input type="text" name="keywords" placeholder="输入想搜索的内容">
                    <button><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/sousuo.png"></i><input type="submit" value="搜索" style="width: 100%;height: 100%;"></button>
                </form>
                <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </div>
        </div>
    </div>
</div>
	<div id="mkzxcontent">
		<!-- <div class="area">
			<div data-id="60">北京</div>
			<div data-id="65">上海</div>
			<div data-id="66">天津</div>
			<div data-id="67">山东</div>
			<div data-id="68">山西</div>
			<div data-id="69">黑龙江</div>
			<div data-id="70">河北</div>
			<div data-id="71">陕西</div>
			<div data-id="72">河南</div>
			<div data-id="73">福建</div>
			<div data-id="74">广西</div>
			<div data-id="75">江西</div>
			<div data-id="76">内蒙古</div>
			<div data-id="77">安徽</div>
			<div data-id="78">湖南</div>
			<div data-id="79">浙江</div>
			<div data-id="80">江苏</div>
			<div data-id="81">重庆</div>
			<div data-id="82">云南</div>
			<div data-id="83">四川</div>
			<div data-id="84">甘肃</div>
			<div data-id="85">贵州</div>
			<div data-id="86">辽宁</div>
			<div data-id="87">新疆</div>
			<div data-id="88">广东</div>
			<div data-id="89">海南</div>
			<div data-id="90">吉林</div>
			<div data-id="91">湖北</div>
			<div data-id="92">宁夏</div>
			<div data-id="93">青海</div>
			<div data-id="94">西藏</div>
			<div data-id="1306">台湾</div>
		</div> -->
		<div class="btnarr" style="display: none;">
			<a class="btn"
				href="http://www.ayhmjy.com/new/%E8%81%94%E8%80%83%E9%A1%B5%E9%9D%A2.html"><span>重庆联考信息</span> <img
					src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/btnarr.png" alt=""></a>
		</div>
		<div class="school-list school" style="display: none;">
			<ul><!-- ajax渲染内容--></ul>
			<div class="more">
				<a href="http://www.ayhmjy.com/new/5317.html#">更多</a>
			</div>
		</div>
		<div class="news">
			<div class="sw">
				<div class="swiper1">
					<a href="http://www.ayhmjy.com/new/5317.html">
						<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/3f208eb22ca197a8859dc32295450143.png" alt="...">
						<div class="t">2023年美术生如何利用这次成绩规划志愿？</div>
					</a>
				</div>
				<div class="swiper1">
					<a href="http://www.ayhmjy.com/new/5317.html">
						<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/5974dd107563033965fe51e5f6caaec4.jpg" alt="...">
						<div class="t">2021年八省出台艺术类高考新政策</div>
					</a>
				</div>
			</div>
			<div class="zx">
				<div class="title">最新资讯 <span>LATEST INFORMATION</span></div>
				<div class="text_onnav_left_com">
					<ul>
						<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "85"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '85',
  'infolen' => '18',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 18, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						<li>
							<a href="<?php echo $field['arcurl']; ?>" class="nav_top">
								<i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png"> </i>
								<span><?php echo $field['title']; ?></span>
								<i class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png"> </i>
								<label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label>
							</a>
						</li>
						<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

					</ul>
					<div class="txt_hot">
						<a href="http://www.ayhmjy.com/home/type/news.html">
							更多<label> FINE OUTMORE</label>
							<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="School_examination">
			<div class="School_examination_com">
				<div class="School_examination_com_page  com_page01">
					<div class="nav_titi_name">
						<span class="nav_titi_name_a">美术统考</span>
						<span class="nav_titi_name_b">
							<label>ARTS AND CRAFTS</label>
						</span>
						<label class="nav_titi_name_c"></label>
					</div>
					<div class="schoolcom">
						<div class="layui-tab layui-tab-card schooltop">
							<div class="page_table"></div>
							<ul class="layui-tab-title">
								<li class="layui-this">联考公告</li>
								<li class="">联考合格线</li>
								<li class="">联考成绩</li>
								<li class="">联考录取线</li>
							</ul>
							<div class="layui-tab-content">

								<div class="layui-tab-item  layui-show">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "90"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '90',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/281/cid/5317.html"><span>更多</span><label>
												FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "91"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '91',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/281/cid/5317.html"><span>更多</span><label>
												FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "92"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '92',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/281/cid/5317.html"><span>更多</span><label>
												FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "104"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '104',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/281/cid/5317.html"><span>更多</span><label>
												FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
				<div class="School_examination_com_page school_page2  com_page02">
					<div class="nav_titi_name">
						<span class="nav_titi_name_a">校考信息</span>
						<span class="nav_titi_name_b">
							<label>SCHOOL INFORMATION</label>

						</span>
						<label class="nav_titi_name_c"></label>
					</div>
					<div class="schoolcom">
						<div class="layui-tab layui-tab-card schooltop2">
							<div class="page_table"></div>
							<ul class="layui-tab-title">
								<li class="layui-this">校考简章</li>
								<li class="">考试时间</li>
								<li class="">录取线</li>
								<li class="">合格线</li>
							</ul>
							<div class="layui-tab-content">
								<div class="layui-tab-item  layui-show">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "93"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '93',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/284/cid/5317.html"><span>更多</span><label>
												FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item ">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "94"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '94',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/285/cid/5317.html"><span>更多</span><label>
												FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item ">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "95"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '95',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/286/cid/5317.html"><span>更多</span><label>
												FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item ">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "96"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '96',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/1028/cid/5317.html"><span>更多</span><label>
												FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
				<div class="School_examination_com_page com_page03">
					<div class="nav_titi_name">
						<span class="nav_titi_name_a">历年真题</span>
						<span class="nav_titi_name_b">
							<label>HISTORICAL TITLE</label>

						</span>
						<label class="nav_titi_name_c"></label>
					</div>
					<div class="schoolcom">
						<div class="layui-tab layui-tab-card schooltop">
							<div class="page_table"></div>
							<ul class="layui-tab-title">
								<li class="layui-this">联考真题</li>
								<li class="">校考真题</li>
								<li class="">优秀试卷</li>
							</ul>
							<div class="layui-tab-content">
								<div class="layui-tab-item  layui-show">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "97"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '97',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/34/cid/5317.html"><span>更多</span><label> FINE
												OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item ">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "98"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '98',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/42/cid/5317.html"><span>更多</span><label> FINE
												OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item ">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "99"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '99',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/43/cid/5317.html"><span>更多</span><label> FINE
												OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
				<div class="School_examination_com_page school_page2 com_page04">
					<div class="nav_titi_name">
						<span class="nav_titi_name_a">美术辅导</span>
						<span class="nav_titi_name_b">
							<label>ART TUTORING</label>

						</span>
						<label class="nav_titi_name_c"></label>
					</div>
					<div class="schoolcom">
						<div class="layui-tab layui-tab-card schooltop2">
							<div class="page_table"></div>
							<ul class="layui-tab-title">
								<li class="layui-this">色彩指导</li>
								<li class="">速写指导</li>
								<li class="">素描指导</li>
								<li class="">其他</li>
							</ul>
							<div class="layui-tab-content">
								<div class="layui-tab-item  layui-show">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "100"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '100',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/35.html"><span>更多</span><label> FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item ">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "101"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '101',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/36.html"><span>更多</span><label> FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item ">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "102"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '102',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/37.html"><span>更多</span><label> FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>
								<div class="layui-tab-item ">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "103"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '103',
  'infolen' => '16',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<div class="layuitxt_hot">
										<a href="http://www.ayhmjy.com/new/40.html"><span>更多</span><label> FINE OUT
												MORE</label><i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right_icon.png"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>

		</div>
		<!--热门阅读-->
		<div class="yueducom">
			<div class="youcomnav">
				<div class="title">
					<strong>热门阅读</strong><span>HOT READING</span>
				</div>
			</div>
			<div class="yuedubox">
				<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "85"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "a",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'typeid' => '85',
  'infolen' => '16',
  'flag' => 'a',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 16, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

									<a href="<?php echo $field['arcurl']; ?>"><i class="dian"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.png">
										</i>
										<span><?php echo $field['title']; ?></span><label><?php echo MyDate('Y-m-d',$field['add_time']); ?></label><i
											class="hot"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/hot.png">
										</i> </a>
									<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
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
	<!-- ayhmjy.com Baidu tongji analytics -->





	<script type="text/javascript">
		$('#mkzxcontent .area div').click(function () {
			$('.btnarr').show();
			$('.school-list').show();
			var sid = $(this).attr("data-id");
			$.ajax({
				url: '/home/type/colleges?typeid=' + sid + '?ajax=1',
				type: 'post',
				async: false,
				cache: false,
				dataType: "json",
				success: function (data) {
					console.log(data);
					var html = '';
					for (var i = 0; i < data.colleges.length; i++) {
						html += '<li><a href="' + data.colleges[i].url + '"><i></i>' + data.colleges[i].typename + '</a></li>';
					}
					$(".btnarr .btn").attr('href', data.url);
					$(".btnarr .btn span").html(data.typename + '联考信息');
					$(".more a").attr('href', data.url);
					$(".school-list ul").html(html);
				}
			});
		});
	</script>
</body>

</html>