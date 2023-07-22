<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:35:"./template/mobile/lists_article.htm";i:1689865536;s:44:"/data/user/htdocs/template/mobile/header.htm";i:1689865536;s:44:"/data/user/htdocs/template/mobile/banner.htm";i:1689865536;s:44:"/data/user/htdocs/template/mobile/footer.htm";i:1689865536;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $eyou['field']['seo_title']; ?></title>
        <meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
        <meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
        <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_ico"); echo $__VALUE__; ?>" rel="shortcut icon" type="image/x-icon" />
        <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/pintuer.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/header.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/style.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/Lib/font-awesome/css/font-awesome.min.css","","","",""); echo $__VALUE__; ?>
        <!--[if lt IE 9]><?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/respond.js","","","",""); echo $__VALUE__; ?> <![endif]-->
    </head>
    <body>
        <div id="mobile-mask">
            <!--网站公用头部——开始-->
            <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","","",""); echo $__VALUE__; ?>
<!-- 友好的弹出提示框 -->
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","","",""); echo $__VALUE__; ?>
<!-- 支持子目录 -->
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("ey_common_hidden"); echo $__VALUE__; ?>

<header id="pc-header">
	<div class="layout fixed navbar">
		<div class="container-layout">
			<div class="line">
				<div class="xl8 xs9 logo">
					<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_13"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" class="img-responsive"/></a>
				</div>
				<div class="text-center">
					<ul class="nav nav-menu nav-inline nav-navicon" >
					<li<?php if(\think\Request::instance()->param('m') == 'Index'): ?> class="active"<?php endif; ?>><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys1";}'); echo $__VALUE__; ?>"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys1";}'); echo $__VALUE__; ?></a></li>
					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<li class="<?php echo $field['currentstyle']; ?>">
						<?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
							<a href="javascript:;" class="first-level"><?php echo $field['typename']; ?><i class="fa fa-angle-down margin-small-left"></i></a>
						<?php else: ?>
							<a href="<?php echo $field['typeurl']; ?>" class="first-level"><?php echo $field['typename']; ?></a>
						<?php endif; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
						<ul class="drop-menu"><?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
							<li><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></li><?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
						</ul>
						<?php endif; ?>
						</a>
					</li>
					<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
					</ul>
				</div>
				<div class="xl4 xs3">
                    <!-- 登录后的效果：文件模板存放在 system/users_info.htm ，具体更多写法请熟悉 ey_users 表字段 -->
					<?php  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("open", "off", "", "", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__;  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("userinfo", "off", "", "", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
	                    <div id="<?php echo $field['htmlid']; ?>">
	                        <!-- 登录前 start -->
							<div class="log-in">
								<div class="button-group">
									<a href="<?php  $tagDiyurl = new \think\template\taglib\eyou\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("", "user/Users/login", "", "", "", "", "", "", "ey_active"); echo $__VALUE__; ?>" class="dialogs user-ico radius-circle dropdown-toggle text-center text-big">
									<i class="fa fa-user"></i></a>
								</div>
							</div>
							<?php if(getUsersConfigData('shop.shop_open') == 1): ?>
							<div class="shopBar badge-corner">
								<a href="<?php  $tagDiyurl = new \think\template\taglib\eyou\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("", "user/Shop/shop_cart_list", "", "", "", "", "", "", "ey_active"); echo $__VALUE__; ?>" class="shop-ico">
								<!-- <span class="badge bg-yellow">0</span> -->
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								</a>
							</div>
							<?php endif; ?>
							<!-- 登录前 end-->
						</div>		
						<?php echo $field['hidden']; endif; $field = []; endif; $field = []; ?>		
					<span class="searchBar" <?php if(getUsersConfigData('shop.shop_open') == 0): ?>style="right: 100px;"<?php endif; ?>><a href="#none" class="search-ico"><i class="fa fa-search" aria-hidden="true"></i></a></span>		
				</div>
			</div>
		</div>
	</div>
</header>
<!--弹出搜索 -->
<div class="searchBar-m">
	<div class="mask"></div>
	<a href="javascript:void(0)"><i class="fa fa-times"></i></a>
	<div class="form-group">
	<?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","","","","","default"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
		<form method="get" action="<?php echo $field['action']; ?>" onsubmit="return searchForm();">
			<input type="text" name="keywords" id="keywords" class="input radius-none text-middle" value="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl6";}'); echo $__VALUE__; ?>" onFocus="this.value=''" onBlur="if(!value){value=defaultValue}"/>
			<button type="submit" name="submit" class="button radius-none border-none" value="Search"/></button>
			<?php echo $field['hidden']; ?>
		</form>
	<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	</div>
</div>
<!-- 弹出搜索 -->

<div class="clearfix"></div>
            <!-- 频道banner,可在栏目图片里编辑 -->
	<div class="channel-banner" <?php if(!(empty($eyou['field']['typelitpic']) || (($eyou['field']['typelitpic'] instanceof \think\Collection || $eyou['field']['typelitpic'] instanceof \think\Paginator ) && $eyou['field']['typelitpic']->isEmpty()))): ?> style="background-image: url(<?php echo $eyou['field']['typelitpic']; ?>)" <?php else: ?> style="background-image: url(<?php echo gettoptype($eyou['field']['typeid'],'litpic'); ?>)" <?php endif; ?>>
		<div class="banner-info">
			<div class="container-layout text-center">
				<h3 class="text-white"><?php echo $eyou['field']['typename']; ?></h3>
				<p class="Conv_DINCondensedC text-white"><?php echo $eyou['field']['englist_name']; ?></p>
			</div>
		</div>
	</div>
	<!-- 频道banner end -->	
            <!-- 横向栏目样式 begin -->
            <div class="nav-x">
                <div class="container-layout">
                    <div class="menu-toggle">
                        <button class="button icon-navicon" data-target="#subnav">
                            <span>
                                <i class="fa fa-reorder margin-small-right"></i>
                                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = $eyou['field']['parent_id']; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?><?php echo $field['typename']; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
                                <!-- 上一级栏目名称 -->
                            </span>
                        </button>
                        <h3><?php echo $eyou['field']['typename']; ?></h3>
                        <!-- 当前栏目名称 -->
                        <ul class="nav-navicon text-center" id="subnav">
                            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                            <li>
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
                <div class="container-layout hidden-l">
                    <div class="line">
                        <div class="nav-bread">
                            <i class="fa fa-home margin-small-right" aria-hidden="true"></i> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", ""); echo $__VALUE__; ?>
                        </div>
                    </div>
                </div>
                <!--当前位置调用 end-->
                <div class="blank"></div>
                <div class="container-layout">
                    <div id='block001'>
                        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '10',
  'tagid' => 'block001',
  'infolen' => '50',
  'r' => 'eyou:artlist',
  'row' => '10',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","block001",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 50, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <div class="line bg-white list-news">
                            <div class="xl5 xs5">
                                <div class="media-img">
                                    <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" class="img-responsive"
                                            alt="<?php echo $field['title']; ?>"></a>
                                </div>
                            </div>
                            <div class="xl7 xs7">
                                <div class="news margin-top">
                                    <h3><a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a></h3>
                                    <p class="text-gray"><?php echo MyDate('Y-m-d',$field['update_time']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                    </div>

                    <!-- 瀑布流分页 -->
                    <div class="blank"></div>
                    <div class="line">
                        <div class="xl12 xs12 xb12 xm12">
                            <div class="text-center">
                                 <?php  empty($__TAG__) && $__TAG__ = []; $tagArcpagelist = new \think\template\taglib\eyou\TagArcpagelist; $_result = $tagArcpagelist->getArcpagelist("block001","3","没有了呢！","","", $__TAG__); if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; ?>
                                <a href="javascript:void(0);" class="button bg-yellow radius-none text-center letter-spacing"
                                    <?php echo $field['onclick']; ?>>点击浏览更多<i class="fa fa-long-arrow-right text-big margin-big-left"></i></a>
                                <?php endif; if(!empty($_result["js"])): echo $_result["js"];  endif; $field = []; ?>
                            </div>
                        </div>
                    </div>
                    <div class="blank-small"></div>
                    <!-- 瀑布流分页 -->
                </div>
            </div>
            <footer class="bg-main">
	<div class="container-layout">
		<div class="line">
			<div class="copyright height text-center text-gray">
				<div class="xl12 xs12 flz12">
					<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></br>　<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--底部版权-->

<!-- 移动端快捷菜单 -->
<div id="m-b-bar" class="layout text-center bg-yellow">
	<div class="x3">
		<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><i class="fa fa-home"></i>首页</a>
	</div>
	<div class="x3">
	<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
		<a href="<?php echo $field['typeurl']; ?>"><i class="fa fa-cube"></i>产品</a>
	<?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	</div>
	<div class="x3">
	<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "4"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
		<a href="<?php echo $field['typeurl']; ?>"><i class="fa fa-cog"></i>方案</a>
	<?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	</div>		
	<div class="x3">
		<a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>"><i class="fa fa-phone"></i>电话</a>
	</div>
</div>
<!-- 移动端快捷菜单 end -->

<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end -->
        </div><!-- id="mobile-mask" -->
        <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/pintuer.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/mobile.js","","","",""); echo $__VALUE__; ?>
    </body>
</html>
