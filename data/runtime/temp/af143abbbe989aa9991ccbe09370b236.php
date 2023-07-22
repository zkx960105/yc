<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:47:"./application/admin/template/security/index.htm";i:1689865672;s:62:"/data/user/htdocs/application/admin/template/public/layout.htm";i:1689865671;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;s:73:"/data/user/htdocs/application/admin/template/security/second_ask_html.htm";i:1689865672;s:62:"/data/user/htdocs/application/admin/template/public/footer.htm";i:1689865670;}*/ ?>
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
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
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
    var __seo_pseudo__ = <?php echo (isset($global['seo_pseudo']) && ($global['seo_pseudo'] !== '')?$global['seo_pseudo']:1); ?>;
    var __web_xss_filter__ = <?php echo (isset($global['web_xss_filter']) && ($global['web_xss_filter'] !== '')?$global['web_xss_filter']:0); ?>;
    var __is_mobile__ = <?php echo (isset($is_mobile) && ($is_mobile !== '')?$is_mobile:0); ?>;
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
<body class="bodystyle" style=" overflow-y: scroll;min-width:auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<style type="text/css">
    #layerid_1645756024 textarea
    {
        height: 220px;
    }
</style>
<div class="page" style="min-width:auto; ">
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back_xin" href="<?php echo url('Index/switch_map'); ?>" title="返回"><i class="iconfont e-fanhui"></i></a>
            <div class="subject">
                <h3>安全中心</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <!-- 操作说明 -->
    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;margin-bottom: 15px;">
        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">提示</h4>
            <span title="收起提示" id="explanationZoom" style="display: block;"></span>
        </div>
        <ul>
            <li>1、网站及时升级到最新版本，定时备份网站习惯。</li>
            <li>2、不要使用系统破解版或盗版插件，大概率有预留后门，已有不少用户中招。</li>
            <li>3、网站目录权限设置建议<a href="JavaScript:void(0);" class="red" data-href="https://www.eyoucms.com/plus/view.php?aid=28298&origin_eycms=1" onclick="openFullframe(this,'易优CMS目录权限设置教程，仅供参考');">【查看】</a></li>
        </ul>
    </div>
    <div class="flexigrid htitx">
        <form class="form-horizontal" id="handlepost1" method="post" enctype="multipart/form-data" action="<?php echo url('Security/handleSave1'); ?>">
            <div class="hDiv">
                <div class="hDivBox">
                    <table cellspacing="0" cellpadding="0" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="sign w10" axis="col0">
                                    <div class="tc"></div>
                                </th>
                                <th abbr="article_title" axis="col3" class="w10">
                                    <div class="tc">后台安全中心</div>
                                </th>
                                <th abbr="ac_id" axis="col4">
                                    <div class=""></div>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="ncap-form-default">
                <dl class="row">
                    <dt class="tit">
                        <label for="web_sqldatapath">数据备份路径</label>
                    </dt>
                    <dd class="opt">
                        <input id="web_sqldatapath" name="web_sqldatapath" value="<?php echo (isset($global['web_sqldatapath']) && ($global['web_sqldatapath'] !== '')?$global['web_sqldatapath']:config('DATA_BACKUP_PATH')); ?>" class="input-txt" type="text" autocomplete="off" />
                        <p class="notic"></p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="adminbasefile">后台登录路径</label>
                    </dt>
                    <dd class="opt">
                        http://hm.bdxah.top/<input type="hidden" name="adminbasefile_old" value="<?php echo (isset($adminbasefile) && ($adminbasefile !== '')?$adminbasefile:'login'); ?>"><input id="adminbasefile" name="adminbasefile" value="<?php echo (isset($adminbasefile) && ($adminbasefile !== '')?$adminbasefile:'login'); ?>" type="text" data-site_url="http://hm.bdxah.top" onKeyUp="this.value=this.value.replace(/[^\w\_\-]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\w\_\-]/g,''));" style="width: 120px;" autocomplete="off" />.php
                        <p class="notic">为了提高后台的安全性，请及时更改后台入口文件。</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="web_login_expiretime">后台登录超时</label>
                    </dt>
                    <dd class="opt">
                        <input id="web_login_expiretime" name="web_login_expiretime" value="<?php echo (isset($global['web_login_expiretime']) && ($global['web_login_expiretime'] !== '')?$global['web_login_expiretime']:config('login_expire')); ?>" autocomplete="off" type="text" class="input-txt" />&nbsp;秒
                        <input type="hidden" name="login_expiretime_old" value="<?php echo (isset($global['web_login_expiretime']) && ($global['web_login_expiretime'] !== '')?$global['web_login_expiretime']:0); ?>">
                        <p class="notic">默认3600秒等于1小时，最多不超过1个月（2592000秒）</p>
                        <p class="notic2 none red" id="tips_web_login_expiretime"></p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="web_login_lockopen">登录失败锁定</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input id="web_login_lockopen1" name="web_login_lockopen" onclick="login_lockopen(this);" value="1" type="radio" <?php if(!isset($global['web_login_lockopen']) || $global['web_login_lockopen'] == 1): ?> checked="checked"<?php endif; ?>>开启</label>
                        &nbsp;
                        <label class="curpoin"><input id="web_login_lockopen0" name="web_login_lockopen" onclick="login_lockopen(this);" value="0" type="radio" <?php if(isset($global['web_login_lockopen']) && $global['web_login_lockopen'] == 0): ?> checked="checked"<?php endif; ?>>关闭</label>
                        <span class="err"></span>
                        <p class="notic">登录多次失败后，账号将被锁定一定时长</p>
                    </dd>
                </dl>
                <div id="div_login_lock" class="<?php if(isset($global['web_login_lockopen']) && $global['web_login_lockopen'] == 0): ?>none<?php endif; ?>">
                    <dl class="row">
                        <dt class="tit">
                            <label for="web_login_errtotal">登录错误次数</label>
                        </dt>
                        <dd class="opt">
                            <input id="web_login_errtotal" name="web_login_errtotal" value="<?php echo (isset($global['web_login_errtotal']) && ($global['web_login_errtotal'] !== '')?$global['web_login_errtotal']:config('login_errtotal')); ?>" class="input-txt" type="text" placeholder="不启用默认留空" autocomplete="off" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'')" />&nbsp;次
                            <p class="notic"></p>
                        </dd>
                    </dl>
                    <dl class="row">
                        <dt class="tit">
                            <label for="web_login_errexpire">登录锁定时间</label>
                        </dt>
                        <dd class="opt">
                            <input id="web_login_errexpire" name="web_login_errexpire" value="<?php echo (isset($global['web_login_errexpire']) && ($global['web_login_errexpire'] !== '')?$global['web_login_errexpire']:config('login_errexpire')); ?>" class="input-txt" type="text" autocomplete="off" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'')" />&nbsp;秒
                            <p class="notic">默认600秒等于10分钟</p>
                        </dd>
                    </dl>
                </div>
                <dl class="row">
                    <dt class="tit">
                        <label for="web_xss_filter">编辑器防注入</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input id="web_xss_filter1" name="web_xss_filter" value="1" type="radio" <?php if(!empty($global['web_xss_filter'])): ?> checked="checked"<?php endif; ?>>开启</label>
                        &nbsp;
                        <label class="curpoin"><input id="web_xss_filter0" name="web_xss_filter" value="0" type="radio" <?php if(empty($global['web_xss_filter'])): ?> checked="checked"<?php endif; ?>>关闭</label>
                        <span class="err"></span>
                        <p class="notic">XSS过滤，防止黑客利用编辑器注入恶意代码（如：inserthtml等操作）</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="web_anti_brushing">网站防止被刷</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input id="web_anti_brushing1" name="web_anti_brushing" value="1" type="radio" <?php if(!empty($global['web_anti_brushing'])): ?> checked="checked"<?php endif; ?>>开启</label>
                        &nbsp;
                        <label class="curpoin"><input id="web_anti_brushing0" name="web_anti_brushing" value="0" type="radio" <?php if(empty($global['web_anti_brushing'])): ?> checked="checked"<?php endif; ?>>关闭</label>
                        <span class="err"></span>
                        <p class="notic">开启后可以防止域名后缀加?wb=违禁词也能访问并被收录等情况</p>
                        <p class="notic2">注意：静态模式下，首页生成应该改为“动态预览”才有效果</p>
                    </dd>
                </dl>
                <dl class="row">
                    <div class="bot" style="padding-bottom:0px;">
                        <a href="JavaScript:void(0);" onclick="checkForm1();" class="ncap-btn-big ncap-btn-green">确认提交</a>
                    </div>
                </dl>
            </div>
        </form>
        <form class="form-horizontal" id="handlepost2" method="post" action="<?php echo url('Security/handleSave2'); ?>">
            <div class="hDiv">
                <div class="hDivBox">
                    <table cellspacing="0" cellpadding="0" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="sign w10" axis="col0">
                                    <div class="tc"></div>
                                </th>
                                <th abbr="article_title" axis="col3" class="w10">
                                    <div class="tc">安全验证中心</div>
                                </th>
                                <th abbr="ac_id" axis="col4">
                                    <div style=""></div>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="ncap-form-default">
                <dl class="row">
    <dt class="tit">
        <label for="security_ask_open">二次验证密码</label>
    </dt>
    <dd class="opt">
        <label class="curpoin"><input id="security_ask_open1" name="security_ask_open" value="1" type="radio" onclick="security_verify_open(this);" <?php if(!empty($security['security_ask_open'])): ?> checked="checked"<?php endif; ?>>开启</label>
        &nbsp;
        <label class="curpoin"><input id="security_ask_open0" name="security_ask_open" value="0" type="radio" onclick="security_verify_open(this);" <?php if(empty($security['security_ask_open'])): ?> checked="checked"<?php endif; ?>>关闭</label>
        <span class="err"></span>
        <p class="notic">开启后，部分功能使用前，将进行二次问答验证</p>
    </dd>
</dl>
<div id="div_security_verify" class="<?php if(empty($security['security_ask_open'])): ?>none<?php endif; ?>">
    <input type="hidden" id="is_ask_add_edit" value="<?php if(empty($security['security_ask']) || (($security['security_ask'] instanceof \think\Collection || $security['security_ask'] instanceof \think\Paginator ) && $security['security_ask']->isEmpty())): ?>add<?php else: ?>edit<?php endif; ?>">
    <textarea id="security_askanswer_content" style="display: none;"><?php echo (isset($security_askanswer_content) && ($security_askanswer_content !== '')?$security_askanswer_content:''); ?></textarea>
    <textarea id="security_ask_content" style="display: none;"><?php echo (isset($security['security_ask']) && ($security['security_ask'] !== '')?$security['security_ask']:''); ?></textarea>
    <?php if(empty($security['security_ask']) || (($security['security_ask'] instanceof \think\Collection || $security['security_ask'] instanceof \think\Paginator ) && $security['security_ask']->isEmpty())): ?>
        <dl class="row">
            <dt class="tit">
                <label for="security_ask"><em>*</em>设置安全问题</label>
            </dt>
            <dd class="opt" style="width: auto;">
                <select name="security_ask" id="security_ask" class="w210">
                    <option value="-1">请选择…</option>
                    <?php if(is_array($security_askanswer_list) || $security_askanswer_list instanceof \think\Collection || $security_askanswer_list instanceof \think\Paginator): $i = 0; $__LIST__ = $security_askanswer_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                &nbsp;<a href="javascript:void(0);" onclick="get_ask_list(this);" class="ncap-btn ncap-btn-green">问题列表</a>
                <span class="err"></span>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="security_answer"><em>*</em>设置问题答案</label>
            </dt>
            <dd class="opt" style="width: auto;">
                <input type="text" name="security_answer" value="" id="security_answer" class="w200" autocomplete="off">
                <span class="err"></span>
                <p class="notic"></p>
            </dd>
        </dl>
    <?php else: ?>
        <dl class="row">
            <dt class="tit">
                <label for="security_ask_old">原安全问题</label>
            </dt>
            <dd class="opt" style="width: auto;">
                <?php echo $security['security_ask']; ?>
                <span class="err"></span>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="security_answer_old"><em id="security_answer_old_em" style="display: none;">*</em>原问题答案</label>
            </dt>
            <dd class="opt" style="width: auto;">
                <input type="text" name="security_answer_old" value="" id="security_answer_old" placeholder="" class="w200" autocomplete="off">
                <span class="err"></span>
                <p class="notic">不重新设置无需填写问题答案</p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="security_ask">设置安全问题</label>
            </dt>
            <dd class="opt" style="width: auto;">
                <select name="security_ask" id="security_ask" class="w210">
                    <option value="-1">请选择…</option>
                    <?php if(is_array($security_askanswer_list) || $security_askanswer_list instanceof \think\Collection || $security_askanswer_list instanceof \think\Paginator): $i = 0; $__LIST__ = $security_askanswer_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                &nbsp;<a href="javascript:void(0);" onclick="get_ask_list(this);" class="ncap-btn ncap-btn-green">问题列表</a>
                <span class="err"></span>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="security_answer"><em id="security_answer_em" style="display: none;">*</em>设置问题答案</label>
            </dt>
            <dd class="opt" style="width: auto;">
                <input type="text" name="security_answer" value="" id="security_answer" class="w200" autocomplete="off">
                <span class="err"></span>
                <p class="notic">为空默认不修改</p>
            </dd>
        </dl>
        <script type="text/javascript">
            $(function(){
                // 新设置安全问题
                $('select[name=security_ask]').click(function(){
                    var security_ask = $(this).val();
                    var security_answer = $.trim($('input[name=security_answer]').val());
                    if (0 > security_ask && security_answer === '') {
                        $('#security_answer_em').hide();
                        $('#security_answer_old_em').hide();
                    } else {
                        $('#security_answer_em').show();
                        $('#security_answer_old_em').show();
                    }
                });
                // 新设置问题答案
                $('input[name=security_answer]').keyup(function(){
                    var security_ask = $('select[name=security_ask]').val();
                    var security_answer = $.trim($(this).val());
                    if (security_answer === '' && 0 > security_ask) {
                        $('#security_answer_em').hide();
                        $('#security_answer_old_em').hide();
                    } else {
                        $('#security_answer_em').show();
                        $('#security_answer_old_em').show();
                    }
                });
            });
        </script>
    <?php endif; ?>
    <dl class="row">
        <dt class="tit">
            <label for="security_verifyfunc">二次验证范围</label>
        </dt>
        <dd class="opt">
            <!-- <label title="强制勾选"><input type="checkbox" name="security_verifyfunc[]" value="Security@*" checked="checked" disabled="true">安全中心</label>&nbsp;&nbsp; -->
            <label title="强制勾选"><input type="checkbox" name="security_verifyfunc[]" value="Filemanager@*" checked="checked" disabled="true">模板管理</label>&nbsp;&nbsp;
            <label class="curpoin"><input type="checkbox" name="security_verifyfunc[]" value="Weapp@*" <?php if(!empty($security['security_verifyfunc']) && in_array('Weapp@*', $security['security_verifyfunc'])): ?>checked="checked"<?php endif; ?>>插件应用</label>&nbsp;&nbsp;
            <p class="notic">建议勾选，避免存在被注入木马的安全漏洞隐患</p>
        </dd>
    </dl>
    <dl class="row">
        <dt class="tit">
            <label for="security_ask_ip_open">IP白名单</label>
        </dt>
        <dd class="opt">
            <label class="curpoin"><input id="security_ask_ip_open1" name="security_ask_ip_open" value="1" type="radio" <?php if(!isset($security['security_ask_ip_open']) || $security['security_ask_ip_open'] == 1): ?> checked="checked"<?php endif; ?>>开启</label>
            &nbsp;
            <label class="curpoin"><input id="security_ask_ip_open0" name="security_ask_ip_open" value="0" type="radio" <?php if(isset($security['security_ask_ip_open']) && $security['security_ask_ip_open'] == 0): ?> checked="checked"<?php endif; ?>>关闭</label>
            <span class="err"></span>
            <p class="notic">如果开启该功能，在相同IP下登录后，任意一个管理员二次验证成功，其他人不再弹出验证</p>
        </dd>
    </dl>
</div>
<script type="text/javascript">
    function get_ask_list(obj)
    {
        layer.prompt({
            title: '问题列表管理',
            id: 'layerid_1645756024',
            formType: 2,
            btn: ['保存','取消'],
            shade: layer_shade,
            closeBtn: 0,
            value: $('#security_askanswer_content').val(),
            success: function(layero, index) {
                if ('edit' == $('#is_ask_add_edit').val()) {
                    var security_ask_content = "<?php echo $security['security_ask']; ?>";
                    if (security_ask_content == '') {
                        security_ask_content = $('#security_ask_content').val();
                    }
                    var before_str = "<div style='margin: -8px 0px 10px 0px;'>当前问题名称：<font style='color: red;'>"+security_ask_content+"</font></div>";
                    $("#layerid_1645756024").prepend(before_str);

                    var after_str = "<div style='margin-top: 5px;font-size: 12px; color: #999999;'>保存后，已设置的问题名称会默认存入问题列表</div>";
                    $("#layerid_1645756024").append(after_str);
                }
                $("#layerid_1645756024").find('textarea').attr('placeholder', '一行代表一个问题');
            },
            btn2: function(index, layero){
                layer.close(index);
                return false;
            }
        }, function(value, index) {
            save_ask_list(value);
        });
    }

    function save_ask_list(value)
    {
        //loading层
        var loading = layer.load(3, {
            shade: [0.1,'#fff'] //0.1透明度的白色背景
        });
        $.ajax({
            type : 'post',
            url : "<?php echo url('Security/save_ask_list', ['_ajax'=>1]); ?>",
            data : {value:value},
            dataType : 'json',
            success : function(res) {
                if (res.code == 1) {
                    layer.closeAll();
                    var selected_text = $('select[name=security_ask] option:selected').text();
                    var option_html = '<option value="-1">请选择…</option>';
                    $.each(res.data.security_askanswer_list, function(index, item) {
                        if (selected_text == item) {
                            option_html += '<option value="'+index+'" selected="true">'+item+'</option>';
                        } else {
                            option_html += '<option value="'+index+'">'+item+'</option>';
                        }
                    });
                    $('select[name=security_ask]').html(option_html);
                    $('#security_askanswer_content').val(res.data.value);
                    layer.msg(res.msg, {shade: 0.1, time: 1000});
                }else{
                    layer.close(loading);
                    $('#layerid_1645756024').find('input[type=textarea]').focus();
                    layer.msg(res.msg, {time: 1000});
                }
            },
            error: function(e) {
                layer.close(loading);
                showErrorAlert(e.responseText);
            }
        });
    }

    function security_verify_open(obj)
    {
        var is_open = $(obj).val();
        if (1 == is_open) {
            $('#div_security_verify').show();
        } else {
            $('#div_security_verify').hide();
        }
    }

    /**
     * 是否已验证了答案
     * @return {[type]} [description]
     */
    function ajax_isverify_answer()
    {
        var flag = false;
        var ask_open_old = <?php echo (isset($security['security_ask_open']) && ($security['security_ask_open'] !== '')?$security['security_ask_open']:0); ?>;
        var ask_open = $('input[name=security_ask_open]:checked').val();
        if (1 == ask_open_old && ask_open_old != ask_open) {
            
        } else {
            return true;
        }

        $.ajax({
            url : "<?php echo url('Security/ajax_isverify_answer'); ?>",
            type: 'POST',
            async: false,
            dataType: 'JSON',
            data: {_ajax:1},
            success: function(res){
                if(res.code == 1){
                    flag = true;
                }
            },
            error: function(e){
                showErrorAlert(e.responseText);
            }
        });

        return flag;
    }

    function autoload_security()
    {
        layer.prompt({
            title: '二次安全验证',
            id: 'layerid_1645598368',
            btn: ['确定'],
            shade: layer_shade,
            closeBtn: 0,
            success: function(layero, index) {
                var before_str = "<div style='margin: -8px 0px 10px 0px;color: red;font-weight: bold;'><?php echo $security['security_ask']; ?></div>";
                $("#layerid_1645598368").prepend(before_str);
                $("#layerid_1645598368").find('input').attr('placeholder', '请录入问题的答案内容！');
                $("#layerid_1645598368").find('input').bind('keydown', function(event) {
                    if (event.keyCode == 13) {
                        security_answer_verify($(this).val());
                    }
                });
            },
            btn2: function(index, layero){
                return false;
            }
        }, function(value, index) {
            security_answer_verify(value);
        });
    }

    function security_answer_verify(answer)
    {
        $.ajax({
            type : 'post',
            url : "<?php echo url('Security/ajax_answer_verify', ['_ajax'=>1]); ?>",
            data : {answer:answer},
            dataType : 'json',
            success : function(res){
                if (res.code == 1) {
                    layer.closeAll();
                    submitForm();
                }else{
                    $('#layerid_1645598368').find('input[type=text]').focus();
                    layer.msg(res.msg, {time: 1000});
                }
            },
            error: function(e) {
                showErrorAlert(e.responseText);
            }
        });
    }
</script>

                <dl class="row">
                    <div class="bot" style="padding-bottom:0px;">
                        <a href="JavaScript:void(0);" onclick="checkForm2();" class="ncap-btn-big ncap-btn-green">确认提交</a>
                    </div>
                </dl>
            </div>
        </form>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                        <tr>
                            <th class="sign w10" axis="col0">
                                <div class="tc"></div>
                            </th>
                            <th abbr="article_title" axis="col3" class="w10">
                                <div class="tc">病毒查杀中心</div>
                            </th>
                            <th abbr="ac_id" axis="col4">
                                <div style=""></div>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label>病毒木马查杀</label>
                </dt>
                <dd class="opt">
                    <a href="javascript:void(0);" data-href="https://www.eyoucms.com/plus/view.php?aid=28327&origin_eycms=1" onclick="openFullframe(this, '快速彻底根治网站源码里的木马代码与多余可疑文件');" class="ncap-btn ncap-btn-green">查看教程</a>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>可疑恶意文件</label>
                </dt>
                <dd class="opt">
                    <a href="javascript:void(0);" data-href="<?php echo url('Security/ddos_kill'); ?>" onclick="openFullframe(this, '可疑恶意文件');" class="ncap-btn ncap-btn-green">在线扫描</a>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#web_login_expiretime').keyup(function(){
            var web_login_expiretime = $(this).val();
            if (web_login_expiretime > 2592000) {
                $(this).val(2592000);
                $('#tips_web_login_expiretime').html('最多不能设置超过一个月（2592000秒）').show();
            } else if (web_login_expiretime < 60) {
                $('#tips_web_login_expiretime').html('最少不能设置低于60秒').show();
            } else {
                $('#tips_web_login_expiretime').hide();
            }
        });
    });

    function login_lockopen(obj)
    {
        var is_open = $(obj).val();
        if (1 == is_open) {
            $('#div_login_lock').show();
        } else {
            $('#div_login_lock').hide();
        }
    }

    function checkForm1(){
        // 后台登录超时
        var web_login_expiretime_obj = $('input[name=web_login_expiretime]');
        if (web_login_expiretime_obj.val() < 60) {
            showErrorMsg('后台登录超时不能少于60秒！');
            web_login_expiretime_obj.focus();
            return false;
        }

        var adminbasefileObj = $('input[name=adminbasefile]');
        var adminbasefile_oldObj = $('input[name=adminbasefile_old]');
        if($.trim(adminbasefileObj.val()) == ''){
            showErrorMsg('后台路径不能为空！');
            adminbasefileObj.focus();
            return false;
        }

        if (1 == $('input[name=web_login_lockopen]:checked').val()) {
            var web_login_errtotal_obj = $('input[name=web_login_errtotal]');
            if (web_login_errtotal_obj.val() < 2) {
                showErrorMsg('登录错误次数不能少于2次！');
                web_login_errtotal_obj.focus();
                return false;
            }
            var web_login_errexpire_obj = $('input[name=web_login_errexpire]');
            if (web_login_errexpire_obj.val() < 60) {
                showErrorMsg('登录错误次数不能少于60秒！');
                web_login_errexpire_obj.focus();
                return false;
            }
        }
        
        var adminbasefileObj = $('input[name=adminbasefile]');
        var adminbasefile_oldObj = $('input[name=adminbasefile_old]');
        if(adminbasefile_oldObj.val() != adminbasefileObj.val()){
            var flag = false;
            var site_url = adminbasefileObj.data('site_url');
            layer.confirm('后台路径：<font color="red">'+site_url+'/'+adminbasefileObj.val()+'.php</font>，确认更改？', {
                    title: false,
                    btn: ['继续更改','取消'] //按钮
                }, function(){
                    layer_loading('正在处理');
                    setTimeout(function (){
                        $.ajax({
                            type : 'post',
                            url : "<?php echo url('Security/handleSave1', ['_ajax'=>1]); ?>",
                            data : $('#handlepost1').serialize(),
                            dataType : 'json',
                            success : function(res){
                                layer.closeAll();
                                if(res.code == 1){
                                    showSuccessMsg(res.msg, 500, function(){
                                        top.window.location.href = res.url;
                                    });
                                }else{
                                    showErrorMsg(res.msg);
                                }
                            },
                            error: function(e){
                                layer.closeAll();
                                showErrorAlert(e.responseText);
                            }
                        });
                    }, 1);
                }, function(index){
                    flag = false;
                }
            );
            return flag;
        }
        layer_loading('正在处理');
        setTimeout(function (){
            $.ajax({
                type : 'post',
                url : "<?php echo url('Security/handleSave1', ['_ajax'=>1]); ?>",
                data : $('#handlepost1').serialize(),
                dataType : 'json',
                success : function(res){
                    layer.closeAll();
                    if(res.code == 1){
                        showSuccessMsg(res.msg, 500, function(){
                            window.location.reload();
                        });
                    }else{
                        showErrorMsg(res.msg);
                    }
                },
                error: function(e){
                    layer.closeAll();
                    showErrorAlert(e.responseText);
                }
            });
        }, 1);
    }
</script>
<script type="text/javascript">
    function checkForm2(){
        var is_founder = <?php echo (isset($admin_info['is_founder']) && ($admin_info['is_founder'] !== '')?$admin_info['is_founder']:0); ?>;
        if ($('input[name=security_ask_open]:checked').val() == 1) {
            var security_ask = $('select[name=security_ask]').val();
            var security_answer = $.trim($('input[name=security_answer]').val());
            if ('add' == $('#is_ask_add_edit').val()) {
                if (0 > security_ask) {
                    showErrorMsg('请设置安全问题！');
                    return false;
                }
                if (security_answer === '') {
                    showErrorMsg('请设置问题答案！');
                    $('input[name=security_answer]').focus();
                    return false;
                }
            } else {
                if (security_answer !== '' || 0 <= security_ask) {
                    var security_answer_old = $.trim($('input[name=security_answer_old]').val());
                    if (security_answer_old === '') {
                        showErrorMsg('原问题答案不能为空！');
                        $('input[name=security_answer_old]').focus();
                        return false;
                    } else {
                        if (0 <= security_ask) {
                            if (security_answer === '') {
                                showErrorMsg('请设置问题答案！');
                                $('input[name=security_answer]').focus();
                                return false;
                            } else if (security_answer === security_answer_old) {
                                showErrorMsg('设置问题答案不能与原来的一致！');
                                $('input[name=security_answer]').focus();
                                return false;
                            }
                        }
                    }
                }
            }
        } else {
            var security_ask_open = <?php echo (isset($security['security_ask_open']) && ($security['security_ask_open'] !== '')?$security['security_ask_open']:0); ?>;
            if (0 == is_founder && 1 == security_ask_open) {
                showErrorAlert('创始人才能关闭安全验证功能！');
                return false;
            }
        }
        
        if(!ajax_isverify_answer())
        {
            autoload_security();
            return false;
        }

        layer_loading('正在处理');
        setTimeout(function (){
            $.ajax({
                type : 'post',
                url : "<?php echo url('Security/handleSave2', ['_ajax'=>1]); ?>",
                data : $('#handlepost2').serialize(),
                dataType : 'json',
                success : function(res){
                    layer.closeAll();
                    if(res.code == 1){
                        if (0 == res.data.security_ask_open || 0 == res.data.is_show_answer) {
                            showSuccessMsg(res.msg, 500, function(){
                                window.location.reload();
                            });
                        } else {
                            layer.alert(res.msg, {
                                shade: layer_shade,
                                area: ['480px', '190px'],
                                move: false,
                                title: '提示',
                                btnAlign:'r',
                                closeBtn: 3,
                                btn: ['记住了'] ,//按钮
                                success: function () {
                                    $(".layui-layer-content").css('text-align', 'left');
                                }
                            }, function (index) {
                                window.location.reload();
                            });
                        }
                    }else{
                        showErrorMsg(res.msg);
                    }
                },
                error: function(e){
                    layer.closeAll();
                    showErrorAlert(e.responseText);
                }
            });
        }, 1);
    }
</script>

<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>