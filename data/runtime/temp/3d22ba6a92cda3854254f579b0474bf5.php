<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:30:"./template/pc/lists_search.htm";i:1690018303;s:40:"/data/user/htdocs/template/pc/header.htm";i:1690016688;s:43:"/data/user/htdocs/template/pc/searchbar.htm";i:1690017040;s:40:"/data/user/htdocs/template/pc/footer.htm";i:1689869391;}*/ ?>
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
	<div class="aiyihemacom">
		<div class="wenzhagnbiaoti">
			<div class="wenzhagnbiaoticom">
				<div class="title">
					<strong></strong>
				</div>
				<!--文章内容-->
				<div class="wenzhangcominfo">
					<div class="wenzhangcom_left listRow">
						<?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "keyword"=> "",      "idlist"=> "",      "idrange"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 10, "", "", "desc", "on","off","");if(!empty($_result_tmp) && (is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						<a href="<?php echo $field['arcurl']; ?>">
							<span><b><?php echo $field['title']; ?></b></span>
							<label></label>
						</a>
						<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
					</div>

					<div class="wenzhangcom_right">

						<p class="guanggao">
							<a href=""><img
									src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/rung.jpg"></a>
						</p>
						<p class="kanneirong">
						</p>
						<!-- <div class="rmore"><a><span>更多 >></span></a></div> -->
					</div>
				</div>
				<!--分页-->
				<div class="paging" id="paging">
					<ul class="pageulcom">
						<style type="text/css"></style>
						<div class="pagination">
							 <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "pre,next,pageno", "5"); echo $__VALUE__; ?>
						</div>
					</ul>
				</div>
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