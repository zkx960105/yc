<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"./template/mobile/lists_article_news.htm";i:1690012407;s:44:"/data/user/htdocs/template/mobile/header.htm";i:1690009784;s:40:"/data/user/htdocs/template/mobile/ba.htm";i:1690007996;s:44:"/data/user/htdocs/template/mobile/footer.htm";i:1690012301;}*/ ?>
<!DOCTYPE html>
<html style="font-size: 25px;">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>">
	<!-- 页面描述 -->
	<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>">
	<title><?php echo $eyou['field']['seo_title']; ?></title>
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/aos.css">
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/swiper.min.css">
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/main.css">

    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/aos.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/dyfrom.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/main.js"></script>
</head>

<body>
	<div class="no" style="padding-bottom: 50px;">
		<div class="header">
    <div class="logo1"><a href="http://www.ayhmjy.com/"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/logo.png"></a></div>
    <div class="logo2"><a><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/logo2.png"></a></div>
</div>
		<div class="nbanner">
			<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/gsjj.png">
		</div>
		<div class="gyt" style="padding-top:0.8rem;padding-bottom:0.6rem;"><span>美术资讯</span><samp></samp></div>
		<div class="mbg" style="min-height: 487px;">

			<div class="zxzx">
				<ul>
					<?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "keyword"=> "",      "idlist"=> "",      "idrange"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 10, "", "", "desc", "on","off","");if(!empty($_result_tmp) && (is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<li><a href="<?php echo $field['arcurl']; ?>">
							<div class="title over1"><span><?php echo $field['title']; ?></span><i><img
										src="<?php echo $field['litpic']; ?>"></i>
							</div>
							<div class="time"><?php echo MyDate('Y-m-d H:i:s',$field['add_time']); ?></div>
						</a></li>
						<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
				</ul>
			</div>
			<div> <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,pageno", "5"); echo $__VALUE__; ?></div>
		</div>
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