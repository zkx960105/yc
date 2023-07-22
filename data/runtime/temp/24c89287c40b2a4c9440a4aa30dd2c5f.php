<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"./application/admin/template/index/switch_map.htm";i:1689865663;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/public/static/admin/css/welcome.css?v=<?php echo $version; ?>" type="text/css">   <!--界面修改新添样式 -->
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css?v=<?php echo $version; ?>" rel="stylesheet" />
<link href="/public/static/admin/font/css/iconfont.css?v=<?php echo $version; ?>" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css?v=<?php echo $version; ?>">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadimgnew/upload'); ?>";
    // 插件专用旧版上传图片框
    if ('Weapp@execute' == "<?php echo CONTROLLER_NAME; ?>@<?php echo ACTION_NAME; ?>") {
      GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    }
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css"/>
<!-- <link type="text/css" rel="stylesheet" href="/public/plugins/tags_input/css/jquery.tagsinput.css?v=<?php echo $version; ?>"> -->
<style type="text/css">html, body { overflow: visible;}</style>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />

<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style type="text/css">
	/*左侧收缩图标*/
	#foldSidebar i { font-size: 24px;color:<?php echo $global['web_theme_color']; ?>; }
    /*左侧菜单*/
    .eycms_cont_left{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl dd a:hover,.eycms_cont_left dl dd a.on,.eycms_cont_left dl dt.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl dd a:active{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist dd{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl.jslist dd a:hover,.eycms_cont_left dl.jslist dd a.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist:hover{ background:<?php echo $global['web_assist_color']; ?>; }
    /*栏目操作*/
    .cate-dropup .cate-dropup-con a:hover{ background-color: <?php echo $global['web_theme_color']; ?>; }
    /*按钮*/
    a.ncap-btn-green { background-color: <?php echo $global['web_theme_color']; ?>; }
    a:hover.ncap-btn-green { background-color: <?php echo $global['web_assist_color']; ?>; }
    .flexigrid .sDiv2 .btn:hover { background-color: <?php echo $global['web_theme_color']; ?>; }
    .flexigrid .mDiv .fbutton div.add{background-color: <?php echo $global['web_theme_color']; ?>; border: none;}
    .flexigrid .mDiv .fbutton div.add:hover{ background-color: <?php echo $global['web_assist_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds{color:<?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds:hover{ background-color: <?php echo $global['web_theme_color']; ?>;}
    /*选项卡字体*/
    .tab-base a.current,
    .tab-base a:hover.current {color:<?php echo $global['web_theme_color']; ?> !important;}
    .tab-base a.current:after,
    .tab-base a:hover.current:after {background-color: <?php echo $global['web_theme_color']; ?>;}
    .addartbtn input.btn:hover{ border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>; }
    .addartbtn input.btn.selected{ color: <?php echo $global['web_theme_color']; ?>;border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>;}
	/*会员导航*/
	.member-nav-group .member-nav-item .btn.selected{background: <?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;box-shadow: -1px 0 0 0 <?php echo $global['web_theme_color']; ?>;}
	.member-nav-group .member-nav-item:first-child .btn.selected{border-left: 1px solid <?php echo $global['web_theme_color']; ?> !important;}
	/*搜索按钮图标*/
	.flexigrid .sDiv2 .fa-search{}
        
    /* 商品订单列表标题 */
   .flexigrid .mDiv .ftitle h3 {border-left: 3px solid <?php echo $global['web_theme_color']; ?>;} 
	
    /*分页*/
    .pagination > .active > a, .pagination > .active > a:focus, 
	.pagination > .active > a:hover, 
	.pagination > .active > span, 
	.pagination > .active > span:focus, 
	.pagination > .active > span:hover { border-color: <?php echo $global['web_theme_color']; ?>;color:<?php echo $global['web_theme_color']; ?>; }
    
    .layui-form-onswitch {border-color: <?php echo $global['web_theme_color']; ?> !important;background-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .pcwap-onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .pcwap-onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    input[type="text"]:focus,
    input[type="text"]:hover,
    input[type="text"]:active,
    input[type="password"]:focus,
    input[type="password"]:hover,
    input[type="password"]:active,
    textarea:hover,
    textarea:focus,
    textarea:active { border-color:<?php echo hex2rgba($global['web_theme_color'],0.8); ?>;box-shadow: 0 0 0 1px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover .type-file-button {background-color:<?php echo $global['web_theme_color']; ?> !important; }
    .input-file-show:hover {border-color: <?php echo $global['web_theme_color']; ?> !important;box-shadow: 0 0 5px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover span.show a,
    .input-file-show span.show a:hover { color: <?php echo $global['web_theme_color']; ?> !important;}
    .input-file-show:hover .type-file-button {background-color: <?php echo $global['web_theme_color']; ?> !important; }
    .color_z { color: <?php echo $global['web_theme_color']; ?> !important;}
    a.imgupload{
        background-color: <?php echo $global['web_theme_color']; ?> !important;
        border-color: <?php echo $global['web_theme_color']; ?> !important;
    }
    /*专题节点按钮*/
    .ncap-form-default .special-add{background-color:<?php echo $global['web_theme_color']; ?>;border-color:<?php echo $global['web_theme_color']; ?>;}
    .ncap-form-default .special-add:hover{background-color:<?php echo $global['web_assist_color']; ?>;border-color:<?php echo $global['web_assist_color']; ?>;}
    
    /*更多功能标题*/
    .on-off_panel .title::before {background-color:<?php echo $global['web_theme_color']; ?>;}
    .on-off_panel .on-off_list-caidan .icon_bg .on{color: <?php echo $global['web_theme_color']; ?>;}
    .on-off_panel .e-jianhao {color: <?php echo $global['web_theme_color']; ?>;}
    
     /*内容菜单*/
    .ztree li a:hover{color:<?php echo $global['web_theme_color']; ?> !important;}
    .ztree li a.curSelectedNode{background-color: <?php echo $global['web_theme_color']; ?> !important; border-color:<?php echo $global['web_theme_color']; ?> !important;}
    .layout-left .on-off-btn {background-color: <?php echo $global['web_theme_color']; ?> !important;}

    .iframe_loading{
        width:100%;
        background:url(/public/static/admin/images/loading-0.gif) no-repeat center center;
    }
    
    .layui-btn-normal {background-color: <?php echo $global['web_theme_color']; ?>;}
    
    /* 商品规格按钮 */
    /* .preset-bt{border-color: <?php echo $global['web_theme_color']; ?> !important;background:<?php echo $global['web_theme_color']; ?>;} */
</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js?v=<?php echo $version; ?>"></script>
<!-- <script type="text/javascript" src="/public/plugins/tags_input/js/jquery.tagsinput.js?v=<?php echo $version; ?>"></script> -->
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/myFormValidate.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<body class="bodystyle">
    <?php if(is_check_access('Index@switch_map_0') == '1'): if($main_lang == $admin_lang): ?>
        <div class="on-off_panel_one bg-fff " id="mokuaikaiguan" style="display: block;">
            <div class="f-16 col-373737 ">模块开关</div>
            <div class="on-off_btns">
                <form class="layui-form " action="">
                    <ul class="flex-dir-row flex-wrap">
                        <?php if(is_check_access('Member@index') == '1'): ?>
                            <li class="more_li">
                                <div class="on-off_btn">
                                    <div class="on-off_btn_l">
                                        <p>会员中心：</p>
                                    </div>
                                    <div class="on-off_btn_r">
                                        <input type="checkbox" name="web[web_users_switch]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                               data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($global['web_users_switch'] == '1'): ?>checked="" <?php endif; ?>
                                               data-type="web" data-name="web_users_switch" data-lmenuid="Member_users_index" value="<?php echo $global['web_users_switch']; ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="more_li">
                                <div class="on-off_btn">
                                    <div class="on-off_btn_l">
                                        <p>会员投稿：</p>
                                    </div>
                                    <div class="on-off_btn_r">
                                        <input type="checkbox" name="users[users_open_release]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                               data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($userConfig['users_open_release'] == '1'): ?>checked="" <?php endif; ?>
                                               data-type="users" data-name="users_open_release" data-lmenuid="Archives_index_draft" value="<?php echo $userConfig['users_open_release']; ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="more_li">
                                <div class="on-off_btn">
                                    <div class="on-off_btn_l">
                                        <p>会员升级：</p>
                                    </div>
                                    <div class="on-off_btn_r">
                                        <input type="checkbox" name="level[level_member_upgrade]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                               data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($userConfig['level_member_upgrade'] == '1'): ?>checked="" <?php endif; ?>
                                        data-type="level" data-name="level_member_upgrade" data-lmenuid="off" value="<?php echo $userConfig['level_member_upgrade']; ?>">
                                    </div>
                                </div>
                            </li>
                        <?php endif; if(is_check_access('Shop@index') == '1'): if($php_servicemeal > 1): ?>
                            <li class="more_li">
                                <div class="on-off_btn">
                                    <div class="on-off_btn_l">
                                        <p>商城中心：</p>
                                    </div>
                                    <div class="on-off_btn_r">
                                        <input type="checkbox" name="shop[shop_open]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                               data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($userConfig['shop_open'] == '1'): ?>checked="" <?php endif; ?>
                                        data-type="shop" data-name="shop_open" data-lmenuid="Shop_home" value="<?php echo $userConfig['shop_open']; ?>">
                                    </div>
                                </div>
                            </li>
                            <?php endif; endif; if(is_check_access('Member@index') == '1'): ?>
                        <li class="more_li">
                            <div class="on-off_btn">
                                <div class="on-off_btn_l">
                                    <p>支付功能：</p>
                                </div>
                                <div class="on-off_btn_r">
                                    <input type="checkbox" name="pay[pay_open]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                           data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($userConfig['pay_open'] == '1'): ?>checked="" <?php endif; ?>
                                    data-type="pay" data-name="pay_open" data-lmenuid="off" value="<?php echo $userConfig['pay_open']; ?>">

                                </div>
                            </div>
                        </li>
                        <?php endif; if(is_check_access('Weapp@index') == '1'): if($weapp_switch == 'true'): ?>
                            <li class="more_li">
                                <div class="on-off_btn">
                                    <div class="on-off_btn_l">
                                        <p>插件应用：</p>
                                    </div>
                                    <div class="on-off_btn_r">
                                        <input type="checkbox" name="web[web_weapp_switch]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest2"
                                               data-type="web" data-name="web_weapp_switch" data-lmenuid="Weapp_index"  value="<?php echo $global['web_weapp_switch']; ?>"
                                               <?php if($global['web_weapp_switch'] == '1'): ?>checked="" <?php endif; ?>>
                                    </div>
                                </div>
                            </li>
                            <?php endif; endif; if(is_check_access('Language@index') == '1'): if($php_servicemeal >= 1 || !empty($global['system_use_language'])): ?>
                            <li class="more_li">
                                <div class="on-off_btn">
                                    <div class="on-off_btn_l">
                                        <p>多语言：</p>
                                    </div>
                                    <div class="on-off_btn_r">
                                        <!-- 按钮切换颜色要变成3fa9e0 -->
                                        <input type="checkbox" name="web[web_language_switch]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                               data-type="web" data-name="web_language_switch" data-lmenuid="Language_index"  value="<?php echo $global['web_language_switch']; ?>"
                                               <?php if($global['web_language_switch'] == '1'): ?>checked="" <?php endif; ?>>
                                    </div>
                                </div>
                            </li>
                            <?php endif; endif; if(is_check_access('Citysite@index') == '1'): if($php_servicemeal >= 2): ?>
                            <li class="more_li">
                                <div class="on-off_btn">
                                    <div class="on-off_btn_l">
                                        <p>城市分站：</p>
                                    </div>
                                    <div class="on-off_btn_r">
                                        <input type="checkbox" name="web[web_citysite_open]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                               data-type="web" data-name="web_citysite_open" data-lmenuid="Citysite_index"  value="<?php echo $global['web_citysite_open']; ?>"
                                               <?php if($global['web_citysite_open'] == '1'): ?>checked="" <?php endif; ?>>
                                    </div>
                                </div>
                            </li>
                            <?php endif; endif; ?>
                    </ul>
                </form>
            </div>
        </div>
        <?php endif; endif; if(is_check_access('Index@switch_map_1') == '1'): ?>
        <div class="on-off_panel" >
             <div class="on-off_list_bg on-off_list-caidan bg-fff">
                 <div class="son-tit">
                     <div class="f-16 col-373737">当前导航</div>
                 </div>
                 <div class="on-off_list">
                     <ul class="flex-dir-row sort-list flex-wrap" id="my_menu">
                        <?php if(is_array($menu_list) || $menu_list instanceof \think\Collection || $menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li title="拖动改变排序" class="more_li" data-id="<?php echo $vo['menu_id']; ?>" id="my_menu_<?php echo $vo['menu_id']; ?>" <?php if(in_array($vo['menu_id'],$not_role_menu_id_arr) || empty($vo['is_switch'])): ?>style="display:none"<?php endif; ?> >
                             <div class="flex-dir-row flex-a-center">
                                 <div class="icon_bg">
                                     <i class="<?php echo $vo['icon']; ?> f-20 on" ></i>
                                 </div>
                                 <div class="ml-8">
                                     <a href="javascript:void(0);"   data-href="<?php echo url($vo['controller_name'].'/'.$vo['action_name']); ?>" onclick="gourl2(this,1);"><?php echo $vo['title']; ?></a>
                                 </div>
                             </div>
                            <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                             <div class="icon-link_add">
                                 <div title="取消导航显示" data-menu_id="<?php echo $vo['menu_id']; ?>"  class="iconfont e-jiahao2 e-jianhao"></div>
                             </div>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                     </ul>
                 </div>
             </div>
        </div>
    <?php endif; ?>
    <div id="gengduogongneng" style="display: none; display: inline-table;margin-bottom: 30px;width: 100%; ">
        <div class="on-off_panel" >
             <div class="on-off_list_bg bg-fff" id="wendangxiagnguan" style="display: block;">
                 <div class="son-tit">
                     <div class="f-16 col-373737">文档相关</div>
                 </div>
                 <div class="on-off_list" id="wendangxiagnguan_child" style="display: block;">
                     <ul class="flex-dir-row  flex-wrap">
                         <?php if(is_check_access('Arctype@index') == '1'): ?>
                             <li class="more_li" id="li_1001" <?php if(in_array('1001',$admin_menu_id_arr) || in_array('1001',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont f-20 e-lanmuguanli col-848484" ></i>
                                     </div>
                                     <div class="ml-8">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Arctype/index'); ?>"  onclick="gourl2(this,1);">栏目管理</a>
                                     </div>
                                 </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="1001" class="iconfont e-jiahao2"></div>
                                 </div>
                                <?php endif; ?>
                             </li>
                         <?php endif; if(is_check_access('Archives@index') == '1'): ?>
                             <li class="more_li" id="li_1002" <?php if(in_array('1002',$admin_menu_id_arr) || in_array('1002',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont  e-neirongwendang f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Archives/index'); ?>"  onclick="gourl2(this,1);">内容管理</a>
                                     </div>
                                 </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="1002" class="iconfont e-jiahao2 "></div>
                                 </div>
                                <?php endif; ?>
                            </li>
                         <?php endif; if(is_check_access('Archives@index_draft') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_1004" <?php if(in_array('1004',$admin_menu_id_arr) || in_array('1004',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont  e-tougao f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Archives/index_draft'); ?>"  onclick="gourl2(this,1);">待审稿件</a>
                                     </div>
                                 </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="1004"  class="iconfont e-jiahao2 "></div>
                                 </div>
                                <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('AdPosition@index') == '1'): ?>
                             <li class="more_li" id="li_1003" <?php if(in_array('1003',$admin_menu_id_arr) || in_array('1003',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-guanggao f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('AdPosition/index'); ?>"  onclick="gourl2(this,1);">广告管理</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="1003" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                         <?php endif; if(is_check_access('Tags@index') == '1'): ?>
                             <li class="more_li" id="li_2004011" <?php if(in_array('2004011',$admin_menu_id_arr) || in_array('2004011',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-TAGguanli f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Tags/index'); ?>"  onclick="gourl2(this,1);">TAG管理</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004011" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                         <?php endif; if(is_check_access('Search@conf') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004022" <?php if(in_array('2004022',$admin_menu_id_arr) || in_array('2004022',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-soguanjianci f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Search/conf'); ?>"  onclick="gourl2(this,1);">搜索管理</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004022" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Field@arctype_index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004004" <?php if(in_array('2004004',$admin_menu_id_arr) || in_array('2004004',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-lanmuziduan f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Field/arctype_index'); ?>"  onclick="gourl2(this,1);">栏目字段</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004004" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>

                             </li>
                             <?php endif; endif; if(is_check_access('Channeltype@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004007" <?php if(in_array('2004007',$admin_menu_id_arr) || in_array('2004007',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-pindaomoxing f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Channeltype/index'); ?>"  onclick="gourl2(this,1);">频道模型</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004007" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('ArchivesFlag@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004008" <?php if(in_array('2004008',$admin_menu_id_arr) || in_array('2004008',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont  e-wendangshuxing f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8">
                                         <a href="javascript:void(0);" data-href="<?php echo url('ArchivesFlag/index'); ?>"  onclick="gourl2(this,1);">文档属性</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004008" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('System@water') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004009" <?php if(in_array('2004009',$admin_menu_id_arr) || in_array('2004009',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="f-20 iconfont  e-shuiyinpeizhi col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('System/water'); ?>" onclick="gourl2(this,1);">图片水印</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004009" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('System@thumb') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004010" <?php if(in_array('2004010',$admin_menu_id_arr) || in_array('2004010',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-suolvetupeizhi f-20  col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('System/thumb'); ?>" onclick="gourl2(this,1);">缩略图设置</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004010" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Navigation@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004013"  <?php if(in_array('2004013',$admin_menu_id_arr) || in_array('2004013',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-daohangguanli f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Navigation/index'); ?>"  onclick="gourl2(this,1);">导航管理</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004013" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; ?>
                     </ul>
                 </div>
             </div>

             <div class="on-off_list_bg bg-fff" id="gaojixuanxiang" style="display: block;">
                 <div class="son-tit">
                     <div class="f-16 col-373737">高级扩展</div>
                 </div>
                 <div class="on-off_list" id="gaojixuanxiang_child" style="display: block;">
                     <ul class="flex-dir-row  flex-wrap">
                         <?php if(is_check_access('System@index') == '1'): ?>
                             <li class="more_li" id="li_2001"  <?php if(in_array('2001',$admin_menu_id_arr) || in_array('2001',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-shezhi f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('System/web'); ?>"  onclick="gourl2(this,1);">基本信息</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2001" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                         <?php endif; if(is_check_access('Admin@admin_pwd') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004001" <?php if(in_array('2004001',$admin_menu_id_arr) || in_array('2004001',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-guanliyuan  f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Admin/index'); ?>"  onclick="gourl2(this,1);">管理员</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004001" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('RecycleBin@arctype_index') == '1'): if($main_lang == $admin_lang): if($recycle_switch != '1'): ?>
                                 <li class="more_li" id="li_2004006" <?php if(in_array('2004006',$admin_menu_id_arr) || in_array('2004006',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                     <div class="flex-dir-row flex-a-center">
                                         <div class="icon_bg icon_bg_no">
                                             <i class="iconfont e-huishouzhan f-20 col-848484" ></i>
                                         </div>
                                         <div class="ml-8 white-space">
                                             <a href="javascript:void(0);" data-href="<?php echo url('RecycleBin/archives_index'); ?>"  onclick="gourl2(this,1);">回收站</a>
                                         </div>
                                     </div>
                                     <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                     <div class="icon-link_add">
                                         <div title="加入导航显示" data-menu_id="2004006" class="iconfont e-jiahao2"></div>
                                     </div>
                                     <?php endif; ?>
                                 </li>
                                 <?php endif; endif; endif; if(is_check_access('Tools@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004002" <?php if(in_array('2004002',$admin_menu_id_arr) || in_array('2004002',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-beifenhuanyuan f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Tools/index'); ?>"  onclick="gourl2(this,1);">备份还原</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004002" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Vertify@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004015" <?php if(in_array('2004015',$admin_menu_id_arr) || in_array('2004015',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-yanzhengmaguanli f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Vertify/index'); ?>"  onclick="gourl2(this,1);">验证码管理</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004015" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>

                             </li>
                             <?php endif; endif; if(is_check_access('Filemanager@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004003" <?php if(in_array('2004003',$admin_menu_id_arr) || in_array('2004003',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-mobanguanli f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Filemanager/index'); ?>" data-menu_id="2004003" onclick="gourl2(this,1);">模板管理</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004003" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Member@users_index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2006" <?php if(in_array('2006',$admin_menu_id_arr) || in_array('2006',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-gerenzhongxin f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Member/users_index'); ?>"  onclick="gourl2(this,1);">会员中心</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2006" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Citysite@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004019" <?php if(in_array('2004019',$admin_menu_id_arr) || in_array('2004019',$not_role_menu_id_arr) || empty($global['web_citysite_open'])): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-chengshifenzhan f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Citysite/index'); ?>"  onclick="gourl2(this,1);">城市分站</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004019" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Weapp@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2005" <?php if(in_array('2005',$admin_menu_id_arr) || in_array('2005',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-chajian f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Weapp/index'); ?>"  onclick="gourl2(this,1);">插件应用</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2005" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                            <?php endif; endif; if(is_check_access('Security@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004017" <?php if(in_array('2004017',$admin_menu_id_arr) || in_array('2004017',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-anquanshezhi f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Security/index'); ?>"  onclick="gourl2(this,1);">安全中心</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004017" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Order@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004021" <?php if(in_array('2004021',$admin_menu_id_arr) || in_array('2004021',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-dingdanguanli f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Order/index'); ?>"  onclick="gourl2(this,1);">订单管理</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004021" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Uiset@ui_index') == '1'): if(!(empty($is_show_uiset) || (($is_show_uiset instanceof \think\Collection || $is_show_uiset instanceof \think\Paginator ) && $is_show_uiset->isEmpty()))): ?>
                             <li class="more_li" id="li_2002" <?php if(in_array('2002',$admin_menu_id_arr) || in_array('2002',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-keshihuabianji f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Uiset/ui_index'); ?>"  onclick="gourl2(this,1);">可视编辑</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2002" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Memgift@gift_exchange_list') == '1'): if($php_servicemeal > 1 && !empty($userConfig['memgift_open'])): ?>
                            <li class="more_li" id="li_2004023" <?php if(in_array('2004023',$admin_menu_id_arr) || in_array('2004023',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                <div class="flex-dir-row flex-a-center">
                                    <div class="icon_bg icon_bg_no">
                                        <i class="iconfont f-20 e-lipinduihuan col-848484" ></i>
                                    </div>
                                    <div class="ml-8 white-space">
                                        <a href="javascript:void(0);" data-href="<?php echo url('Memgift/gift_exchange_list'); ?>"  onclick="gourl2(this,1);">积分商城</a>
                                    </div>
                                </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                <div class="icon-link_add">
                                    <div title="加入导航显示" data-menu_id="2004023" class="iconfont e-jiahao2"></div>
                                </div>
                                <?php endif; ?>
                            </li>
                            <?php endif; endif; if(is_check_access('Form@index') == '1'): ?>
                            <li class="more_li" id="li_2004018" <?php if(in_array('2004018',$admin_menu_id_arr) || in_array('2004018',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                <div class="flex-dir-row flex-a-center">
                                    <div class="icon_bg icon_bg_no">
                                        <i class="iconfont f-20 e-biaodanguanli col-848484" ></i>
                                    </div>
                                    <div class="ml-8 white-space">
                                        <a href="javascript:void(0);" data-href="<?php echo url('Form/index'); ?>"  onclick="gourl2(this,1);">留言管理</a>
                                    </div>
                                </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                <div class="icon-link_add">
                                    <div title="加入导航显示" data-menu_id="2004018" class="iconfont e-jiahao2"></div>
                                </div>
                                <?php endif; ?>
                             </li>
                        <?php endif; ?>
                     </ul>
                 </div>
             </div>

            <?php if($main_lang == $admin_lang): ?>
            <div class="on-off_list_bg bg-fff" id="shangchengmokuai" style="display: block;">
                <div class="son-tit">
                    <div class="f-16 col-373737">商城模块</div>
                </div>
                <div class="on-off_list" id="shangchengmokuai_child" style="display: block;">
                    <ul class="flex-dir-row  flex-wrap">
                        <?php if(is_check_access('Shop@index') == '1'): ?>
                            <li class="more_li" id="li_2008" <?php if(in_array('2008',$admin_menu_id_arr) || in_array('2008',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                            <div class="flex-dir-row flex-a-center">
                                <div class="icon_bg icon_bg_no">
                                    <i class="iconfont f-20 e-shangcheng col-848484" ></i>
                                </div>
                                <div class="ml-8 white-space">
                                    <a href="javascript:void(0);" data-href="<?php echo url('Shop/home',['conceal'=>'1']); ?>"  onclick="gourl2(this,1);">商城中心</a>
                                </div>
                            </div>
                            <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                            <div class="icon-link_add">
                                <div title="加入导航显示" data-menu_id="2008" class="iconfont e-jiahao2"></div>
                            </div>
                            <?php endif; ?>
                            </li>
                        <?php endif; if(is_check_access('Statistics@index') == '1'): ?>
                            <li class="more_li" id="li_2008001" <?php if(in_array('2008001',$admin_menu_id_arr) || in_array('2008001',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                <div class="flex-dir-row flex-a-center">
                                    <div class="icon_bg icon_bg_no">
                                        <i class="iconfont f-20 e-shujutongji col-848484" ></i>
                                    </div>
                                    <div class="ml-8 white-space">
                                        <a href="javascript:void(0);" data-href="<?php echo url('Statistics/index',['conceal'=>'1']); ?>"  onclick="gourl2(this,1);">数据统计</a>
                                    </div>
                                </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                <div class="icon-link_add">
                                    <div title="加入导航显示" data-menu_id="2008001" class="iconfont e-jiahao2"></div>
                                </div>
                                <?php endif; ?>
                            </li>
                        <?php endif; if(is_check_access('ShopProduct@index') == '1'): ?>
                            <li class="more_li" id="li_2008002" <?php if(in_array('2008002',$admin_menu_id_arr) || in_array('2008002',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                <div class="flex-dir-row flex-a-center">
                                    <div class="icon_bg icon_bg_no">
                                        <i class="iconfont f-20 e-shangpinguanli col-848484" ></i>
                                    </div>
                                    <div class="ml-8 white-space">
                                        <a href="javascript:void(0);" data-href="<?php echo url('ShopProduct/index',['conceal'=>'1']); ?>"  onclick="gourl2(this,1);">商品管理</a>
                                    </div>
                                </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                <div class="icon-link_add">
                                    <div title="加入导航显示" data-menu_id="2008002" class="iconfont e-jiahao2"></div>
                                </div>
                                <?php endif; ?>
                            </li>
                        <?php endif; if(is_check_access('ShopProduct@attrlist_index') == '1'): ?>
                            <li class="more_li" id="li_2008003" <?php if(in_array('2008003',$admin_menu_id_arr) || in_array('2008003',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                <div class="flex-dir-row flex-a-center">
                                    <div class="icon_bg icon_bg_no">
                                        <i class="iconfont f-20 e-shangpincanshu col-848484" ></i>
                                    </div>
                                    <div class="ml-8 white-space">
                                        <a href="javascript:void(0);" data-href="<?php echo url('ShopProduct/attrlist_index',['conceal'=>'1']); ?>"  onclick="gourl2(this,1);">商品参数</a>
                                    </div>
                                </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                <div class="icon-link_add">
                                    <div title="加入导航显示" data-menu_id="2008003" class="iconfont e-jiahao2"></div>
                                </div>
                                <?php endif; ?>
                            </li>
                        <?php endif; if(is_check_access('Shop@home') == '1'): ?>
                            <li class="more_li" id="li_2008008" <?php if(in_array('2008008',$admin_menu_id_arr) || in_array('2008008',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                <div class="flex-dir-row flex-a-center">
                                    <div class="icon_bg icon_bg_no">
                                        <i class="iconfont f-20 e-shangpinguige col-848484" ></i>
                                    </div>
                                    <div class="ml-8 white-space">
                                        <a href="javascript:void(0);" data-href="<?php echo url('Shop/spec_index'); ?>"  onclick="gourl2(this,1);">商品规格</a>
                                    </div>
                                </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                <div class="icon-link_add">
                                    <div title="加入导航显示" data-menu_id="2008008" class="iconfont e-jiahao2"></div>
                                </div>
                                <?php endif; ?>
                            </li>
                        <?php endif; if(is_check_access('Shop@conf') == '1'): ?>
                            <li class="more_li" id="li_2008004" <?php if(in_array('2008004',$admin_menu_id_arr) || in_array('2008004',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                <div class="flex-dir-row flex-a-center">
                                    <div class="icon_bg icon_bg_no">
                                        <i class="iconfont f-20 e-shangchengpeizhi col-848484" ></i>
                                    </div>
                                    <div class="ml-8 white-space">
                                        <a href="javascript:void(0);" data-href="<?php echo url('Shop/conf',['conceal'=>'1']); ?>"  onclick="gourl2(this,1);">商城配置</a>
                                    </div>
                                </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                <div class="icon-link_add">
                                    <div title="加入导航显示" data-menu_id="2008004" class="iconfont e-jiahao2"></div>
                                </div>
                                <?php endif; ?>
                            </li>
                        <?php endif; if(is_check_access('Shop@market_index') == '1'): ?>
                            <li class="more_li" id="li_2008005" <?php if(in_array('2008005',$admin_menu_id_arr) || in_array('2008005',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                <div class="flex-dir-row flex-a-center">
                                    <div class="icon_bg icon_bg_no">
                                        <i class="iconfont f-20 e-yingxiaogongneng col-848484" ></i>
                                    </div>
                                    <div class="ml-8 white-space">
                                        <a href="javascript:void(0);" data-href="<?php echo url('Shop/market_index',['conceal'=>'1']); ?>"  onclick="gourl2(this,1);">营销功能</a>
                                    </div>
                                </div>
                                <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                <div class="icon-link_add">
                                    <div title="加入导航显示" data-menu_id="2008005" class="iconfont e-jiahao2"></div>
                                </div>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>

            <div class="on-off_list_bg bg-fff" id="seomokuai" style="display: block;">
                 <div class="son-tit">
                     <div class="f-16 col-373737">SEO模块</div>
                 </div>
                 <div class="on-off_list" id="seomokuai_child" style="display: block;">
                     <ul class="flex-dir-row  flex-wrap">
                         <?php if(is_check_access('Seo@seo') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2003" <?php if(in_array('2003',$admin_menu_id_arr) || in_array('2003',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont f-20 e-seo col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Seo/seo'); ?>"  onclick="gourl2(this,1);">SEO设置</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2003" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                             <?php endif; endif; if(is_check_access('Seo@build') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2004016" <?php if(in_array('2004016',$admin_menu_id_arr) || in_array('2004016',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont f-20 e-jingtaishengcheng col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Seo/build'); ?>"  onclick="gourl2(this,1);">html生成</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2004016" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>

                             </li>
                             <?php endif; endif; if(is_check_access('Sitemap@index') == '1'): if($main_lang == $admin_lang): ?>
                             <li class="more_li" id="li_2003002" <?php if(in_array('2003002',$admin_menu_id_arr) || in_array('2003002',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-Sitemap f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Sitemap/index'); ?>"  onclick="gourl2(this,1);">Sitemap</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2003002" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>

                             </li>
                             <?php endif; endif; if(is_check_access('Links@index') == '1'): ?>
                             <li class="more_li" id="li_2003003" <?php if(in_array('2003003',$admin_menu_id_arr) || in_array('2003003',$not_role_menu_id_arr)): ?>style="display:none"<?php endif; ?>>
                                 <div class="flex-dir-row flex-a-center">
                                     <div class="icon_bg icon_bg_no">
                                         <i class="iconfont e-youqinglianjie1 f-20 col-848484" ></i>
                                     </div>
                                     <div class="ml-8 white-space">
                                         <a href="javascript:void(0);" data-href="<?php echo url('Links/index'); ?>"  onclick="gourl2(this,1);">友情链接</a>
                                     </div>
                                 </div>
                                 <?php if(!(empty($is_founder) || (($is_founder instanceof \think\Collection || $is_founder instanceof \think\Paginator ) && $is_founder->isEmpty()))): ?>
                                 <div class="icon-link_add">
                                     <div title="加入导航显示" data-menu_id="2003003" class="iconfont e-jiahao2"></div>
                                 </div>
                                 <?php endif; ?>
                             </li>
                         <?php endif; ?>
                     </ul>
                 </div>
             </div>
         </div>
        <input type="hidden" name="is_themeusers_exist" id="is_themeusers_exist" value="<?php echo $is_themeusers_exist; ?>">
        <input type="hidden" name="is_themeshop_exist" id="is_themeshop_exist" value="<?php echo $is_themeshop_exist; ?>">
    </div>

    <script type="text/javascript">
        var all_menu_list = <?php echo json_encode($all_menu_list); ?>;
        var module_rele_menu = <?php echo json_encode($module_rele_menu); ?>;
        var module_default_menu = <?php echo json_encode($module_default_menu); ?>;
        var module_reverse_menu = <?php echo json_encode($module_reverse_menu); ?>;
        var not_role_menu_id_arr = <?php echo json_encode($not_role_menu_id_arr); ?>;
        var update_admin_menu_url = "<?php echo url('Ajax/update_admin_menu', ['_ajax'=>1]); ?>";   //添加、删除入口地址
        var is_founder = <?php echo $is_founder; ?>;
        /*
         * 1、给gengduogongneng类第2N个元素加上class,
         * 2、其中一个子元素的高大于100，其他的高也设置为相同
         */
        function add_show2n_class(child,id) {
            var min_height = 100;
            var max_height = 0;
            var childs = 1;
            $(id).find(child).css('min-height',min_height);
            $(id).find(child).each(function (index,element) {
                height = $(element).get(0).offsetHeight;  //获取真实高度 height + padding + border
                if(height > max_height){
                    max_height = height;
                }
                $(element).removeClass("show_2n");
                if (!$(element).is(":hidden")){
                    childs ++;
                    if (childs%2){
                        $(element).addClass("show_2n");
                    }
                }
            });
            if (max_height > min_height){
                $(id).find(child).css('min-height',max_height);
            }
        }
        /*
         * 判断element中是否还有显示的子元素，来控制本元素，以及上级元素的显示和隐藏
         * flag     为true时候，需要先将所有父元素设置未显示状态
         * child    子元素
         * id       当前待检测元素块
         * parent   跟id同时隐藏显示的元素
         */
        function div_visible(flag,child,id,parent) {
            if (flag){
                $(id).show();
                $(parent).show();
            }
            var has_child = false;
            $(id).find(child).each(function (index,element) {
                if (!$(element).is(":hidden")){
                    has_child = true;
                }
            });
            if (has_child){  //存在显示子元素
                $(id).show();
                $(parent).show();
            }else{
                $(id).hide();
                $(parent).hide();
            }
        }
        //通过判断模块是否还存在子组件来决定是否显示,flag为true时候，需要先将所有父元素设置未显示状态
        function module_visible(flag) {
            $('#gengduogongneng').show();  //必须先把最顶级设置为显示，下级判断显示隐藏才有效
            div_visible(flag,'.more_li','#mokuaikaiguan');
            div_visible(flag,'.more_li','#gaojixuanxiang_child','#gaojixuanxiang');
            div_visible(flag,'.more_li','#wendangxiagnguan_child','#wendangxiagnguan');
            div_visible(flag,'.more_li','#shangchengmokuai_child','#shangchengmokuai');
            div_visible(flag,'.more_li','#dingdanmokuai_child','#dingdanmokuai');
            div_visible(flag,'.more_li','#seomokuai_child','#seomokuai');
            div_visible(flag,'.more_li','#gengduogongneng');

            add_show2n_class('.on-off_list_bg','#gengduogongneng');
        }
        //添加模块菜单到导航和左侧菜单
        function add_menu(menu_id,controller_name,action_name,param,icon,title) {
            $.ajax({
                type: "POST",
                url: update_admin_menu_url,
                data: {title:title,controller_name:controller_name,action_name:action_name,menu_id:menu_id,icon:icon,param:param,type:1},
                dataType: 'json',
                success:function (res) {
                    if(res.code == 1){
                        $('#li_'+menu_id).hide();
//                        $('#li_'+menu_id).find(".e-jiahao2").removeClass("e-jianhao");
                        //添加"我的菜单"
                        if(is_founder !== 1){  //没有权限取消
                            var my_html = '<li class="more_li" data-id="'+menu_id+'"   id="my_menu_'+menu_id+'"> ' +
                                '<div class="flex-dir-row flex-a-center"> ' +
                                '<div class="icon_bg"> ' +
                                '<i class="'+ icon +' f-20 on" ></i> ' +
                                ' </div> ' +
                                ' <div class="ml-8"> ' +
                                ' <a href="javascript:void(0);" data-href="'+res.data.url+'" onclick="gourl2(this,1);">'+title+'</a> ' +
                                '</div> ' +
                                '</div> ' +
                                '   </li>';
                        }else{
                            var my_html = '<li title="拖动改变排序" class="more_li" data-id="'+menu_id+'"   id="my_menu_'+menu_id+'"> ' +
                                '<div class="flex-dir-row flex-a-center"> ' +
                                '<div class="icon_bg"> ' +
                                '<i class="'+ icon +' f-20 on" ></i> ' +
                                ' </div> ' +
                                ' <div class="ml-8"> ' +
                                ' <a href="javascript:void(0);"  data-href="'+res.data.url+'" onclick="gourl2(this,1);">'+title+'</a> ' +
                                '</div> ' +
                                '</div> ' +
                                '<div class="icon-link_add"> ' +
                                '    <div title="取消导航显示" data-menu_id="'+menu_id+'"  class="iconfont e-jiahao2 e-jianhao"></div> ' +
                                '    </div> ' +
                                '   </li>';
                        }

                        //添加左侧菜单
                        var html = '<a data-child="0"  data-id="'+menu_id+ '" class="left_menu_'+menu_id+ ' '+controller_name+'_'+action_name+'_'+menu_id+'" id="'+controller_name+'_'+action_name+'" data-menu_id="' + menu_id + '"  href="javascript:void(0);" data-param="'+controller_name+'|'+action_name+param+'" >'
                            +'<i class="'+icon+'"></i>'+title+'</a>';
                        if ($("#my_menu_2004")){
                            $("#my_menu_2004").before(my_html);
                            parent.$(".left_menu_2004").before(html);
                        }else{
                            $("#my_menu").append(my_html);
                            parent.$("#sub-menu").append(html);
                        }
                        module_visible();
                    }
                    return false;
                }
            });

        }
        $(function(){
            //通过判断模块是否还存在子组件来决定是否显示
            module_visible();
            // 当前导航的拖动排序相关 js
            if(is_founder === 1){
                $( ".sort-list" ).sortable({
                    start: function( event, ui) {
                    }
                    ,stop: function( event, ui ) {
                        if(is_founder !== 1){
                            return false;
                        }
                        // 这里ajax实现保存排序逻辑
                        var ul =$("<ul></ul>");
                        var idarr = [];
                        $(".sort-list").children().each(function () {
                            var id = $(this).data("id");
                            var li = parent.$("#sub-menu").find(".left_menu_"+id);
                            ul.append(li);
                            idarr.push(id);

                        });
                        parent.$("#sub-menu").empty().append(ul);
                        //保存数据
                        $.ajax({
                            type: "POST",
                            url: "<?php echo url('Ajax/ajax_move_admin_menu', ['_ajax'=>1]); ?>",
                            data: {menu_id:idarr},
                            dataType: 'json',
                            success:function (res) {
                                if(res.code == 1){
                                    console.log("修改完成");
                                }
                                return false;
                            }
                        });

                    }
                });
                //因为他们要拖动，所以尽量设置他们的文字不能选择。
                $( ".sort-list" ).disableSelection();
            }
            //添加、取消成为栏目
            $(".bodystyle").on('click','.e-jiahao2',function () {
                if(is_founder !== 1){
                    return false;
                }
                var menu_id = $(this).data('menu_id');
                var title = all_menu_list[menu_id]['name'] ;
                var controller_name = all_menu_list[menu_id]['controller'] ;
                var action_name = all_menu_list[menu_id]['action'] ;
                var param = all_menu_list[menu_id]['param'] === undefined ? '' :  all_menu_list[menu_id]['param'];
                var icon = all_menu_list[menu_id]['icon'] ;
                var url =  $(this).data('url');
                if($(this).hasClass('e-jianhao')){  //原本为“已添加”，去除"我的菜单"，修改下面块为“未添加”模式，且显示
                    $.ajax({
                        type: "POST",
                        url: update_admin_menu_url,
                        data: {title:title,controller_name:controller_name,action_name:action_name,menu_id:menu_id,icon:icon,param:param,type:2},
                        dataType: 'json',
                        success:function (res) {
                            if(res.code == 1){
                                $('#li_'+menu_id).show();
                                //删除"我的菜单"
                                $("#my_menu_"+menu_id).remove();
                                //去除左侧菜单
                                parent.$("."+controller_name+'_'+action_name+'_'+menu_id).remove();
                                module_visible(1);
                            }
                            return false;
                        }
                    });
                }else{              //原本为“未添加”，添加;添加到"我的菜单",修改下面块为"添加"模式，且隐藏
                    add_menu(menu_id,controller_name,action_name,param,icon,title);
                }
//                $(this).toggleClass("e-jianhao");
                return false;
            })
        });
        layui.use(['form'], function() {
            var form = layui.form,
                layer = layui.layer
            //监听指定开关
            form.on('switch(switchTest)', function(data) {
                var name = $(this).attr('data-name');
                var type = $(this).attr('data-type');
                if (this.checked) {
                    $(this).val(1);
                    ajax_submit(this, type, name, 1);
                } else {
                    $(this).val(0);
                    ajax_submit(this, type, name, 0);
                }
            });
            form.on('switch(switchTest2)', function(data) {
                var name = $(this).attr('data-name');
                var type = $(this).attr('data-type');
                if (this.checked) {
                    $(this).val(1);
                    ajax_submit(this, type, name, 1);
                } else {
                    $(this).val(-1);
                    ajax_submit(this, type, name, -1);
                }
            });
        });
        /*
        * 开启模块开关
        * name  按钮的name属性 web[web_users_switch]
        */
        function open_module(name) {
            $('input[name="'+name+'"]').attr('checked', 'checked');
            $('input[name="'+name+'"]').val(1);
            $('input[name="'+name+'"]').next().addClass('layui-form-onswitch');
            $('input[name="'+name+'"]').next().html('<em>开启</em><i></i>');
        }
        /*
         * 关闭模块开关
         * name  按钮的name属性 web[web_users_switch]
         */
        function close_module(name) {
            $('input[name="'+name+'"]').removeAttr('checked');
            $('input[name="'+name+'"]').val(0);
            $('input[name="'+name+'"]').next().removeClass('layui-form-onswitch');
            $('input[name="'+name+'"]').next().html('<em>关闭</em><i></i>');
        }
        /*
         * 显示模块关联左边菜单、内页按钮,判断是否已经存在”当前导航“中，如果不存在，才需要显示下方模块中的入口
         * name     数组模块名称[]数组
         */
        function show_module_menu(name){
            for(var i=0;i<name.length;i++){
                //添加默认入口
                var default_menu = module_default_menu[name[i]];
                if (default_menu){
                    for (var d=0;d<default_menu.length;d++){
                        var menu_id = all_menu_list[default_menu[d]]['id'] ;
                        if ($('#my_menu_'+menu_id).length < 1){   // && not_role_menu_id_arr.indexOf(menu_id) === -1
                            var title = all_menu_list[menu_id]['name'] ;
                            var controller_name = all_menu_list[menu_id]['controller'] ;
                            var action_name = all_menu_list[menu_id]['action'] ;
                            var param = all_menu_list[menu_id]['param'] === undefined ? '' :  all_menu_list[menu_id]['param'];
                            var icon = all_menu_list[menu_id]['icon'] ;
                            add_menu(menu_id,controller_name,action_name,param,icon,title);
                        }
                    }
                }
                //显示入口
                var rele_menu = module_rele_menu[name[i]];
                if (rele_menu){
                    for (var j=0;j<rele_menu.length;j++){
                        if (rele_menu[j] && all_menu_list[rele_menu[j]] && all_menu_list[rele_menu[j]]['id']){   // && not_role_menu_id_arr.indexOf(all_menu_list[rele_menu[j]]['id']) === -1
                            var left_menu_class = "left_menu_" + all_menu_list[rele_menu[j]]['id'];
                            var my_menu_id = "my_menu_" + all_menu_list[rele_menu[j]]['id'];
                            var li_id = "li_" + all_menu_list[rele_menu[j]]['id'];
                            if(parent.$('.'+left_menu_class).length > 0){
                                $('.'+left_menu_class,window.parent.document).show();
                            }
                            if ($('#'+my_menu_id).length){
                                $('#'+my_menu_id).show();   //在当前导航中显示
                            }else{
                                $('#'+li_id).show();
                            }
                        }
                    }
                }
                //关闭反关联入口
                var reverse_menu = module_reverse_menu[name[i]];
                if (reverse_menu){
                    for (var j=0;j<reverse_menu.length;j++){
                        if (reverse_menu[j] && all_menu_list[reverse_menu[j]] && all_menu_list[reverse_menu[j]]['id']){
                            var left_menu_class = "left_menu_" + all_menu_list[reverse_menu[j]]['id'];
                            var my_menu_id = "my_menu_" + all_menu_list[reverse_menu[j]]['id'];
                            var li_id = "li_" + all_menu_list[reverse_menu[j]]['id'];
                            if(parent.$('.'+left_menu_class).length > 0){
                                $('.'+left_menu_class,window.parent.document).hide();
                            }
                            $('#'+my_menu_id).hide();
                            $('#'+li_id).hide();
                        }
                    }
                }
            }
            module_visible(1);
        }
        /*
        *   隐藏模块关联左边菜单、内页按钮
        *   name     数组模块名称[]数组
        */
        function hide_module_menu(name) {
            for(var i=0;i<name.length;i++){
                var rele_menu = module_rele_menu[name[i]];
                if (rele_menu){
                    for (var j=0;j<rele_menu.length;j++){
                        if (rele_menu[j] && all_menu_list[rele_menu[j]] && all_menu_list[rele_menu[j]]['id']){
                            var left_menu_class = "left_menu_" + all_menu_list[rele_menu[j]]['id'];
                            var my_menu_id = "my_menu_" + all_menu_list[rele_menu[j]]['id'];
                            var li_id = "li_" + all_menu_list[rele_menu[j]]['id'];
                            if(parent.$('.'+left_menu_class).length > 0){
                                $('.'+left_menu_class,window.parent.document).hide();
                            }
                            $('#'+my_menu_id).hide();
                            $('#'+li_id).hide();
                        }
                    }
                }

            }
            module_visible();
        }

        /*
          * 提交表单obj
          */
        function ajax_submit(obj, inc_type, name, value){
            var _parent = parent;
            var is_force = $(obj).attr('data-is_force');
            var lmenuid = $(obj).attr('data-lmenuid');
            var url = "<?php echo url('Index/switch_map', ['_ajax'=>1]); ?>";
            var syn_open_users = false; // 是否同步开启会员中心
            var syn_close_users = false; //是否同步关闭会员中心管辖的其他模块（会员投稿、会员升级、商城中心、支付功能）
            var syn_module_menu = [name];
            // 验证权限,且判断同步
            switch (name){
                case 'shop_open':
                case 'pay_open':
                case 'users_open_release':
                case 'level_member_upgrade':
                    if (-1 < $.inArray(name, ['shop_open','pay_open']))
                    {
                        if(false == check_shop_open())
                        {
                            return false;
                        }
                    } else if (-1 < $.inArray(name, ['users_open_release','level_member_upgrade']))
                    {
                        if(false == check_users_open_release())
                        {
                            return false;
                        }
                    }
                    // 同时开启会员中心
                    if (1 == value) {
                        syn_open_users = true;
                        syn_module_menu.push('web_users_switch');
                    }
                    break;
                case 'web_users_switch':
                    // 同步关闭会员中心管辖的其他模块（会员投稿、会员升级、商城中心、支付功能）
                    if (0 == value) {
                        syn_close_users = true;
                        syn_module_menu.push('shop_open','pay_open','users_open_release','level_member_upgrade');
                    }
                    break;
            }
            if (1 == $('#is_themeusers_exist').val()) {
                $('#is_themeusers_exist').val(0)
                loadmsg = '初始化中';
            } else if (1 == $('#is_themeshop_exist').val()) {
                $('#is_themeshop_exist').val(0)
                loadmsg = '初始化中';
            } else {
                loadmsg = '正在处理';
            }
            parent_layer_loading(loadmsg);

            $.ajax({
                type: "POST",
                url: url,
                data: {inc_type:inc_type,name:name,value:value,is_force:is_force},
                dataType: 'json',
                success: function (res) {
                    if(res.code == 1){
                        // 同时开启会员中心
                        if (true == syn_open_users) {
                            open_module("web[web_users_switch]");
                        }
                        //关闭会员中心管辖的其他模块（会员投稿、会员升级、商城中心、支付功能）
                        if (true == syn_close_users){
                            close_module("users[users_open_release]");
                            close_module("level[level_member_upgrade]");
                            close_module("shop[shop_open]");
                            close_module("pay[pay_open]");
                        }
                        // 控制顶部与左侧菜单的显示与隐藏
                        if (value == 1){  //显示
                            if(parent.$('#'+lmenuid).length > 0 || ('web_citysite_open' == name && parent.$('#Language_index').length > 0)){
                                $('#'+lmenuid, window.parent.document).show();
                                if ('web_language_switch' == name) {
                                    $('#'+lmenuid+'_span', window.parent.document).show();
                                }
                                if ('web_citysite_open' == name) {
                                    $('#Language_index', window.parent.document).hide();
                                    $('#Language_index_span', window.parent.document).hide();
                                }
                            }
                            show_module_menu(syn_module_menu);
                        }else{
                            if(parent.$('#'+lmenuid).length > 0){
                                $('#'+lmenuid, window.parent.document).hide();
                                if ('web_language_switch' == name) {
                                    $('#'+lmenuid+'_span', window.parent.document).hide();
                                }
                            }
                            hide_module_menu(syn_module_menu);
                        }
                        
                        _parent.layer.closeAll();
                        // 根据不同场景进行页面加载的处理
                        if ('web_citysite_open' == name && 1 == is_force) {
                            _parent.layer.alert(res.msg, {icon: 6, title: false, closeBtn: false}, function(index){
                                if (1 == res.data.reload) {
                                    _parent.layer.close(index);
                                    window.location.reload();
                                }
                            });
                        } else {
                            _parent.layer.msg(res.msg, {icon: 1, time: 800}, function(){
                                if (1 == res.data.reload) {
                                    window.location.reload();
                                } else if (2 == res.data.reload) {
                                    top.window.location.reload();
                                }
                            });
                        }
                    }else{
                        //数据设置失败，回复按钮
                        if (value == 0){    //原来是打开状态
                            open_module(inc_type+"["+name+"]");
                        }else{
                            close_module(inc_type+"["+name+"]");
                        }
                        if (1 == res.data.code) {
                            _parent.layer.closeAll();
                            _parent.layer.alert(res.msg, {btn: ['购买授权'], icon: 4, title:false}, function(){
                                _parent.layer.closeAll();
                                window.location.reload();
                                window.open('https://www.eyoucms.com/buy');
                            });
                        } else {
                            if (-1 < $.inArray(name, ['web_citysite_open', 'web_language_switch'])) {
                                _parent.layer.closeAll();
                                _parent.layer.alert(res.msg, {icon: 7, title:false, closeBtn:false, btn:['强制开启', '取消']}, function(){
                                    _parent.layer.closeAll();
                                    $(obj).attr('data-is_force', 1);
                                    open_module("web["+name+"]");
                                    if ('web_language_switch' == name) {
                                        close_module("web[web_citysite_open]");
                                    } else if ('web_citysite_open' == name) {
                                        close_module("web[web_language_switch]");
                                    }
                                    ajax_submit(obj, inc_type, name, value);
                                });
                            } else {
                                _parent.layer.closeAll();
                                _parent.layer.alert(res.msg, {icon: 5, title:false, closeBtn:false}, function(){
                                    _parent.layer.closeAll();
                                    window.location.reload();
                                });
                            }
                        }
                    }
                },
                error:function(e){
                    _parent.layer.closeAll();
                    _parent.layer.alert(e.responseText, {icon: 5, title:false, closeBtn: false}, function(){
                        _parent.layer.closeAll();
                        window.location.reload();
                    });
                }
            });
        }
        //打开链接
        function gourl2(obj,type){
            var security_ask_open = <?php echo (isset($security_ask_open) && ($security_ask_open !== '')?$security_ask_open:0); ?>;
            var menu_id = $(obj).data('menu_id');
            if (2004003 == menu_id) {
                if (0 == security_ask_open) {
                    showConfirm('需要设置安全问题验证才可以继续', {btn:['去设置', '取消']}, function(){
                        layer.closeAll();
                        var iframes = layer.open({
                            type: 2,
                            title: '安全验证中心',
                            fixed: true, //不固定
                            shadeClose: false,
                            shade: layer_shade,
                            offset: 'auto',
                            // maxmin: true, //开启最大化最小化按钮
                            area: ['100%', '100%'],
                            content: "<?php echo url('Security/second_ask_init', ['gourl'=>url('Filemanager/index')]); ?>",
                            success: function(layero, index){

                            }
                        });
                        layer.full(iframes);
                    });
                    return false;
                }
            }
            var leftmenu = $(obj).data('leftmenu');
            var href = $(obj).data('href');
            $('.eycms_cont_left .sub-menu a', window.parent.document).removeClass('on');
            $('.eycms_cont_left .sub-menu dl.jslist dt', window.parent.document).removeClass('on');

            if (2 == type) {
                $('#'+leftmenu+' dt', window.parent.document).addClass('on');
            } else {
                $('#'+leftmenu, window.parent.document).addClass('on');
            }
            window.location.href = href;
        }
        // 会员模板初始化下载
        function syn_theme_users(value,lmenuid){
            $.ajax({
                type : 'get',
                url : "<?php echo url('Member/ajax_syn_theme_users', ['_ajax'=>1]); ?>",
                data : {},
                dataType : 'json',
                success : function(res){
                    parent.layer.closeAll();
                    if(res.code == 1){
                        parent.layer.msg(res.msg, {icon: 1, time: 1000});
                    }else{
                        parent.layer.alert(res.msg, {icon: 5, title:false, closeBtn:false}, function(){
                            parent.layer.closeAll();
                            window.location.reload();
                        });
                    }
                    // 控制顶部与左侧菜单的显示与隐藏
//                    if (1 == value) {
//                        $('#'+lmenuid, window.parent.document).show();
//                    } else {
//                        $('#'+lmenuid, window.parent.document).hide();
//                    }
                },
                error: function(e){
                    parent.layer.closeAll();
                    parent.layer.alert(e.responseText, {icon: 5, title:false, closeBtn:false}, function(){
                        parent.layer.closeAll();
                        window.location.reload();
                    });
                }
            })
        }
        // 订单模板初始化下载
        function syn_theme_shop(value,lmenuid){
            $.ajax({
                type : 'get',
                url : "<?php echo url('Shop/ajax_syn_theme_shop', ['_ajax'=>1]); ?>",
                data : {},
                dataType : 'json',
                success : function(res){
                    parent.layer.closeAll();
                    if(res.code == 1){
                        parent.layer.msg(res.msg, {icon: 1, time: 1000});
                    }else{
                        var icon = 5;
                        if (res.data.icon) {icon = res.data.icon;}
                        parent.layer.alert(res.msg, {icon: icon, title:false, closeBtn:false}, function(){
                            parent.layer.closeAll();
                            window.location.reload();
                        });
                    }
                    // 控制顶部与左侧菜单的显示与隐藏
//                    try{
//                        if (1 == value) {
//                            $('#Member_users_index', window.parent.document).show();
//                            $('#'+lmenuid, window.parent.document).show();
//                        }
//                    }catch(e){}
                },
                error: function(e){
                    parent.layer.closeAll();
                    parent.layer.alert(e.responseText, {icon: 5, title:false, closeBtn: false}, function(){
                        parent.layer.closeAll();
                        window.location.reload();
                    });
                }
            })
        }
        //检查是否有权限使用商城（是否授权）
        function check_shop_open(){
            var obj = $('input[name="shop[shop_open]"]:checked');
            var is_online = (obj).attr('data-is_online');
            if (1 == is_online) {
                var shop_open = $(obj).val();
                if (1 == shop_open && $(obj).attr('data-authortoken') == -1) {
                    close_module("shop[shop_open]");
                    var alert1 = layer.alert('订单功能只限于授权域名！', {
                        icon: 4,
                        shade: layer_shade,
                        title:false,
                        btn: ['购买授权']
                    }, function(){
                        window.open('https://www.eyoucms.com/buy');
                        layer.close(alert1);
                    });
                    return false;
                }
            }
            return true;
        }
        //检查是否有权限使用会员投稿功能（是否授权）
        function check_users_open_release(){
            var obj = $('input[name="users[users_open_release]"]:checked');
            var is_online = $(obj).attr('data-is_online');
            if (1 == is_online) {
                var users_open_release = $(obj).val();
                if (1 == users_open_release && $(obj).attr('data-authortoken') == -1) {
                    close_module("users[users_open_release]");
                    var alert1 = layer.alert('会员投稿功能只限于授权域名！', {
                        icon: 4,
                        shade: layer_shade,
                        title:false,
                        btn: ['购买授权']
                    }, function(){
                        window.open('https://www.eyoucms.com/buy');
                        layer.close(alert1);
                    });
                    return false;
                }
            }
            return true;
        }
    </script>
</body>
</html>
