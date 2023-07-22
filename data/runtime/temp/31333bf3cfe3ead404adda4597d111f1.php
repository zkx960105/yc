<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:27:"./template/mobile/index.htm";i:1690011970;s:44:"/data/user/htdocs/template/mobile/header.htm";i:1690009784;s:40:"/data/user/htdocs/template/mobile/ba.htm";i:1690007996;s:44:"/data/user/htdocs/template/mobile/footer.htm";i:1690012301;}*/ ?>
<html style="font-size: 25px;">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>">
	<!-- 页面描述 -->
	<meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>">
	<title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
	<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/aos.css">
	<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/swiper.min.css">
	<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/main.css">

	<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/aos.js"></script>
	<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/swiper.min.js"></script>
	<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/dyfrom.js"></script>
	<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/main.js"></script>
</head>

<body style="background-color:#f5f5f5;">
	<div class="header">
    <div class="logo1"><a href="http://www.ayhmjy.com/"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/logo.png"></a></div>
    <div class="logo2"><a><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/logo2.png"></a></div>
</div>
	<div class="banner">
		<div class="swiper-container">
			<ul class="swiper-wrapper">
				<?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(3, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentclass"] = $field["currentstyle"] = ""; else:  $field["currentclass"] = $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				<li class="swiper-slide">
					<a href="<?php echo $field['links']; ?>">
						<img src="<?php echo $field['litpic']; ?>">
					</a>
				</li>
				<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

			</ul>
		</div>
	</div>
	<div class="mnav">
		<ul>
			<li><a href="/index.php?m=home&c=Lists&a=index&tid=79">
					<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/v01.png"></i>
					<span>关于我们</span>
				</a></li>
			<li><a href="/index.php?m=home&c=Lists&a=index&tid=80">
					<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/v02.png"></i>
					<span>艺橙优势</span>
				</a></li>
			<li><a href="/index.php?m=home&c=Lists&a=index&tid=69">
					<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/v03.png"></i>
					<span>名师团队</span>
				</a></li>
			<li><a href="/index.php?m=home&c=Lists&a=index&tid=81">
					<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/v04.png"></i>
					<span>校园环境</span>
				</a></li>
			<li><a href="/index.php?m=home&c=Lists&a=index&tid=68">
					<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/v05.png"></i>
					<span>王牌班型</span>
				</a></li>
			<li><a href="/index.php?m=home&c=Lists&a=index&tid=107">
					<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/v06.png"></i>
					<span>教学成绩</span>
				</a></li>
		</ul>
	</div>

	<div class="hjcj" style="display:none;">
		<!-- <div class="t">
		<img src="/static/phone/images/hjt.png" alt="辉煌成绩" />
	</div> -->
		<!-- <div class="con">
			<a href=""><img
					src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/chhcj.jpg"></a>
		</div> -->
	</div>
	<div class="threetab">
		<div id="three">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "106"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 5; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '5',
  'titlelen' => '10',
  'typeid' => '106',
  'r' => 'eyou:artlist',
  'row' => '5',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 10, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<div class="swiper-slide">
						<div class="content">
							<a href="<?php echo $field['arcurl']; ?>">
								<img src="<?php echo $field['litpic']; ?>">
								<div class="txt">
									<div class="title"><?php echo $field['title']; ?></div>
									<div class="b">
										<div class="detail">查看详情</div>
										<div class="date"><?php echo MyDate('Y-m-d',$field['add_time']); ?></div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>


				</div>
			</div>
		</div>
	</div>

	<div class="xyhj">
		<div class="t">
			<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/hjt.png" alt="校园环境">
		</div>
		<div class="con">
			<ul>
				<?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(7, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentclass"] = $field["currentstyle"] = ""; else:  $field["currentclass"] = $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				<li><a href="javascript:;">
						<div class="img"><img src="<?php echo $field['litpic']; ?>">
						</div>
					</a></li>
				<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
			</ul>
		</div>
	</div>
	<div class="threetab xyhj">
		<div class="t">
			<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/cjt.png">
		</div>
		<div id="three">
			<div class="swiper-container">
				<div class="swiper-wrapper">

					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "107"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 5; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '5',
  'titlelen' => '10',
  'typeid' => '107',
  'r' => 'eyou:artlist',
  'row' => '5',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 10, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<div class="swiper-slide">
						<div class="content">
							<a href="<?php echo $field['arcurl']; ?>">
								<img src="<?php echo $field['litpic']; ?>">
								<div class="txt">
									<div class="title"><?php echo $field['title']; ?></div>
									<div class="b">
										<div class="detail">查看详情</div>
										<div class="date"><?php echo MyDate('Y-m-d',$field['add_time']); ?></div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

				</div>
			</div>
		</div>
	</div>
	<div class="szll">
		<div class="t">
			<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/szt.png">
		</div>
		<div class="con">
			<ul>
				<li><a>
						<!-- <div class="txt">
							<div class="inner">
								<div class="title"><span>我们的师资力量</span></div>
								<div class="d">我们的教师，有着丰富得教学实践经验，系统性的教学思维， 标准化、专业化的教学方式，负责的教学态度。</div>
							</div>
						</div> -->
						<div class="img">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/indexszb.jpg"
								style="width: 100%;height: auto;">
						</div>
					</a></li>
				<li><a>
						<div class="txt">
							<div class="inner">
								<div class="title"><span>专家评审组</span></div>
								<div class="d">对于2023年发布的艺考新政，改革当下</div>
								<div class="d">定期会邀请阅卷组团队老师进行学术指导与全员点评</div>
								<div class="d">以更快的方式和高效的沟通，为改革后的孩子们指点迷津</div>
							</div>
						</div>
						<div class="">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/indexsz1.jpg">
						</div>
					</a></li>
				<li><a>
						<div class="txt">
							<div class="title"><span>教务团队</span></div>
							<div class="d">艺橙教务团队每天核对老师们以及学生的出勤情况进行考核</div>
							<div class="d">切实做到不辜负每一个家长和孩子们的期望</div>
							<div class="d">同时助力每一个孩子的报考心理规划，风雨同行不负所望</div>
						</div>
						<div class="">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/indexsz2.jpg">
						</div>
					</a></li>
				<li><a>
						<div class="txt">
							<div class="title"><span>后勤团队</span></div>
							<div class="d">我们的后勤团队餐制食宿一体化服务</div>
							<div class="d">包含一站式报考、送考服务,让艺橙学子考学无忧</div>
							<div class="d">线上让学生在校期间可以更专注地投入到专业课学习</div>
							<div class="d">如同家一样的体验和责任的感受，不为琐事忧心!</div>
						</div>
						<div class="">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/indexsz3.jpg">
						</div>
					</a></li>
			</ul>
		</div>
	</div>

	<!-- 作品展示-->
	<div class="zpzs"><a href="">
			<div class="t"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/zpt.png" alt="作品展示"></div>
		</a>
		<div class="ztab">
			<ul>
				<li class="active" _id="0"><a><span>素描</span></a></li>
				<li _id="1"><a><span>速写</span></a></li>
				<li _id="2"><a><span>色彩</span></a></li>
			</ul>
		</div>
		<div class="con">
			<div class="works0 workslist" style="display: block;">
				<div class="swiper-container">
					<ul class="swiper-wrapper">
						<?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(8, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentclass"] = $field["currentstyle"] = ""; else:  $field["currentclass"] = $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						<li class="swiper-slide">
							<a>
								<div class="img">
									<img src="<?php echo $field['litpic']; ?>">
								</div>
							</a>
						</li>
						<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>


					</ul>
				</div>
			</div>
			<div class="works1 workslist" style="display: none;">
				<div class="swiper-container">
					<ul class="swiper-wrapper">
						<?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(9, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentclass"] = $field["currentstyle"] = ""; else:  $field["currentclass"] = $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						<li class="swiper-slide">
							<a>
								<div class="img">
									<img src="<?php echo $field['litpic']; ?>">
								</div>
							</a>
						</li>
						<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
					</ul>
				</div>
			</div>
			<div class="works2 workslist" style="display: none;">
				<div class="swiper-container">
					<ul class="swiper-wrapper">
						<?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(10, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentclass"] = $field["currentstyle"] = ""; else:  $field["currentclass"] = $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						<li class="swiper-slide">
							<a>
								<div class="img">
									<img src="<?php echo $field['litpic']; ?>">
								</div>
							</a>
						</li>
						<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!--  作品展示弹窗-->
	<div class="img-modal">
		<div id="persons-modal">
			<div class="swiper-container">
				<ul class="swiper-wrapper">
					<li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="8"><a _id="9">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/8-1P2101055310-L.jpg">
							</div>
						</a></li>
					<li class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="9"><a
							_id="10">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/8-1P210104309225.jpg">
							</div>
						</a></li>
					<li class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"><a _id="1">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/9-19110Q62603150.png">
							</div>
						</a></li>
					<li class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"><a _id="2">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/9-19110Q62542J3.png">
							</div>
						</a></li>
					<li class="swiper-slide" data-swiper-slide-index="2"><a _id="3">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/9-19110Q61053N6.png">
							</div>
						</a></li>
					<li class="swiper-slide" data-swiper-slide-index="3"><a _id="4">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/9-19110Q610141C.png">
							</div>
						</a></li>
					<li class="swiper-slide" data-swiper-slide-index="4"><a _id="5">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/9-19110Q60Z6496.png">
							</div>
						</a></li>
					<li class="swiper-slide" data-swiper-slide-index="5"><a _id="6">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/8-1P619153022361-lp.jpg"></div>
						</a></li>
					<li class="swiper-slide" data-swiper-slide-index="6"><a _id="7">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/8-1P2101444230-L.jpg">
							</div>
						</a></li>
					<li class="swiper-slide" data-swiper-slide-index="7"><a _id="8">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/8-1P2101203270-L.jpg">
							</div>
						</a></li>
					<li class="swiper-slide" data-swiper-slide-index="8"><a _id="9">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/8-1P2101055310-L.jpg">
							</div>
						</a></li>
					<li class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="9"><a _id="10">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/8-1P210104309225.jpg">
							</div>
						</a></li>
					<li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
						data-swiper-slide-index="0"><a _id="1">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/9-19110Q62603150.png">
							</div>
						</a></li>
					<li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
						data-swiper-slide-index="1"><a _id="2">
							<div class="img"><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/9-19110Q62542J3.png">
							</div>
						</a></li>
				</ul>
				<div class="cha">×</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>

	<!-- 在线报名 -->
	<div class="zxbm">
		<?php  $typeid = "105"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", "", 0); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
		<form method="POST" <?php echo $field['formhidden']; ?> action="<?php echo $field['action']; ?>" onsubmit="<?php echo $field['submit']; ?>"
			id="message-form-index">
			<div class="form">
				<div class="content">
					<div class="input">
						<div class="inputwrapper">
							<div class="left">姓名</div>
							<div class="right">
								<input type='text' id='attr_26' name='<?php echo $field['attr_26']; ?>' class="name">
								<div class="cha chan"></div>
							</div>
						</div>
						<div class="inputwrapper">
							<div class="left">电话</div>
							<div class="right">
								<input type='text' id='attr_27' name='<?php echo $field['attr_27']; ?>' class="phone">
								<div class="cha chap"></div>
							</div>
						</div>
						<div class="inputwrapper list">
							<div class="left">班级</div>
							<div class="right">
								<select name='<?php echo $field['attr_29']; ?>' id='attr_29' style="width: 100%;height: 100%;    border-radius: 0px 0.08rem 0.08rem 0px;
								background: #eb5149; color: #fff;padding-left: .2rem;box-sizing: border-box;">
									<option value='无'>无</option>
									<?php if(is_array($field['options_29']) || $field['options_29'] instanceof \think\Collection || $field['options_29'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['options_29'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
									<option value='<?php echo $vo['value']; ?>'><?php echo $vo['value']; ?></option>
									<?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
								</select>
								<!-- <input type="hidden" name="banji" id="class_name" value="">
								<input type="text" value="选择班级" readonly="" style="color: #fff;">
								<div class="cha chab"></div>
								<ol class="ul">
									<li>名校定制班</li>
									<li>央清班</li>
									<li>金牌定制班</li>
									<li>校长旗舰班</li>
									<li>重点班</li>
									<li>校长VIP班</li>
									<li>周末班</li>
									<li>暑假班</li>
									<li>寒假班</li>
									<li>央清培优班</li>
								</ol> -->
							</div>
						</div>
						<div class="inputwrapper">
							<div class="left">QQ</div>
							<div class="right">
								<input type='text' id='attr_28' name='<?php echo $field['attr_28']; ?>' class="qq">
								<div class="cha chaq"></div>
							</div>
						</div>
					</div>
					<input type="submit" class="btn postdata" value="">
					<!-- <div class="btn postdata"></div> -->
				</div>
			</div>
			<?php echo $field['hidden']; ?>
		</form>
		<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	</div>
	<!-- 在线报名 -->
	<!-- 最新资讯		 -->
	<div class="news">
		<div class="t">
			<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/zzt.png">
		</div>
		<!-- <div class="citylist">
			<ul>
				<li>
					<a href="http://www.ayhmjy.com/new/60.html">北京</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/65.html">上海</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/66.html">天津</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/67.html">山东</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/68.html">山西</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/69.html">黑龙江</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/70.html">河北</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/71.html">陕西</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/72.html">河南</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/73.html">福建</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/74.html">广西</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/75.html">江西</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/76.html">内蒙古</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/77.html">安徽</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/78.html">湖南</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/79.html">浙江</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/80.html">江苏</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/81.html">重庆</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/82.html">云南</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/83.html">四川</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/84.html">甘肃</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/85.html">贵州</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/86.html">辽宁</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/87.html">新疆</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/88.html">广东</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/89.html">海南</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/90.html">吉林</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/91.html">湖北</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/92.html">宁夏</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/93.html">青海</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/94.html">西藏</a>
				</li>
				<li>
					<a href="http://www.ayhmjy.com/new/1306.html">台湾</a>
				</li>
			</ul>
		</div> -->
		<div class="threenews">
			<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "85"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '3',
  'typeid' => '85',
  'titlelen' => '15',
  'r' => 'eyou:artlist',
  'row' => '3',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 15, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
			<a href="<?php echo $field['arcurl']; ?>">
				<div class="item">
					<div class="left">
						<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/dian.png" alt="...">
						<span><?php echo $field['title']; ?></span>
					</div>
					<div class="right">
						<span><?php echo MyDate('Y-m-d',$field['add_time']); ?></span>
						<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/re.png" alt="...">
					</div>
				</div>
			</a>
			<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

			<div class="more"><a href="/index.php?m=home&c=Lists&a=index&tid=85"><span>查看更多</span></a></div>
		</div>
	</div>
	<!-- 最新资讯 -->
	<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/contact.png" style="display: block;width: 4rem;margin: 0 auto;">
<div class="fpublic">
    <div class="l">
        <p><b>杭州总部校区:</b></p>
        <p>立即报名:177-0642-7935</p>
        <p>官方咨询:0571-85262386</p>
        <p>官方网站:www.yichengart.com</p>
        <div>
            <p><b>官方微博:</b></p>
            <p>@杭州艺橙动画</p>
        </div>
    </div>
    <div class="r">
        <p><b>贵阳校区:</b></p>
        <p>立即报名:151-2145-3304</p>
        <p>官方咨询:177-8415-8418</p>
        <p>官方网站:www.gyychsjpxq.com</p>
        <div>
            <p><b>校长热线:</b></p>
            <p>136-5666-5045</p>
        </div>
    </div>
</div>
<div class="fpublic fpublic1">
    <p><b>画室地址</b></p>
    <p>杭州校区 | 杭州市萧山区楼塔镇纱艺园3号楼</p>
    <p>宁波校区 | 慈溪市北二环西路136号</p>
    <p>临安校区 | 临安区景杉路806号</p>
    <p>贵阳校区 | 贵阳市观山湖区金华镇奋进路苏宁物流园B-2栋</p>
    <p>杭州少儿美术校区 | 杭州市上城区明珠街1227号</p>
</div>
	</div>




	<div class="fnav">
	<ul>
		<li><a href="/">
				<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mv01.png"></i>
				<span>首页</span>
			</a></li>
		<li><a href="">
				<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mv02.png"></i>
				<span>招生简章</span>
			</a></li>
		<li><a href="tel:">
				<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mc.png">
			</a></li>
		<li><a
				href="">
				<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mv03.png"></i>
				<span>咨询</span>
			</a></li>
		<li><a>
				<i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mv04.png"></i>
				<span>报名</span>
			</a></li>
	</ul>
</div>

<div class="toTop" style="display: none;"></div>

<div class="modal" style="">
	<?php  $typeid = "105"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", "", 0); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
		<form method="POST" <?php echo $field['formhidden']; ?> action="<?php echo $field['action']; ?>" onsubmit="<?php echo $field['submit']; ?>"
			id="message-form-index">
		<div class="content">
			<div class="close" style="height: 0.98rem;text-align: right;font-size:0.64rem;line-height:0.98rem;">x 
			</div>
			<div class="modal-title">在线报名</div>
			<div class="inputwrapper">
				<div class="right">
					<input type='text' id='attr_26' name='<?php echo $field['attr_26']; ?>' class="name" placeholder="请输入姓名">
					<div class="cha chan"></div>
				</div>
			</div>
			<div class="inputwrapper">
				<div class="right">
					<input type='text' id='attr_27' name='<?php echo $field['attr_27']; ?>' class="phone" placeholder="输入电话号码">
					<div class="cha chap"></div>
				</div>
			</div>
			<div class="inputwrapper list">
				<div class="right">
					<select name='<?php echo $field['attr_29']; ?>' id='attr_29' style="width: 100%;height: 100%;    border-radius: 0px 0.08rem 0.08rem 0px;
								background: #eb5149; color: #fff;padding-left: .2rem;box-sizing: border-box;">
									<option value='无'>无</option>
									<?php if(is_array($field['options_29']) || $field['options_29'] instanceof \think\Collection || $field['options_29'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['options_29'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
									<option value='<?php echo $vo['value']; ?>'><?php echo $vo['value']; ?></option>
									<?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
								</select>
					<!-- <input type="hidden" name="banji" id="class_name" value="">
					<input type="text" value="选择班级" readonly="" style="color: #999;">
					<div class="cha chab"></div>
					<ol class="ul">
						<li>名校定制班</li>
						<li>央清班</li>
						<li>金牌定制班</li>
						<li>校长旗舰班</li>
						<li>重点班</li>
						<li>校长VIP班</li>
						<li>周末班</li>
						<li>暑假班</li>
						<li>寒假班</li>
						<li>央清培优班</li>

					</ol> -->
				</div>
			</div>
			<div class="inputwrapper">
				<div class="right">
					<input type='text' id='attr_28' name='<?php echo $field['attr_28']; ?>' class="qq" placeholder="输入QQ号码">
					<div class="cha chaq"></div>
				</div>
			</div>
			<input type="submit" class="btn postdata" value="">
			<!-- <div class="btn1"></div> -->
		</div>
		<?php echo $field['hidden']; ?>
	</form>
	<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
</div>

</body>

</html>