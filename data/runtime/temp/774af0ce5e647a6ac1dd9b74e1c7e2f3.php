<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"./application/admin/template/guestbook/attribute_add.htm";i:1689865662;s:62:"/data/user/htdocs/application/admin/template/public/layout.htm";i:1689865671;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;s:62:"/data/user/htdocs/application/admin/template/public/footer.htm";i:1689865670;}*/ ?>
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
<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="box-shadow:none;">
    <form class="form-horizontal" id="post_form" action="<?php echo url('Guestbook/attribute_add'); ?>" method="post" onsubmit="return false;">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="typeid"><em>*</em>所属栏目</label>
                </dt>
                <dd class="opt"> 
                    <?php if(empty($typeid) || (($typeid instanceof \think\Collection || $typeid instanceof \think\Paginator ) && $typeid->isEmpty())): ?>
                    <select name="typeid" id="typeid" onchange="showlist(this)">
                        <option value="0">请选择栏目…</option>
                        <?php echo $select_html; ?>
                    </select>
                    <?php else: ?>
                    <?php echo $select_html; ?>
                    <input type="hidden" name="typeid" id="typeid" value="<?php echo (isset($typeid) && ($typeid !== '')?$typeid:''); ?>">
                    <?php endif; ?>
                    <span class="err" id="err_typeid" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="ac_name"><em>*</em>属性名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="attr_name" value="" id="attr_name" class="input-txt" autocomplete="off">
                    <span class="err" id="err_attr_name" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="attr_input_type"><em>*</em>属性类型</label>
                </dt>
                <dd class="opt">
                    <?php if(is_array($attrInputTypeArr) || $attrInputTypeArr instanceof \think\Collection || $attrInputTypeArr instanceof \think\Paginator): $i = 0; $__LIST__ = $attrInputTypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div style="width: 150px; float: left;">
                            <label><input type="radio" name="attr_input_type" value="<?php echo $key; ?>" <?php if($i == '1'): ?> checked="checked" <?php endif; ?>><?php echo $vo; ?></label>&nbsp;
                        </div>
                        <?php if($i % 4 == 0): ?><br/><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    <span class="err" id="err_attr_input_type" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                    <p class="none red" id="validate_type"><br/>前台表单输入框的格式验证标签调用，<a href="javascript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=8973&origin_eycms=1','标签调用');">请点击这里查看教程</a></p>
                </dd>
            </dl>
            <dl class="row none attr_input_type2">
                <dt class="tit">
                    <label for="attr_values"><em>*</em>可选值列表</label>
                </dt>
                <dd class="opt">
                    <textarea rows="10" cols="30" name="attr_values" id="attr_values" class="input-txt" style="height:100px;" placeholder="一行代表一个可选值" onkeyup="this.value=this.value.replace(/[\|]/g,'');" onpaste="this.value=this.value.replace(/[\|]/g,'');"></textarea>
                    <span id="err_attr_values" class="err" style="color:#F00; display:none;"></span>
                    <p class="notic">一行代表一个可选值</p>
                </dd>
            </dl>
            <dl class="row none" id="show_list">
                <dt class="tit">
                    <label>后台列表显示</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="is_showlist1" id="is_showlist1_label" class="cb-enable" data-is_showlist="1" onclick="ajax_attribute_show(this);">显示</label>
                        <input id="is_showlist1" name="is_showlist" value="1" type="radio">

                        <label for="is_showlist0" id="is_showlist0_label" class="cb-disable selected" data-is_showlist="0" onclick="ajax_attribute_show(this);">隐藏</label>
                        <input id="is_showlist0" name="is_showlist" value="0" type="radio" checked="checked">
                    </div>
                    &nbsp;
                    <span class="err"></span>
                    <p class="notic">默认在列表显示前4个字段，全部字段可点击查看</p>
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
                        <textarea rows="5" cols="60" name="region_data[region_names]" id="region_names" readonly='readonly' placeholder="这里会自动区域选择之后的下级区域列表" style="height:110px; background-color: #f5f5f5;"><?php echo $region['region_names']; ?></textarea>
                        <span class="err"></span>
                        <p class="notic">这里会自动区域选择之后的下级区域列表</p>
                    </dd>
                    <input type="hidden" name="region_data[region_ids]" id='region_ids' value='<?php echo $region['region_ids']; ?>' style="width: 100%;">
                </dl>
            </div>
            <dl class="row">
                <dt class="tit">
                    <label>前台必填</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="required1" class="cb-enable" >是</label>
                        <input id="required1" name="required" value="1" type="radio">

                        <label for="required0" class="cb-disable selected">否</label>
                        <input id="required0" name="required" value="0" type="radio" checked="checked">
                    </div>
                    &nbsp;
                    <span class="err"></span>
                    <p class="notic">用于控制前台用户提交是否必填验证</p>
                </dd>
            </dl>
            <dl class="row" id="realValidate" style="display: none;">
                <dt class="tit"> <label>真实验证</label> </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="real_validate1" class="cb-enable" >是</label>
                        <input id="real_validate1" name="real_validate" value="1" type="radio">
                        <label for="real_validate0" class="cb-disable selected">否</label>
                        <input id="real_validate0" name="real_validate" value="0" type="radio" checked="checked">
                    </div>
                    &nbsp;
                    <span class="err"></span>
                    <p class="notic">用于控制前台用户提交的内容是否进行真实验证</p>
                    <p style="line-height: 1;" class="red <?php if(!in_array($field['attr_input_type'], [6,7])): ?> none <?php endif; ?>" id="real_validate_type"><br/>前台表单手机验证码调用标签，<a href="javascript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=28608&origin_eycms=1','标签调用');">请点击这里查看教程</a></p>
                </dd>
            </dl>
            <div class="bot">
                <a href="JavaScript:void(0);" onclick="check_submit('post_form');"  class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        if (0 == $('#RegionId').val() || -1 == $('#RegionId').val()) {
            $('#CityId').hide();
        }

        $('input[name=attr_input_type]').click(function(){
            var val = parseInt($(this).val());
            $('#validate_type').hide();
            $('#real_validate_type').hide();
            $('#realValidate').hide();
            if (-1 < $.inArray(val, [1,3,4])) {
                $('.attr_input_type2').show();
            } else {
                $('.attr_input_type2').hide();
                if (-1 < $.inArray(val, [6,7])) {
                    $('#validate_type').show();
                    $('#real_validate_type').show();
                    // 如果点击的是手机号码字段则执行
                    if (val == 6) $('#realValidate').show();
                }
            }
            if (9 == val) {
                $('#region_div').show();
                $('#dl_dfvalue').hide();
            } else {
                $('#dl_dfvalue').show();
                ClearAreaData();
            }
        });
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
                // 输出下一级城市选项
                if ('province' == type) {
                    res = '<option value='+parent_id+'>请选择</option>'+ res.region_html;
                    $('#city').empty().html(res);
                }
            },
            error : function(e) {
                layer.closeAll();
                showErrorAlert(e.responseText);
            }
        });
    }
    var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
    /**
    * ajax 提交属性 到后台去验证然后回到前台提示错误
    * 验证通过后,再通过 form 自动提交
    */
    function check_submit(form_id)
    {
        if ($('#typeid').val() == 0) {
            showErrorMsg('请选择栏目…！');
            $('#typeid').focus();
            return false;
        }
        if($.trim($('input[name=attr_name]').val()) == ''){
            showErrorMsg('属性名称不能为空！');
            $('input[name=attr_name]').focus();
            return false;
        }
        var attr_input_type = parseInt($('input[name=attr_input_type]:checked').val());
        if (-1 < $.inArray(attr_input_type, [1,3,4]) && $.trim($('#attr_values').val()) == '') {
            showErrorMsg('可选值列表不能为空！');
            $('#attr_values').focus();
            return false;
        }

        layer_loading('正在处理');
        $.ajax({
            type : "POST",
            url  : "<?php echo url('Guestbook/attribute_add', ['_ajax'=>1]); ?>",
            data : $('#'+form_id).serialize(),// 你的formid
            dataType: "JSON",
            success: function(res) {
                layer.closeAll();
                if(res.status == 1)
                {
                    var _parent = parent;
                    _parent.layer.close(parentObj); 
                    if(res.hasOwnProperty('data')){
                        if(res.data.hasOwnProperty('url')){
                            _parent.layer.msg(res.msg, {shade: layer_shade, time: 1000}, function(){
                                _parent.gourl(res.data.url);
                            });
                        }else{
                            _parent.layer.msg(res.msg, {shade: layer_shade, time: 1000}, function(){
                                _parent.window.location.reload();
                            });
                        }
                    }else{
                        _parent.layer.msg(res.msg, {shade: layer_shade, time: 1000}, function(){
                            _parent.window.location.reload();
                        });
                    }
                    return true;
                } else {
                    showErrorMsg(res.msg);
                    return false;
                }
            },
            error: function(e) {
                layer.closeAll();
                showErrorAlert(e.responseText);
                return false;
            }
        });
    }

    function showlist(obj) {
        if ($(obj).val() == 0) {
            $("#show_list").hide();
        } else {
            $("#show_list").show();
        }
    }

    function ajax_attribute_show(obj) {
        var is_showlist = $(obj).attr('data-is_showlist');
        var typeid = $('#typeid').val();
        if (typeid == 0) {
            showErrorMsg('请选择栏目…！');
            $('#typeid').focus();
            return false;
        }
        $.ajax({
            type : 'post',
            url : "<?php echo url('Field/ajax_attribute_show'); ?>",
            data : {typeid:typeid,is_showlist:is_showlist, _ajax:1},
            dataType : 'json',
            success : function(res){
                if (res.code != 1) {
                    $('#is_showlist1_label').removeClass('selected');
                    $('#is_showlist0_label').addClass('selected');//添加一个class
                    $("input:radio[name=is_showlist]").eq(0).attr("checked",false);
                    $("input:radio[name=is_showlist]").eq(1).attr("checked",true);
                    showErrorAlert(res.msg);
                }
            },
            error:function(e){
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