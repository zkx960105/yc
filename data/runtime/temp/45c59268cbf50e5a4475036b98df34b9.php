<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:49:"./application/admin/template/channeltype/edit.htm";i:1689865658;s:62:"/data/user/htdocs/application/admin/template/public/layout.htm";i:1689865671;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;s:62:"/data/user/htdocs/application/admin/template/public/footer.htm";i:1689865670;}*/ ?>
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
<body class="bodystyle">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back_xin" href="<?php echo url('Channeltype/index'); ?>"  title="返回"><i class="iconfont e-fanhui"></i></a>
            <div class="subject">
                <h3><?php echo (isset($field['ntitle']) && ($field['ntitle'] !== '')?$field['ntitle']:''); ?>模型</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_check_access('Channeltype@edit') == '1'): ?>
                <li><a href="<?php echo url('Channeltype/edit', ['id'=>$field['id']]); ?>" <?php if(\think\Request::instance()->action() == 'edit'): ?>class="current"<?php endif; ?>><span>模型编辑</span></a></li>
                <?php endif; if(is_check_access('Channeltype@edit') == '1'): if($field['nid'] == 'guestbook'): ?>
                    <li><a href="<?php echo url('Field/attribute_index'); ?>" <?php if(\think\Request::instance()->action() == 'attribute_index'): ?>class="current"<?php endif; ?>><span>属性管理</span></a></li>
                    <?php else: ?>
                    <li><a href="<?php echo url('Field/channel_index', ['channel_id'=>$field['id']]); ?>" <?php if(\think\Request::instance()->action() == 'channel_index'): ?>class="current"<?php endif; ?>><span>字段管理</span></a></li>
                    <?php endif; endif; ?>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Channeltype/edit'); ?>" method="post">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>模型名称</label>
                </dt>
                <dd class="opt">
                    <?php if($field['ifsystem'] == '1'): ?>
                    <?php echo (isset($field['title']) && ($field['title'] !== '')?$field['title']:''); else: ?>
                    <input type="text" name="title" value="<?php echo (isset($field['title']) && ($field['title'] !== '')?$field['title']:''); ?>" id="title" class="input-txt">
                    <?php endif; ?>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="nid">模型标识</label>
                </dt>
                <dd class="opt">
                    <?php echo $field['nid']; ?>
                    <input type="hidden" name="nid" value="<?php echo (isset($field['nid']) && ($field['nid'] !== '')?$field['nid']:''); ?>">
                    <span class="err"></span>
                    <p class="">
                        与文档的模板相关连，建议由小写字母、数字组成，因为部份Unix系统无法识别中文文件。
                        <br/>列表模板是：lists_模型标识.htm
                        <?php if(!in_array(($field['nid']), explode(',',"single,guestbook"))): ?>
                        <br/>文档模板是：view_模型标识.htm
                        <?php endif; ?>
                    </p>
                </dd>
            </dl>

            <?php if(!in_array(($field['nid']), explode(',',"single,guestbook"))): ?>
            <dl class="row">
                <dt class="tit">
                    <label>允许标题重复</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input id="is_repeat_title1" name="is_repeat_title" value="1" type="radio" <?php if(!isset($field['is_repeat_title']) || $field['is_repeat_title'] == 1): ?> checked="checked"<?php endif; ?>>是</label>
                    &nbsp;
                    <label class="curpoin"><input id="is_repeat_title0" name="is_repeat_title" value="0" type="radio" <?php if(isset($field['is_repeat_title']) && $field['is_repeat_title'] == 0): ?> checked="checked"<?php endif; ?>>否</label>
                    <p class="notic">新增/编辑文档时，是否允许标题的重复</p>
                </dd>
            </dl>
            <?php endif; if(in_array(($field['nid']), explode(',',"guestbook"))): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="channel_guestbook_interval">留言间隔时间</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="channel_guestbook_interval" value="<?php echo $channel_guestbook_interval; ?>" id="channel_guestbook_interval" style="width: 60px;">&nbsp;秒
                    <span class="err"></span>
                    <p class="notic">同一个IP在指定间隔秒数之内不能提交留言！</p>
                </dd>
            </dl>
            <!-- <dl class="row">
                <dt class="tit">
                    <label>留言邮箱提醒</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="smtp_is_open1" class="cb-enable <?php if(isset($smtpTplRow['is_open']) && $smtpTplRow['is_open'] == 1): ?>selected<?php endif; ?>">开启</label>
                        <label for="smtp_is_open0" class="cb-disable <?php if(empty($smtpTplRow['is_open'])): ?>selected<?php endif; ?>">关闭</label>
                        <input id="smtp_is_open1" name="smtp_is_open" value="1" type="radio" <?php if(isset($smtpTplRow['is_open']) && $smtpTplRow['is_open'] == 1): ?> checked="checked"<?php endif; ?>>
                        <input id="smtp_is_open0" name="smtp_is_open" value="0" type="radio" <?php if(empty($smtpTplRow['is_open'])): ?> checked="checked"<?php endif; ?>>
                    </div>
                    <p class="notic">客户端提交留言后，管理员会第一时间收到邮箱提醒！</p>
                    <p id="txt_smtp_is_open" class="none">提交保存后，请检查【<a href="javascript:void(0);" onclick="smtp_config();">邮件配置</a>】是否正常发送与接收！</p>
                </dd>
            </dl> -->
            <dl class="row">
                <dt class="tit">
                    <label for="channel_guestbook_time">留言跳转时间</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="channel_guestbook_time" value="<?php echo (isset($channel_guestbook_time) && ($channel_guestbook_time !== '')?$channel_guestbook_time:5); ?>" id="channel_guestbook_time" autocomplete="off" style="width: 60px;" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'')">&nbsp;秒
                    <span class="err"></span>
                    <p class="notic">官方默认5秒，不建议设置太少，可能会导致邮箱没来得及发送。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="channel_guestbook_gourl">留言跳转URL</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="channel_guestbook_gourl" value="<?php echo $channel_guestbook_gourl; ?>" id="channel_guestbook_gourl" placeholder="http://" autocomplete="off" class="input-txt">
                    <span class="err"></span>
                    <p class="notic">前台提交留言完成后，统一跳转到指定的URL。如果不填写，默认跳转到当前页面URL。</p>
                </dd>
            </dl>
            <script type="text/javascript">
                // $(function(){
                //     $('input[name="smtp_is_open"]').click(function(){
                //         if (1 == $(this).val()) {
                //             $('#txt_smtp_is_open').show();
                //         } else {
                //             $('#txt_smtp_is_open').hide();
                //         }
                //     });
                // });

                // function smtp_config()
                // {
                //     parent.$('#Index_switch_map', parent.window.parent.document).removeClass('on');
                //     parent.$('#System_web', parent.window.parent.document).addClass('on');
                //     parent.$('#workspace', parent.window.parent.document).attr('src', "<?php echo url('System/smtp', ['goback'=>'off']); ?>");
                // }
            </script>
            <?php endif; if(in_array(($field['nid']), explode(',',"article,images,download,media"))): if($IsOpenRelease == '1'): ?>
                    <!--<dl class="row">-->
                        <!--<dt class="tit">-->
                            <!--<label>开启会员投稿</label>-->
                        <!--</dt>-->
                        <!--<dd class="opt">-->
                            <!--<div class="onoff">-->
                                <!--<label for="is_release1" class="cb-enable <?php if(!isset($field['is_release']) || $field['is_release'] == 1): ?>selected<?php endif; ?>">是</label>-->
                                <!--<label for="is_release0" class="cb-disable <?php if(isset($field['is_release']) && $field['is_release'] == 0): ?>selected<?php endif; ?>">否</label>-->
                                <!--<input id="is_release1" name="is_release" value="1" type="radio" <?php if(!isset($field['is_release']) || $field['is_release'] == 1): ?> checked="checked"<?php endif; ?>>-->
                                <!--<input id="is_release0" name="is_release" value="0" type="radio" <?php if(isset($field['is_release']) && $field['is_release'] == 0): ?> checked="checked"<?php endif; ?>>-->
                            <!--</div>-->
                            <!--<p class="notic">开启则在会员投稿中有发布入口</p>-->
                        <!--</dd>-->
                    <!--</dl>-->
                    <dl class="row">
                        <dt class="tit">
                            <label>开启投稿缩略图</label>
                        </dt>
                        <dd class="opt">
                            <label class="curpoin"><input id="is_litpic_users_release1" name="is_litpic_users_release" value="1" type="radio" <?php if(!isset($field['is_litpic_users_release']) || $field['is_litpic_users_release'] == 1): ?> checked="checked"<?php endif; ?>>是</label>
                            &nbsp;
                            <label class="curpoin"><input id="is_litpic_users_release0" name="is_litpic_users_release" value="0" type="radio" <?php if(isset($field['is_litpic_users_release']) && $field['is_litpic_users_release'] == 0): ?> checked="checked"<?php endif; ?>>否</label>
                            <p class="notic">会员投稿时，是否允许填写缩略图选项</p>
                        </dd>
                    </dl>
                <?php endif; endif; if($field['nid'] == 'article'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label>开启文章付费</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input id="is_article_pay1" name="data[is_article_pay]" value="1" type="radio" onclick="article_pay(this,'article');" <?php if(!empty($field['data']['is_article_pay'])): ?> checked="checked"<?php endif; ?>>是</label>
                        &nbsp;
                        <label class="curpoin"><input id="is_article_pay0" name="data[is_article_pay]" value="0" type="radio" onclick="article_pay(this,'article');" <?php if(empty($field['data']['is_article_pay'])): ?> checked="checked"<?php endif; ?>>否</label>
                        <a href="javascript:void(0);" class="<?php if(empty($field['data']['is_article_pay'])): ?>none<?php endif; ?>" id="a_articlepay" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=11810&origin_eycms=1','articlepay 文章模型付费阅读标签')" style="font-size: 12px;padding-top: 3px;position: absolute;margin-left: 10px;">标签教程</a>
                        <p class="notic"></p>
                    </dd>
                </dl>
            <?php endif; if($field['nid'] == 'download'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label>开启下载付费</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input id="is_download_pay1" name="data[is_download_pay]" value="1" type="radio" onclick="article_pay(this,'download');" <?php if(!empty($field['data']['is_download_pay'])): ?> checked="checked"<?php endif; ?>>是</label>
                        &nbsp;
                        <label class="curpoin"><input id="is_download_pay0" name="data[is_download_pay]" value="0" type="radio" onclick="article_pay(this,'download');" <?php if(empty($field['data']['is_download_pay'])): ?> checked="checked"<?php endif; ?>>否</label>
                        <a href="javascript:void(0);" class="<?php if(empty($field['data']['is_download_pay'])): ?>none<?php endif; ?>" id="a_downloadpay" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=28561&origin_eycms=1','downloadpay 下载模型付费标签')" style="font-size: 12px;padding-top: 3px;position: absolute;margin-left: 10px;">标签教程</a>
                        <p class="notic"></p>
                    </dd>
                </dl>
            <?php endif; if(in_array(($field['nid']), explode(',',"media,download"))): if($weappRow['Qiniuyun'] == '1'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label>七牛云存储</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input id="qiniuyun_open1" name="data[qiniuyun_open]" value="1" type="radio" <?php if(isset($field['data']['qiniuyun_open']) && $field['data']['qiniuyun_open'] == 1): ?> checked="checked"<?php endif; ?> onclick="qiniuyun_open(this);">开启</label>
                        &nbsp;
                        <label class="curpoin"><input id="qiniuyun_open0" name="data[qiniuyun_open]" value="0" type="radio" <?php if(empty($field['data']['qiniuyun_open'])): ?> checked="checked"<?php endif; ?> onclick="qiniuyun_open(this);">关闭</label>
                        <p class="notic">开启前，请先安装插件【七牛云图片加速】</p>
                    </dd>
                </dl>
                <?php endif; if($weappRow['AliyunOss'] == '1'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label>oss存储</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input id="oss_open1" name="data[oss_open]" value="1" type="radio" <?php if(isset($field['data']['oss_open']) && $field['data']['oss_open'] == 1): ?> checked="checked"<?php endif; ?> onclick="oss_open(this);">开启</label>
                        &nbsp;
                        <label class="curpoin"><input id="oss_open0" name="data[oss_open]" value="0" type="radio" <?php if(empty($field['data']['oss_open'])): ?> checked="checked"<?php endif; ?> onclick="oss_open(this);">关闭</label>
                        <p class="notic">开启前，请先安装插件【阿里云OSS对象存储】</p>
                    </dd>
                </dl>
                <?php endif; if($weappRow['Cos'] == '1'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label>cos存储</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input id="cos_open1" name="data[cos_open]" value="1" type="radio" <?php if(isset($field['data']['cos_open']) && $field['data']['cos_open'] == 1): ?> checked="checked"<?php endif; ?> onclick="cos_open(this);">开启</label>
                        &nbsp;
                        <label class="curpoin"><input id="cos_open0" name="data[cos_open]" value="0" type="radio" <?php if(empty($field['data']['cos_open'])): ?> checked="checked"<?php endif; ?> onclick="cos_open(this);">关闭</label>
                        <p class="notic">开启前，请先安装插件【腾讯云COS对象存储】</p>
                    </dd>
                </dl>
                <?php endif; endif; ?>

            <div class="bot">
                <input type="hidden" name="id" value="<?php echo $field['id']; ?>">
                <a href="JavaScript:void(0);" onclick="checkForm();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    function article_pay(obj,nid)
    {
        var value = $(obj).val();
        if (1 == value) {
            $('#a_'+nid+'pay').removeClass('none');

            if ('article' == nid) {
                layer.alert('开启文章付费需添加相关标签，请查看标签教程修改', {
                    shade: layer_shade,
                    move: false,
                    title: '提示',
                    btnAlign:'r',
                    closeBtn: 3,
                    success: function () {
                        $(".layui-layer-content").css('text-align', 'left');
                    }
                });
            } else if ('download' == nid) {
                layer.alert('开启下载付费需添加相关标签，请查看标签教程修改', {
                    shade: layer_shade,
                    move: false,
                    title: '提示',
                    btnAlign:'r',
                    closeBtn: 3,
                    success: function () {
                        $(".layui-layer-content").css('text-align', 'left');
                    }
                });
            }
        } else {
            $('#a_'+nid+'pay').addClass('none');
        }
    }
    // 七牛云上传开启
    function qiniuyun_open(obj)
    {
        if ($(obj).val() == 1) {
            $.ajax({
                type: 'GET',
                url: "<?php echo url('Channeltype/ajax_qiniuyun_open'); ?>",
                data: {_ajax:1},
                dataType: "JSON",
                success: function(res1) {
                    if (1 == res1.code) {
                        // 七牛云开启，关闭腾讯云COS、阿里云OSS
                        $('label[for=cos_open1], label[for=oss_open1]').removeClass('selected');
                        $('#cos_open1, #oss_open1').attr('checked','');
                        $('label[for=cos_open0], label[for=oss_open0]').addClass('selected');
                        $('#cos_open0, #oss_open0').attr('checked','checked');
                    } else {
                        $('label[for=qiniuyun_open1]').removeClass('selected');
                        $('#qiniuyun_open1').attr('checked','');
                        $('label[for=qiniuyun_open0]').addClass('selected');
                        $('#qiniuyun_open0').attr('checked','checked');

                        if (res1.data.code == -1) {
                            showErrorMsg(res1.msg);
                        } else if (res1.data.code == -2) {
                            layer.alert(res1.msg, {icon: 5, title: false, btn:['启用']}, function(index){
                                layer.close(index);
                                layer_loading('正在启用');
                                $.ajax({
                                    type: 'POST',
                                    url: "<?php echo url('Index/changeTableVal'); ?>",
                                    data: {table:'weapp', id_name:'id', id_value:res1.data.id, field:'status', value:1, _ajax:1},
                                    dataType: "JSON",
                                    success: function (res) {
                                        layer.closeAll();
                                        if (res.code == 1) {
                                            // $('label[for=qiniuyun_open1]').addClass('selected');
                                            // $('#qiniuyun_open1').attr('checked','checked');
                                            // $('label[for=qiniuyun_open0]').removeClass('selected');
                                            // $('#qiniuyun_open0').attr('checked','');
                                        } else {
                                            showErrorMsg(res.msg);
                                        }
                                    }
                                })
                            });
                        } else if (res1.data.code == -3) {
                            layer.confirm(res1.msg, {
                                icon: 5,
                                title: false,
                                btn: ['立即配置']
                            }, function () {
                                layer.closeAll();
                                //iframe窗
                                layer.open({
                                    type: 2,
                                    title: false,
                                    fixed: true, //不固定
                                    shadeClose: false,
                                    shade: layer_shade,
                                    btnAlign:'r',
                                    closeBtn: 3,
                                    maxmin: false, //开启最大化最小化按钮
                                    area: ['80%', '80%'],
                                    content: "<?php echo weapp_url('Qiniuyun/Qiniuyun/index'); ?>"
                                });
                            }, function (index) {
                                layer.closeAll();
                            });
                        } else {
                            showErrorMsg(res1.msg);
                        }
                    }
                },
                error: function(e){
                    showErrorAlert(e.responseText);
                }
            });
        }
    }

    // 阿里云上传开启
    function oss_open(obj)
    {
        if ($(obj).val() == 1) {
            $.ajax({
                type: 'GET',
                url: "<?php echo url('Channeltype/ajax_oss_open'); ?>",
                data: {_ajax:1},
                dataType: "JSON",
                success: function(res1) {
                    if (1 == res1.code) {
                        // 阿里云OSS开启，关闭腾讯云COS、七牛云
                        $('label[for=cos_open1], label[for=qiniuyun_open1]').removeClass('selected');
                        $('#cos_open1, #qiniuyun_open1').attr('checked','');
                        $('label[for=cos_open0], label[for=qiniuyun_open0]').addClass('selected');
                        $('#cos_open0, #qiniuyun_open0').attr('checked','checked');
                    } else {
                        $('label[for=oss_open1]').removeClass('selected');
                        $('#oss_open1').attr('checked','');
                        $('label[for=oss_open0]').addClass('selected');
                        $('#oss_open0').attr('checked','checked');

                        if (res1.data.code == -1) {
                            showErrorMsg(res1.msg);
                        } else if (res1.data.code == -2) {
                            layer.alert(res1.msg, {icon: 5, title: false, btn:['启用']}, function(index){
                                layer.close(index);
                                layer_loading('正在启用');
                                $.ajax({
                                    type: 'POST',
                                    url: "<?php echo url('Index/changeTableVal'); ?>",
                                    data: {table:'weapp', id_name:'id', id_value:res1.data.id, field:'status', value:1, _ajax:1},
                                    dataType: "JSON",
                                    success: function (res) {
                                        layer.closeAll();
                                        if (res.code == 1) {
                                            // $('label[for=qiniuyun_open1]').addClass('selected');
                                            // $('#qiniuyun_open1').attr('checked','checked');
                                            // $('label[for=qiniuyun_open0]').removeClass('selected');
                                            // $('#qiniuyun_open0').attr('checked','');
                                        } else {
                                            showErrorMsg(res.msg);
                                        }
                                    }
                                })
                            });
                        } else if (res1.data.code == -3) {
                            layer.confirm(res1.msg, {
                                icon: 5,
                                title: false,
                                btn: ['立即配置']
                            }, function () {
                                layer.closeAll();
                                //iframe窗
                                layer.open({
                                    type: 2,
                                    title: false,
                                    fixed: true, //不固定
                                    shadeClose: false,
                                    shade: layer_shade,
                                    btnAlign:'r',
                                    closeBtn: 3,
                                    maxmin: false, //开启最大化最小化按钮
                                    area: ['80%', '80%'],
                                    content: "<?php echo weapp_url('AliyunOss/AliyunOss/index'); ?>"
                                });
                            }, function (index) {
                                layer.closeAll();
                            });
                        } else {
                            showErrorMsg(res1.msg);
                        }
                    }
                },
                error: function(e){
                    showErrorAlert(e.responseText);
                }
            });
        }
    }

    // 腾讯云上传开启
    function cos_open(obj) {
        if ($(obj).val() == 1) {
            $.ajax({
                type: 'GET',
                url : "<?php echo url('Channeltype/ajax_cos_open'); ?>",
                data: {_ajax: 1},
                dataType: "JSON",
                success: function(res1) {
                    if (1 == res1.code) {
                        // 腾讯云COS开启，关闭七牛云、阿里云OSS
                        $('label[for=qiniuyun_open1], label[for=oss_open1]').removeClass('selected');
                        $('#qiniuyun_open1, #oss_open1').attr('checked','');
                        $('label[for=qiniuyun_open0], label[for=oss_open0]').addClass('selected');
                        $('#qiniuyun_open0, #oss_open0').attr('checked','checked');
                    } else {
                        $('label[for=cos_open1]').removeClass('selected');
                        $('#cos_open1').attr('checked','');
                        $('label[for=cos_open0]').addClass('selected');
                        $('#cos_open0').attr('checked','checked');

                        if (res1.data.code == -1) {
                            showErrorMsg(res1.msg);
                        } else if (res1.data.code == -2) {
                            layer.alert(res1.msg, {icon: 5, title: false, btn:['启用']}, function(index){
                                layer.close(index);
                                layer_loading('正在启用');
                                $.ajax({
                                    type: 'POST',
                                    url: "<?php echo url('Index/changeTableVal'); ?>",
                                    data: {table:'weapp', id_name:'id', id_value:res1.data.id, field:'status', value:1, _ajax:1},
                                    dataType: "JSON",
                                    success: function (res) {
                                        layer.closeAll();
                                        if (res.code == 1) {
                                            // $('label[for=cos_open1]').addClass('selected');
                                            // $('#cos_open1').attr('checked','checked');
                                            // $('label[for=cos_open0]').removeClass('selected');
                                            // $('#cos_open0').attr('checked','');
                                        } else {
                                            showErrorMsg(res.msg);
                                        }
                                    }
                                })
                            });
                        } else if (res1.data.code == -3) {
                            layer.confirm(res1.msg, {
                                icon: 5,
                                title: false,
                                btn: ['立即配置']
                            }, function () {
                                layer.closeAll();
                                //iframe窗
                                layer.open({
                                    type: 2,
                                    title: false,
                                    fixed: true, //不固定
                                    shadeClose: false,
                                    shade: layer_shade,
                                    btnAlign:'r',
                                    closeBtn: 3,
                                    maxmin: false, //开启最大化最小化按钮
                                    area: ['80%', '80%'],
                                    content: "<?php echo weapp_url('Cos/Cos/index'); ?>"
                                });
                            }, function (index) {
                                layer.closeAll();
                            });
                        } else {
                            showErrorMsg(res1.msg);
                        }
                    }
                },
                error: function(e){
                    showErrorAlert(e.responseText);
                }
            });
        }
    }

    var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
    // 判断输入框是否为空
    function checkForm(){
        var ifsystem = <?php echo (isset($field['ifsystem']) && ($field['ifsystem'] !== '')?$field['ifsystem']:0); ?>;
        if(1 != ifsystem && $.trim($('input[name=title]').val()) == ''){
            showErrorMsg('模型名称不能为空！');
            $('input[name=title]').focus();
            return false;
        }

        var nid = "<?php echo (isset($field['nid']) && ($field['nid'] !== '')?$field['nid']:''); ?>";
        if (nid == 'guestbook') {
            var channel_guestbook_time = $.trim($('input[name=channel_guestbook_time]').val());
            if (parseInt(channel_guestbook_time) < 1) {
                showErrorMsg('留言跳转时间不能少于1秒');
                $('input[name=channel_guestbook_time]').focus();
                return false;
            }

            var channel_guestbook_gourl = $.trim($('input[name=channel_guestbook_gourl]').val());
            var exp = /http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/;
            var objExp = new RegExp(exp);
            if(channel_guestbook_gourl != '' && objExp.test(channel_guestbook_gourl) != true) {
                showErrorMsg('留言跳转URL格式不正确！');
                $('input[name=channel_guestbook_gourl]').focus();
                return false;
            }

            if(parseInt(channel_guestbook_time) < 2){
                layer.confirm('留言跳转时间太短，有可能管理员收不到邮箱、短信提醒。', {
                    shade: layer_shade,
                    area: ['480px', '190px'],
                    move: false,
                    title: '提示',
                    btnAlign:'r',
                    closeBtn: 3,
                    btn: ['确定', '取消'] ,//按钮
                    success: function () {
                        $(".layui-layer-content").css('text-align', 'left');
                    }
                }, function () {
                    postSubmit();
                });
            } else {
                postSubmit();
            }
        } else {
            postSubmit();
        }
    }

    function postSubmit()
    {
        var is_article_pay  = $("input[name='data[is_article_pay]']:checked").val();
        layer_loading('正在处理');
        $.ajax({
            type : 'post',
            url : "<?php echo url('Channeltype/edit', ['_ajax'=>1]); ?>",
            data : $('#post_form').serialize(),
            dataType : 'json',
            success : function(res){
                layer.closeAll();
                if (is_article_pay == 1){
                    parent.parent.$("#sub-menu").find("#Member_article_index").show();
                }else{
                    parent.parent.$("#sub-menu").find("#Member_article_index").hide();
                }

                if(res.code == 1){
                    var _parent = parent;
                    _parent.layer.close(parentObj);
                    _parent.layer.msg(res.msg, {shade: layer_shade, time: 1000}, function(){
                        window.location = res.url;
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