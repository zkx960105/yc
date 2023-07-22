<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:44:"./application/admin/template/article/add.htm";i:1689865656;s:62:"/data/user/htdocs/application/admin/template/public/layout.htm";i:1689865671;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;s:80:"/data/user/htdocs/application/admin/template/archives/get_field_addonextitem.htm";i:1689865655;s:62:"/data/user/htdocs/application/admin/template/public/footer.htm";i:1689865670;}*/ ?>
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

<?php if($editor['editor_select'] == '1'): ?>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?t=v1.6.3"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?t=v1.6.3"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?t=v1.6.3"></script>
<?php else: ?>
    <script type="text/javascript" src="/public/plugins/ckeditor/ckeditor.js?t=v1.6.3"></script>
<?php endif; ?>

<body class="bodysy-w">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="geduan_div" class="h10"></div>
<div id="page_div" class="page min-hg-c mb-20" style="min-width:auto;box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back_xin" href="javascript:history.back();" title="返回"><i class="iconfont e-fanhui"></i></a>
            <a class="back_sz" href="javascript:void(0);"  data-href="<?php echo url('Article/help'); ?>" onclick="openHelpframe(this, '设置与帮助', '500px', '100%', 'r');" title="设置与帮助"><i class="iconfont e-shezhi-tongyong"></i></a>
            <div class="subject">
                <h3>发布文档</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>基础内容</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>SEO优化</span></a></li>
                <li><a href="javascript:void(0);" data-index='3' class="tab"><span>更多设置</span></a></li>
                <!-- #weapp_demontrate_li# -->
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Article/add'); ?>" method="post">
        <!-- 常规信息 -->
        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>文档标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" value="" id="title" class="input-txt" maxlength="200" <?php if($channelRow['is_repeat_title'] == '0'): ?> oninput="check_title_repeat(this,0);" <?php endif; ?>>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    副标题：<input type="text" name="subtitle" value="" id="subtitle" class="w200">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>栏目分类</label>
                </dt>
                <dd class="opt">  
                    <select name="typeid" id="typeid">
                        <option value="0">请选择栏目…</option>
                        <?php echo $arctype_html; ?>
                    </select>
                    <span class="err"></span>
                </dd>
            </dl>
            <?php if(!(empty($global['web_stypeid_open']) || (($global['web_stypeid_open'] instanceof \think\Collection || $global['web_stypeid_open'] instanceof \think\Paginator ) && $global['web_stypeid_open']->isEmpty()))): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="stypeid">副栏目分类</label>
                </dt>
                <dd class="opt"> 
                    <input type="hidden" name="stypeid" id="stypeid" value="" class="input-txt" onkeyup="this.value=this.value.replace(/[^\d\,]/g,'');" onpaste="this.value=this.value.replace(/[^\d\,]/g,'');">
                    &nbsp;<a href="javascript:void(0);" data-channel="<?php echo $channeltype; ?>" onclick="select_stypeid(this);" class="ncap-btn ncap-btn-green">选择副栏目</a>
                    <span class="err"></span>
                    <div id="stypeid_txt" class="pt5"></div>
                </dd>
            </dl>
            <?php endif; ?>
            <dl class="row">
                <dt class="tit">
                    <label>文档属性</label>
                </dt>
                <dd class="opt">
                    <?php if(is_array($archives_flags) || $archives_flags instanceof \think\Collection || $archives_flags instanceof \think\Paginator): $i = 0; $__LIST__ = $archives_flags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <label><input type="checkbox" name="<?php echo $vo['flag_fieldname']; ?>" value="1"><?php echo $vo['flag_name']; ?><!-- [<?php echo $vo['flag_attr']; ?>] --></label>&nbsp;
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <span class="err"></span>
                    <p class="notic">如需管理，请点击右上角设置与帮助按钮</p>
                </dd>
            </dl>
            <dl class="row none dl_jump">
                <dt class="tit">
                    <label>跳转网址</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="jumplinks" id="jumplinks" class="input-txt" placeholder="http://">
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row" style="z-index:2;">
                <dt class="tit">
                    <label>文档标签</label>
                </dt>
                <dd class="opt">          
                    <input type="text" value="" name="tags" id="tags" class="input-txt" placeholder="多个标签之间以逗号隔开" autocomplete="off" oninput="get_common_tagindex_input(this);" onfocus="$('#often_tags').hide();" onkeyup="this.value=this.value.replace(/[\，]/g,',');" onpaste="this.value=this.value.replace(/[\，]/g,',')">&nbsp;
                    <a href="javascript:void(0);" onclick="get_common_tagindex(this);">显示常用标签</a>&nbsp;<img id="tag_loading" src="/public/static/common/images/loading.gif" style="display: none;" />
                    <div class="often_tags" id="often_tags" data-opt="add" style="display: none;"></div>
                    <div class="often_tags" id="often_tags_input" style="display: none;"></div>
                    <input type="hidden" id="tags_click_count">
                </dd>
            </dl>
            <dl class="row <?php if(empty($global['web_citysite_open']) || (($global['web_citysite_open'] instanceof \think\Collection || $global['web_citysite_open'] instanceof \think\Paginator ) && $global['web_citysite_open']->isEmpty())): ?> none <?php endif; ?> ">
                <dt class="tit">
                    <label for="title">所属区域</label>
                </dt>
                <dd class="opt"> 
                    <select name="province_id" id="province_id" onchange="set_city_list(0);">
                        <option value="0">全国</option>
                        <?php $_result=get_site_province_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>" <?php if(\think\Request::instance()->param('province_id') == $vo['id']): ?> selected="true" <?php endif; ?>><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <select name="city_id" id="city_id" class="none ml5" onchange="set_area_list(0);">
                        <option value="">--请选择--</option>
                    </select>
                    <select name="area_id" id="area_id" class="none ml5">
                        <option value="">--请选择--</option>
                    </select>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                  <label>封面图片</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local">
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="javascript:void(0);">
                                <i id="img_i" class="fa fa-picture-o" onmouseover="" onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo"
                                   title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="" placeholder="http://" class="input-txt" onKeyup="keyupRemote(this, 'litpic');" style="display: none;">
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" onClick="clickRemote(this, 'litpic');">远程图片</label>
                    <span class="err"></span>
                </dd>
            </dl>
            <div class="<?php if(empty($channelRow['data']['is_article_pay'])): ?> none <?php endif; ?>">
                <dl class="row">
                    <dt class="tit">
                        <label>付费限制</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input type="radio" name="restric_type" value="0" checked="checked">免费</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="1">付费</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="2">指定会员</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="3">会员付费</label>&nbsp;&nbsp;
                    </dd>
                </dl>
                <dl class="row none" id="dl_arc_level_id">
                    <dt class="tit">
                        <label><em>*</em>会员等级</label>
                    </dt>
                    <dd class="opt">
                        <select name="arc_level_id" id="arc_level_id">
                            <?php if(is_array($users_level) || $users_level instanceof \think\Collection || $users_level instanceof \think\Paginator): $i = 0; $__LIST__ = $users_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['level_id']; ?>" level_value="<?php echo $vo['level_value']; ?>"><?php echo $vo['level_name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label id="no_vip_pay_label"><input type="checkbox" name="no_vip_pay" id="no_vip_pay" value="1" onClick="clickNoVipPay(this);">开启非会员付费</label>
                    </dd>
                </dl>
                <dl class="row none" id="dl_users_price">
                    <dt class="tit">
                        <label for="users_price"><em>*</em>购买价格</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" name="users_price" id="users_price" class="input-txt" autocomplete="off" style="width: 100px !important;text-align: right;" onkeyup="this.value=this.value.replace(/[^\d\.]/g,'');" onpaste="this.value=this.value.replace(/[^\d\.]/g,'')">&nbsp;元
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>

                <div class="none" id="div_free_html">
                    <dl class="row" id="dl_part_free">
                        <dt class="tit">
                            <label for="title"><em>*</em>免费内容</label>
                        </dt>
                        <dd class="opt">
                            <label class="curpoin"><input type="radio" name="part_free" value="0" checked onclick="change_part_free(this);">不预览</label>&nbsp;
                            <label class="curpoin"><input type="radio" name="part_free" value="2" onclick="change_part_free(this);">自动截取</label>&nbsp;
                            <label class="curpoin"><input type="radio" name="part_free" value="1" onclick="change_part_free(this);">手工录入 <span class="none" id="part_free_span" style="color: red;">[编辑]</span></label>&nbsp;
                            <span class="err"></span>
                            <p class="notic"></p>
                        </dd>
                    </dl>
                    <dl class="row none" id="dl_size">
                        <dt class="tit">
                            <label for="size">大小</label>
                        </dt>
                        <dd class="opt">
                            <input type="text" name="size" value="1" id="size" class="input-txt" maxlength="100" autocomplete="off" style="width: 100px !important;text-align: right;" onkeyup="this.value=this.value.replace(/[^\d\.]/g,'');" onpaste="this.value=this.value.replace(/[^\d\.]/g,'')">&nbsp;K
                            <span class="err"></span>
                            <p class="notic"></p>
                        </dd>
                    </dl>
                </div>

            </div>
            <span id="FieldAddonextitem" class="custom_fields"></span>
<script type="text/javascript">
    $(function() {
        var aidNew = <?php echo (isset($field['aid']) && ($field['aid'] !== '')?$field['aid']:'0'); ?>;
        var typeidNew = <?php echo (isset($typeid) && ($typeid !== '')?$typeid:'0'); ?>;
        if (!typeidNew) typeidNew = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        var channeltypeNew = <?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>;
        var ControllerName = '<?php echo CONTROLLER_NAME; ?>';
        var ActionName = '<?php echo ACTION_NAME; ?>';
        GetAddonextitem(0, typeidNew, channeltypeNew, aidNew, false, ControllerName, ActionName);
    });

    function GetAddonextitem(init, typeidNew, channeltypeNew, aidNew, is_destroy, ControllerName, ActionName) {
        layer.load(3, {shade: [0.5,'#fff']});
        ControllerName = ControllerName ? ControllerName : '';
        ActionName = ActionName ? ActionName : '';
        $.ajax({
            url: "<?php echo url('Archives/ajax_get_addonextitem'); ?>",
            data: {typeid: typeidNew, channeltype: channeltypeNew, aid: aidNew, controller_name: ControllerName, action_name:ActionName, _ajax:1},
            type:'get',
            success:function(res) {
                layer.closeAll();
                if (res.code == 0) {
                    layer.alert(res.msg, {icon: 2, title:false});
                } else {
                    var EditorSelect = <?php echo $editor['editor_select']; ?>;
                    if (2 == EditorSelect) {
                        // 编辑器内容数据提取
                        var contentData = [];
                        $.each(res.data.htmltextField, function (index, value) {
                            var contentID = 'addonFieldExt_' + value;
                            var getContent = '';
                            for (instance in CKEDITOR.instances) {
                                CKEDITOR.instances[contentID].updateElement();
                                getContent = CKEDITOR.instances[contentID].getData();
                            }
                            contentData.push(getContent);
                        });
                        // 覆盖原先的编辑器HTML
                        $('#FieldAddonextitem').empty().html(res.data.html);
                        // 追加编辑器的内容
                        $.each(res.data.htmltextField, function (index, value) {
                            if (contentData[index]) {
                                var contentID = 'addonFieldExt_' + value;
                                CKEDITOR.instances[contentID].setData(contentData[index]);
                            }
                        });
                    } else if (1 == EditorSelect) {
                        $('#FieldAddonextitem').empty().html(res.data.html);
                        
                        if (1 == init) {
                            $.each(res.data.htmltextField, function (index, value) {
                                showEditor_1597892187('addonFieldExt_'+value);
                            });
                        }
                    }
                    // 自动远程图片本地化和自动清除本站链接
                    var editor_addonFieldExt = '';
                    $.each(res.data.htmltextField, function (index, value) {
                        if ($('#editor_addonFieldExt')) {
                            if (editor_addonFieldExt) {
                                editor_addonFieldExt += ','+value;
                            }else{
                                editor_addonFieldExt = value;
                            }
                        }
                    });
                    if (editor_addonFieldExt) {
                        $('#editor_addonFieldExt').val(editor_addonFieldExt);
                    }
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(e.responseText, {icon: 2, title:false});
            }
        });
    }

    // 渲染编辑器
    function showEditor_1597892187(elemtid) {
        var content = '';
        try{
            content = UE.getEditor(elemtid).getContent();
            UE.getEditor(elemtid).destroy();
        }catch(e){}
        var serverUrl = eyou_basefile+'?m=admin&c=Ueditor&a=index&savepath=ueditor&lang='+__lang__;
        var options = {
            serverUrl : serverUrl,
            zIndex: 999,
            initialFrameWidth: "100%", //初化宽度
            initialFrameHeight: 450, //初化高度            
            focus: false, //初始化时，是否让编辑器获得焦点true或false
            maximumWords: 99999,
            removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
            pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
            autoHeightEnabled: false,
            toolbars: ueditor_toolbars
        };
        eval("ue_"+elemtid+" = UE.getEditor(elemtid, options);ue_"+elemtid+".ready(function() {ue_"+elemtid+".setContent(content);});");
    }
</script>
        </div>
        <!-- 常规信息 -->
        <!-- SEO参数 -->
        <div class="ncap-form-default tab_div_2" style="display:none;">
            <dl class="row">
                <dt class="tit">
                    <label for="seo_title">SEO标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="seo_title" id="seo_title" class="input-txt">
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO关键词</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_keywords" name="seo_keywords" style="height:20px;"></textarea>
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO描述</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_description" name="seo_description" style="height:130px;"></textarea>
                    <span class="err"></span>
                </dd>
            </dl>
        </div>
        <!-- SEO参数 -->
        <!-- 其他参数 -->
        <div class="ncap-form-default tab_div_3" style="display:none;">
            <dl class="row">
                <dt class="tit">
                    <label for="author">作者</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (\think\Session::get('admin_info.pen_name') ?: '小编'); ?>" name="author" id="author" class="input-txt">
                </dd>
            </dl>
            <dl class="row dl_origin">
                <dt class="tit">
                    <label>来源</label>
                </dt>
                <dd class="opt origin-hot">
                    <input type="text" value="<?php echo $system_originlist_0; ?>" name="origin" id="origin" class="input-txt" onclick="searchOrigin(this);" autocomplete="off">
                    <div class="origin-hot-list" style="display: none;" id="search_keywords_list_origin"></div>
                    <textarea id="system_originlist_str" style="display: none;"><?php echo $system_originlist_str; ?></textarea>
                    <span class="setting" onclick="set_originlist();">设置</span>
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>点击数</label>
                </dt>
                <dd class="opt">    
                    <input type="text" value="<?php echo $rand_arcclick; ?>" name="click" id="click" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>阅读权限</label>
                </dt>
                <dd class="opt">
                    <select name="arcrank" id="arcrank" <?php if($admin_info['role_id'] > 0 && $auth_role_info['check_oneself'] < 1): ?> disabled="disabled" <?php endif; ?>>
                        <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['rank']; ?>" <?php if($admin_info['role_id'] > 0 && $auth_role_info['check_oneself'] < 1 && $vo['rank']==-1): ?> selected="selected" <?php endif; ?>><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <!-- #weapp_UsersGroup_content_users_id=<?php echo $field['users_id']; ?>#--><!-- #weapp_UsersGroup_content# -->
            <dl class="row">
                <dt class="tit">
                    <label for="articleForm">发布时间</label>
                </dt>
                <dd class="opt">
                    <input type="text" class="input-txt" id="add_time" name="add_time" value="<?php echo date('Y-m-d H:i:s') ?>" autocomplete="off">        
                    <span class="add-on input-group-addon">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    </span> 
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="tempview">文档模板</label>
                </dt>
                <dd class="opt">
                    <select name="tempview" id="tempview">
                        <?php if(is_array($templateList) || $templateList instanceof \think\Collection || $templateList instanceof \think\Paginator): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo; ?>" <?php if($vo == $tempview): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="hidden" name="type_tempview" value="<?php echo $tempview; ?>" />
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>no-grey<?php endif; ?>" >
                <dt class="tit">
                    <label>自定义文件名</label>
                </dt>
                <dd class="opt">
                    <input type="text" <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>readonly="readonly" title="动态模式下不支持自定义文档url"<?php endif; ?> value="" name="htmlfilename" id="htmlfilename" autocomplete="off" onkeyup="this.value=this.value.replace(/[^\w\-]/g,'-');" onpaste="this.value=this.value.replace(/[^\w\-]/g,'-');" class="input-txt <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>no-drop<?php endif; ?>">.html
                    <span class="err"></span>
                </dd>
            </dl>
        </div>
        <!-- 其他参数 -->
        <div class="ncap-form-default">
            <div class="bot2">
                <textarea name="free_content" id="free_content" style="display: none;"></textarea>
                <input type="hidden" name="gourl" value="<?php echo (isset($gourl) && ($gourl !== '')?$gourl:''); ?>">
                <input type="hidden" id="editor_addonFieldExt" value="">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
                <a class="ncap-btn-big ncap-btn-no" href="javascript:history.back();" title="返回">返回</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">
    layui.use('laydate', function() {
        var laydate = layui.laydate;

        laydate.render({
            elem: '#add_time'
            ,type: 'datetime'
        });
    })

    $(function () {
        try {
            var web_citysite_open = <?php echo (isset($global['web_citysite_open']) && ($global['web_citysite_open'] !== '')?$global['web_citysite_open']:0); ?>;
            var site_province_id = <?php echo (isset($site_province_id) && ($site_province_id !== '')?$site_province_id:0); ?>;
            var site_city_id = <?php echo (isset($site_city_id) && ($site_city_id !== '')?$site_city_id:0); ?>;
            var site_area_id = <?php echo (isset($site_area_id) && ($site_area_id !== '')?$site_area_id:0); ?>;
            if (web_citysite_open > 0 && site_province_id > 0) {
                $('select[name=province_id]').val(site_province_id);
                set_city_list(site_city_id);
                set_area_list(site_area_id);
            }
        }catch(e){}
        
        //选项卡切换列表
        $('.tab-base').find('.tab').click(function(){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $(this).addClass('current');
            var tab_index = $(this).data('index');          
            $(".tab_div_1, .tab_div_2, .tab_div_3").hide();          
            $(".tab_div_"+tab_index).show();
            layer.closeAll();
        });

        $('input[name=is_jump]').click(function(){
            if ($(this).is(':checked')) {
                $('.dl_jump').show();
            } else {
                $('.dl_jump').hide();
            }
        });

        var dftypeid = <?php echo (isset($typeid) && ($typeid !== '')?$typeid:'0'); ?>;
        $('#typeid').change(function(){
            var current_channel = $(this).find('option:selected').data('current_channel');
            if (0 < $(this).val() && <?php echo $channeltype; ?> != current_channel) {
                showErrorMsg('请选择对应模型的栏目！');
                $(this).val(dftypeid);
            } else if (<?php echo $channeltype; ?> == current_channel) {
                layer.closeAll();
            }
            GetAddonextitem(1, $(this).val(), <?php echo $channeltype; ?>, 0, true);
        });

        $(document).click(function(){
            $('#often_tags').hide();
            $('#often_tags_input').hide();
            event.stopPropagation();
        });

        $('#often_tags').click(function(){
            $('#often_tags').show();
            event.stopPropagation();
        });

        $('input[name=tags]').keyup(function(){
            var tags = $.trim($(this).val());
            $('#seo_keywords').val(tags);
        });

        $('input[name=restric_type]').click(function(){
            $('#dl_arc_level_id').hide();
            $('#dl_users_price').hide();
            $('#no_vip_pay_label').hide();
            $('#div_free_html').hide();
            var restric_type = $(this).val();
            $('#arc_level_id').find('option:eq(0)').attr('selected',true);
            if (0 < restric_type) {
                $('#div_free_html').show();
            }
            if (-1 < $.inArray(restric_type, ['1','3'])) {
                $('#dl_users_price').show();
            }
            if (-1 < $.inArray(restric_type, ['2','3'])) {
                $('#dl_arc_level_id').show();
                if (2 == restric_type) {
                    $('#no_vip_pay_label').show();
                    if ($('#no_vip_pay').is(':checked')){
                        $('#dl_users_price').show();
                    }
                }
            }
        });
    });

    // 判断输入框是否为空
    function check_submit(){
        if($.trim($('input[name=title]').val()) == ''){
            $($('.tab-base').find('.tab')[0]).trigger('click'); 
            showErrorMsg('标题不能为空！');
            $('input[name=title]').focus();
            return false;
        }
        if ($('#typeid').val() == 0) {
            $($('.tab-base').find('.tab')[0]).trigger('click'); 
            showErrorMsg('请选择栏目…！');
            $('#typeid').focus();
            return false;
        }
        var restric_type = $('input[name=restric_type]:checked').val();
        if ( restric_type == 1 ||  restric_type == 3 || (restric_type == 2 && $('#no_vip_pay').is(':checked'))){
            var users_price = $('#users_price').val();
            if (parseFloat(users_price).toString()  == "NaN") {
                users_price = 0;
            }
            if (0 == users_price || users_price == '') {
                showErrorMsg('购买价格不能为空或0');
                $('#users_price').focus();
                return false;
            } else {
                var exp = /^(([1-9]\d*)|\d)(\.\d{1,2})?$/;
                if (!exp.test(users_price)) {
                    showErrorMsg('购买价格格式不正确！');
                    $('#users_price').focus();
                    return false;
                }
            }
        }
        
        var htmlfilename = $.trim($('input[name=htmlfilename]').val());
        if (htmlfilename != '') {
            var exp = /^\d{1,}$/;
            if (exp.test(htmlfilename)) {
                showErrorAlert('自定义文件名不能纯数字，会与文档ID冲突！');
                $('input[name=htmlfilename]').focus();
                return false;
            }
        }

        layer_loading('正在处理');
        if(!ajax_check_htmlfilename())
        {
            layer.closeAll();
            showErrorMsg('自定义文件名已存在！');
            $('input[name=htmlfilename]').focus();
            return false;
        }
        setTimeout(function (){
            editor_auto_210607();
            $('#post_form').submit();
        }, 1);
    }

    function img_call_back(fileurl_tmp)
    {
        $("#litpic_local").val(fileurl_tmp);
        $("#img_a").attr('href', fileurl_tmp);
        $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
        $("input[name=is_litpic]").attr('checked', true); // 自动勾选属性[图片]
    }

    function change_part_free(e) {
        if (1 == $(e).val()){
            $('#dl_size').hide();
            $('#part_free_span').show();
            open_free_content();
        }else if (2 == $(e).val()){
            $('#part_free_span').hide();
            $('#dl_size').show();
        } else{
            $('#part_free_span').hide();
            $('#dl_size').hide();
        }
    }
    function open_free_content() {
        var url = "<?php echo url('Article/free_content'); ?>";
        layer.open({
            type: 2,
            title:'请输入预览内容',
            shade: layer_shade,
            area: ['90%', '90%'], //宽高
            content: url
        });
    }
    function clickNoVipPay(obj) {
        if ($(obj).is(':checked')) {
            $('#dl_users_price').show();
        } else {
            $('#dl_users_price').hide();
        }
    }
</script>
<script>
    try{
        var mt20_1649209614 = sessionStorage.getItem("mt20_1649209614");
        if (mt20_1649209614 == 1){
            $("#geduan_div").removeClass("h10");
        }else{
            $("#geduan_div").addClass("h10");
        }
    }catch(e){}
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