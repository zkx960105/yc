<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:50:"./application/admin/template/field/channel_add.htm";i:1689865661;s:62:"/data/user/htdocs/application/admin/template/public/layout.htm";i:1689865671;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;s:62:"/data/user/htdocs/application/admin/template/public/footer.htm";i:1689865670;}*/ ?>
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
    <form class="form-horizontal" id="post_form" action="<?php echo url('Field/channel_add'); ?>" method="post">
        <!-- 常规选项 -->
        <div class="ncap-form-default tab_div_1">
            <?php if(!empty($type) && 'all' == $type): ?>
            <dl class="row">
                <dt class="tit">
                    <label><em>*</em>所属模型</label>
                </dt>
                <dd class="opt">
                    <select name="channel_id" id="channel_id" onchange="channelSelect(this);">
                        <option value="0">请选择模型</option>
                        <?php if(is_array($channeltype_list) || $channeltype_list instanceof \think\Collection || $channeltype_list instanceof \think\Paginator): $i = 0; $__LIST__ = $channeltype_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </dd>
            </dl>
            <script type="text/javascript">
                function channelSelect(obj) {
                    var channel_id = $(obj).val();
                    var resData = '<option value="0" selected="false">—指定所有栏目—</option>';
                    if (channel_id && channel_id > 0) {
                        $.ajax({
                            type: 'post',
                            url : "<?php echo url('Field/channel_select'); ?>",
                            data: {'_ajax': 1, channel_id: channel_id},
                            dataType: 'json',
                            success: function(res){
                                if (res.code == 1) {
                                    resData = resData + res.data;
                                    $('#typeid').empty().html(resData);
                                } else {
                                    showErrorMsg(res.msg);
                                }
                            },
                            error: function(e){
                                layer.alert(e.responseText, {icon: 5, title: false, closeBtn: false});
                            }
                        });
                    } else {
                        $('#typeid').empty().html(resData);
                    }
                }
            </script>
            <?php endif; ?>
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>字段标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="title" id="title" class="input-txt">
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="name"><em>*</em>字段名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="name" id="name" placeholder="只允许字母、数字和下划线的任意组合" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9a-zA-Z_]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-zA-Z_]/g,''));">
                    <p class="notic">保持唯一性，不可与主表、附加表重复</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="dtype"><em>*</em>数据类型</label>
                </dt>
                <dd class="opt">
                    <?php if(is_array($fieldtype_list) || $fieldtype_list instanceof \think\Collection || $fieldtype_list instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldtype_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div style="width: 150px; float: left;">
                            <label><input type="radio" name="dtype" value="<?php echo $vo['name']; ?>" data-ifoption="<?php echo (isset($vo['ifoption']) && ($vo['ifoption'] !== '')?$vo['ifoption']:0); ?>" <?php if($i == '1'): ?> checked="checked" <?php endif; ?> data-text="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></label>&nbsp;
                        </div>
                        <?php if($i % 4 == 0): ?><br/><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>

            <div id='region_div' style="display: none;">
                <dl class="row">
                    <dt class="tit">
                        <label for="region"><em>*</em>区域选择</label>
                    </dt>
                    <dd class="opt">
                        <select id="province" onchange="GetRegionData(this,'province');">
                            <option value="-1">请选择</option>
                            <?php if(is_array($Province) || $Province instanceof \think\Collection || $Province instanceof \think\Paginator): $i = 0; $__LIST__ = $Province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$P_V): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $P_V['id']; ?>"><?php echo $P_V['name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>

                        <span id='CityId'>
                            <select id="city" onchange="GetRegionData(this,'city');">
                                <option value="">请选择</option>
                            </select>
                            </span>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                    <input type="hidden" id="GetRegionDataUrl" value="<?php echo url('Field/ajax_get_region_data'); ?>">
                    <input type="hidden" name="region_data[region_id]" id="RegionId" value="-1">
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label><em>*</em>默认值</label>
                    </dt>
                    <dd class="opt">
                        <textarea rows="5" cols="60" name="region_data[region_names]" id="region_names" readonly='readonly' placeholder="这里会自动区域选择之后的下级区域列表" style="height:110px; background-color: #f5f5f5;"></textarea>
                        <span class="err"></span>
                        <p class="notic">这里会自动区域选择之后的下级区域列表</p>
                    </dd>
                    <input type="hidden" name="region_data[region_ids]" id='region_ids' value='' style="width: 100%;">
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label>三级区域联动</label>
                    </dt>
                    <dd class="opt">
                        <div class="onoff">
                            <label for="SetType_1" class="cb-enable">是</label>
                            <input id="SetType_1" name="set_type" value="1" type="radio" onclick="change_set_type(this);">

                            <label for="SetType_0" class="cb-disable selected">否</label>
                            <input id="SetType_0" name="set_type" value="0" type="radio" onclick="change_set_type(this);">
                        </div>
                        &nbsp;
                        <span class="err"></span>
                        <p class="notic">是否开启三级联动</p>
                    </dd>
                </dl>
            </div>
            
            <dl class="row" id="dl_dfvalue">
                <dt class="tit">
                    <label id="label_dfvalue">默认值</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="60" id="dfvalue" name="dfvalue" placeholder="如果定义字段类型为下拉框、单选项、多选项时，此处填写被选择的项目(用“,”分开，如“男,女,人妖”)。" style="height:60px;"></textarea>
                    <span class="err"></span>
                    <p class="notic">1、如果定义字段类型为下拉框、单选项、多选项时，此处填写被选择的项目(用“,”分开，如“男,女,人妖”)。<br/>2、特殊符号会被过滤掉，比如：&、=、?等<br/>3、定义字段类型为多选项时，默认值最多为64项，超出则截取前64项</p>
                </dd>
            </dl>
            <dl class="row" id="dl_dfvalue_unit">
                <dt class="tit">
                    <label for="dfvalue_unit">数值单位</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="dfvalue_unit" id="dfvalue_unit" placeholder="比如：元、个、件等等" class="input-txt">
                    <p class="notic">比如：元、个、件等等</p>
                </dd>
            </dl>
            <dl class="row" id='IsRelease' <?php if($userConfig['users_open_release'] == '0'): ?> style="display: none;" <?php endif; ?>>
                <dt class="tit">
                    <label>应用于投稿</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="IsRelease_1" class="cb-enable">是</label>
                        <input id="IsRelease_1" name="is_release" value="1" type="radio">
                        
                        <label for="IsRelease_0" class="cb-disable selected">否</label>
                        <input id="IsRelease_0" name="is_release" value="0" type="radio">
                    </div>
                    &nbsp;
                    <span class="err"></span>
                    <p class="notic">是否应用于会员投稿中</p>
                </dd>
            </dl>
            <dl class="row" id='IsScreening' style="display: none;">
                <dt class="tit">
                    <label>应用于筛选</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="IsScreening_1" class="cb-enable">是</label>
                        <input id="IsScreening_1" name="is_screening" value="1" type="radio">

                        <label for="IsScreening_0" class="cb-disable selected">否</label>
                        <input id="IsScreening_0" name="is_screening" value="0" type="radio">
                        <input type="hidden" name="IsScreening_status" value="0">
                    </div>
                    &nbsp;
                    <span class="err"></span>
                    <p class="notic">是否应用于列表的条件筛选中</p>
                    <a id="call_tags_help" href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=7881&origin_eycms=1','筛选标签调用')" class="none">查看标签调用</a>
                </dd>
            </dl>

            <dl class="row">
                <dt class="tit">
                    <label>提示文字</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="remark" name="remark" placeholder="问号提示文字" style="height:60px;"></textarea>
                    <span class="err"></span>
                    <p class="notic">问号提示文字</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="title" id="select_title">指定栏目</label>
                </dt>
                <dd class="opt">
                    <select name="typeids[]" id="typeid" style="width: 300px;" size="15" multiple="true">
                        <option value="0" selected="false">—指定所有栏目—</option>
                        <?php echo $select_html; ?>
                    </select>
                    <span class="err"></span>
                    <p class="red">(按 Ctrl 可以进行多选)</p>
                </dd>
            </dl>
<!--             <dl class="row">
                <dt class="tit">
                    <label for="sort_order">排序</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="100" name="sort_order" id="sort_order" class="input-txt">
                    <p class="notic">越小越靠前</p>
                </dd>
            </dl> -->
        </div>
        <!-- 常规选项 -->
        <div class="ncap-form-default">
            <div class="bot">
                <?php if(empty($type)): ?>
                <input type="hidden" name="channel_id" id="channel_id" value="<?php echo (isset($channel_id) && ($channel_id !== '')?$channel_id:''); ?>">
                <?php endif; ?>
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">
    function change_set_type(obj) {
        var val = $(obj).val();
        if (1 == val) {
            // $("#IsScreening_1").prop('checked',false);
            // $("#IsScreening_0").prop('checked',true);
            // $("#IsScreening").find('label').eq(1).removeClass('selected');
            // $("#IsScreening").find('label').eq(2).addClass('selected');
            // $("#IsScreening").hide();
            $("#call_tags_help").hide();
        }else{
            // $("#IsScreening").show();
        }
    }

    $(function(){
        if (0 == $('#RegionId').val() || -1 == $('#RegionId').val()) {
            $('#CityId').hide();
        }

        var screening_value = $('input:radio[name="is_screening"]:checked').val();
        $('#IsScreening_'+screening_value).click();

        $('input[name=dtype]').click(function(){
            dtype_change(this);
        });

        function dtype_change(obj) {
            var dtype = $(obj).val();
            var ifoption = $(obj).data('ifoption');
            if (0 <= $.inArray(dtype, ['datetime','switch','img','imgs','file','media'])) {
                $('#dl_dfvalue').hide();
                ClearAreaData();
            } else if ('region' == dtype) {
                $('#region_div').show();
                $('#dl_dfvalue').hide();
            } else {
                $('#dl_dfvalue').show();
                ClearAreaData();
            }
            if (1 == ifoption) {
                $('#label_dfvalue').html('<em>*</em>默认值');
            } else {
                $('#label_dfvalue').html('默认值');
            }
            if (0 <= $.inArray(dtype, ['region','checkbox','radio','select'])) {
                $('#IsScreening').show();
                $('input[name=IsScreening_status]').val(1);
            } else {
                $('#IsScreening').hide();
                $('input[name=IsScreening_status]').val(0);
                $('#select_title').html('指定栏目');
            }
            if (0 <= $.inArray(dtype, ['text','int','float','decimal'])) {
                $('#dl_dfvalue_unit').show();
            } else {
                $('#dl_dfvalue_unit').hide();
            }
        }
    });

    // 当切换其他类型时清空所有关于区域选择的数据
    function ClearAreaData(){
        $('#region_div').hide();
        $('#RegionId').val('');
        $('#region_dfvalue').empty();
    }

    // 获取联动地址
    function GetRegionData(t,type){
        var parent_id = $(t).val();
        if(!parent_id){
            return false;
        }
        
        var url = $('#GetRegionDataUrl').val();
        $.ajax({
            url: url,
            data: {parent_id:parent_id,_ajax:1},
            type:'post',
            dataType:'json',
            success:function(res){
                // 判断是否隐藏第二级地区选择栏
                if (0 <= $.inArray(parent_id, res.parent_array)) {
                    $('#CityId').hide();
                }else{
                    $('#CityId').show();
                }
                // 加载城市名称数据到textarea
                $('#region_names').empty().html(res.region_names);
                // 加载城市ID数据到input
                $('#region_ids').val(res.region_ids);
                // 加载ID到input
                $('#RegionId').val(parent_id);
                // 输出下一级栏目选项
                if ('province' == type) {
                    res = '<option value='+parent_id+'>请选择</option>'+ res.region_html;
                    $('#city').empty().html(res);
                }
            },
            error : function(e) {
                layer.closeAll();
                layer.alert(e.responseText, {icon: 5});
            }
        });
    }

    $('#IsScreening_1').click(function(){
        $('#select_title').html('<em>*</em>指定栏目');
        $('#typeid').find('option:first').attr('disabled', true).css('display', 'none');
        $('#call_tags_help').show();
    });

    $('#IsScreening_0').click(function(){
        $('#select_title').html('指定栏目');
        $('#typeid').find('option:first').attr('disabled', false).css('display', '');
        $('#call_tags_help').hide();
    });

    var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
    function check_submit(){
        if($('input[name="title"]').val() == ''){
            showErrorMsg('字段标题不能为空！');
            $('input[name=title]').focus();
            return false;
        }
        var name = $('input[name="name"]').val();
        var ret1 = /^[_]+$/;
        var ret2 = /^[\w]+$/;
        var ret3 = /^[0-9]+$/;
        if (ret1.test(name) || !ret2.test(name)) {
            showErrorMsg('字段名称格式不正确！');
            $('input[name=name]').focus();
            return false;
        } else if (ret3.test(name)) {
            showErrorMsg('字段名称不能纯数字！');
            $('input[name=name]').focus();
            return false;
        }
        if($('input[name=dtype]:checked').val() == ''){
            showErrorMsg('请选择字段类型！');
            $('input[name=dtype]').focus();
            return false;
        } else if ('region' == $('input[name=dtype]:checked').val()){
            if (-1 == $('#RegionId').val()) {
                showErrorMsg('请选择区域范围！');
                $('#province').focus();
                return false;
            }
        } else {
            var ifoption = $('input[name=dtype]:checked').data('ifoption');
            if (1 == ifoption) {
                if ($.trim($('#dfvalue').val()) == '') {
                    showErrorMsg('默认值不能为空！');
                    $('#dfvalue').focus();
                    return false;
                }
                var tag = '|';
                if($('#dfvalue').val().indexOf(tag) != -1){
                    showErrorMsg('默认值不能输入 | 符号！');
                    $('#dfvalue').focus();
                    return false;
            　　}
            }
            
            if (0 <= $.inArray($('input[name=dtype]:checked').val(), ['radio','checkbox','select'])) {
                var dfvalue = $.trim($('#dfvalue').val());
                data = dfvalue.split(',');
                for(var i = 0;i < data.length ;i++) {
                    for(var j = i+1;j < data.length;j++) {
                        if ($.trim(data[i]) == $.trim(data [j])){
                            showErrorMsg('默认值不能含有相同的值！');
                            $('#dfvalue').focus();
                            return false;
                        }
                    }
                }
                if (0 <= $.inArray($('input[name=dtype]:checked').val(), ['checkbox'])) {
                    if (64 < data.length) {
                        showErrorMsg('默认值最多填写64项！');
                        $('#dfvalue').focus();
                        return false;
                    }
                }
            }
        }
        if (0 >= parseInt($('#typeid').find('option:selected').length)) {
            showErrorMsg('请选择指定栏目！');
            $('#typeid').focus();
            return false;
        }

        // 字段应用于筛选时，指定栏目必须指定一个或多个栏目
        if (1 == parseInt($('input:radio[name="is_screening"]:checked').val())) {
            if (0 == parseInt($('#typeid').find('option:selected').val())) {
                if (1 >= $('#typeid').val().length) {
                    showErrorMsg('字段应用于筛选时，栏目必须指定一个或多个！');
                    $('#typeid').focus();
                    return false;
                }
            }
        }
        
        layer_loading('正在处理');
        $.ajax({
            type : 'post',
            url : "<?php echo url('Field/channel_add', ['_ajax'=>1]); ?>",
            data : $('#post_form').serialize(),
            dataType : 'json',
            success : function(res){
                layer.closeAll();
                if(res.code == 1){
                    var _parent = parent;
                    _parent.layer.close(parentObj);
                    _parent.layer.msg(res.msg, {shade: layer_shade, time: 1000}, function(){
                        _parent.window.location.reload();
                    });
                }else{
                    showErrorMsg(res.msg);
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(e.responseText, {icon: 5, title:false});
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