<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:58:"./application/admin/template/guestbook/attribute_index.htm";i:1689865662;s:62:"/data/user/htdocs/application/admin/template/public/layout.htm";i:1689865671;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;s:60:"/data/user/htdocs/application/admin/template/public/page.htm";i:1689865671;s:62:"/data/user/htdocs/application/admin/template/public/footer.htm";i:1689865670;}*/ ?>
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

<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="box-shadow:none;">
    <!-- <div class="fixed-bar">
        <div class="item-title">
            <a class="back_xin" href="javascript:history.back();" title="返回"><i class="iconfont e-fanhui"></i></a>
            
            <ul class="tab-base nc-row">
                <li><a href="<?php echo url('Arctype/edit', ['id'=>\think\Request::instance()->param('typeid'), 'tab'=>1]); ?>" data-index='1' class="tab"><span>常规选项</span></a></li>
                <li><a href="<?php echo url('Arctype/edit', ['id'=>\think\Request::instance()->param('typeid'), 'tab'=>2]); ?>" data-index='2' class="tab"><span>高级选项</span></a></li>
                <li><a href="<?php echo url('Guestbook/attribute_index', array('typeid'=>\think\Request::instance()->param('typeid'), 'tab'=>$tab)); ?>" data-index='3' class="tab <?php if($tab == '3'): ?>current<?php endif; ?>"><span>属性列表</span></a></li>
            </ul>
        </div>
    </div> -->
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <?php if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@attribute_add') == '1'): ?>
                <div class="fbutton">
                    <a href="javascript:void(0);" data-href="<?php echo url('Guestbook/attribute_add', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>" onclick="openFullframe(this, '新增留言属性', '80%', '80%');">
                        <div class="add">
                            <span><i class="layui-icon layui-icon-addition"></i>新增属性</span>
                        </div>
                    </a>
                </div>
                <?php endif; endif; ?>
            </div>
            <form id="searchForm" class="navbar-form form-inline" action="<?php echo url('Guestbook/attribute_index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">  
                        <?php if($typeidNum > '1'): ?>
                        <select name="typeid" class="select" style="margin:0px 5px;">
                            <option value="">--全部栏目--</option>
                            <?php echo (isset($select_html) && ($select_html !== '')?$select_html:''); ?>
                        </select>
                        <?php endif; ?>
                    </div>
                    <div class="sDiv2">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="名称搜索...">
                        <input type="submit" class="btn" value="搜索">
                        <i class="iconfont e-sousuo"></i>
                    </div>
                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <?php if($main_lang == $admin_lang): ?>
                        <th class="sign w40" axis="col0">
                            <div class="tc"><input type="checkbox" autocomplete="off" class="checkAll"></div>
                        </th>
                        <?php endif; ?>
                        <th abbr="article_title" axis="col3" class="w40">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="">
                            <div style="text-align: left; padding-left: 10px;" class="">属性标题</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">属性类型</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">所属栏目</div>
                        </th>
                        <th abbr="article_title" axis="col3"  class="w100">
                            <div class="tc">后台列表显示</div>
                        </th>
                        <th axis="col1" class="w180">
                            <div class="tc">操作</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table>
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <div class="no_row">
                                    <div class="no_pic"><img src="/public/static/admin/images/null-data.png"></div>
                                </div>
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <tr>
                            <?php if($main_lang == $admin_lang): ?>
                            <td class="sign">
                                <div class="tc w40">
                                    <input type="checkbox" autocomplete="off" name="ids[]" value="<?php echo $vo['attr_id']; ?>">

                                </div>
                            </td>
                            <?php endif; ?>
                            <td class="sort">
                                <div class="tc w40">
                                    <?php echo $vo['attr_id']; ?>
                                </div>
                            </td>
                            <td style="width: 100%">
                                <div style="text-align: left; padding-left: 10px;">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@attribute_edit') == '1'): ?>
                                    <a href="<?php echo url('Guestbook/attribute_edit',array('id'=>$vo['orgin_attr_id'])); ?>"><?php echo $vo['attr_name']; ?></a>
                                    <?php else: ?>
                                    <?php echo $vo['attr_name']; endif; ?>
                                </div>
                            </td>
                            <td align="center" class="">
                                <div class="w100 tc">
                                    <?php echo (isset($attrInputTypeArr[$vo['attr_input_type']]) && ($attrInputTypeArr[$vo['attr_input_type']] !== '')?$attrInputTypeArr[$vo['attr_input_type']]:''); ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc"><?php echo (isset($vo['typename']) && ($vo['typename'] !== '')?$vo['typename']:'<i class="red">数据出错！</i>'); ?></div>
                            </td>
                            <td>
                                <div class="tc w100">
                                    <?php if($vo['is_showlist'] == 1): ?>
                                    <span class="yes" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('guestbook_attribute','attr_id','<?php echo $vo['orgin_attr_id']; ?>','is_showlist',this);"<?php endif; ?> ><i class="fa fa-check-circle"></i>是</span>
                                    <?php else: ?>
                                    <span class="no" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('guestbook_attribute','attr_id','<?php echo $vo['orgin_attr_id']; ?>','is_showlist',this);"<?php endif; ?> ><i class="fa fa-ban"></i>否</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="operation">
                                <div class="w180 tc">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@attribute_edit') == '1'): ?>
                                    <a href="javascript:void(0);" data-href="<?php echo url('Guestbook/attribute_edit',array('id'=>$vo['attr_id'])); ?>" class="btn blue" onclick="openFullframe(this, '编辑留言属性 ', '80%', '80%');">编辑</a>
                                    <i></i>
                                    <?php endif; if(is_check_access(CONTROLLER_NAME.'@attribute_del') == '1'): if($main_lang == $admin_lang): ?>
                                    <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Guestbook/attribute_del'); ?>" data-id="<?php echo $vo['attr_id']; ?>" <?php if($recycle_switch == '1'): ?> data-deltype="del" <?php else: ?> data-deltype="pseudo" <?php endif; ?> onClick="delfun(this);">删除</a>
                                    <i></i>
                                    <?php endif; endif; ?>
                                    <a class="btn blue" href="javascript:void(0);" onclick="copyToClipBoard('<?php echo $vo['fieldname']; ?>', '<?php echo $vo['attr_id']; ?>', <?php echo (isset($vo['attr_input_type']) && ($vo['attr_input_type'] !== '')?$vo['attr_input_type']:'0'); ?>)">标签调用</a>
                                </div>
                            </td>
                           
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <?php if($main_lang == $admin_lang): ?>
                <div class="fbutton checkboxall">
                    <input type="checkbox" autocomplete="off" class="checkAll">
                </div>
                <?php if(is_check_access(CONTROLLER_NAME.'@attribute_del') == '1'): ?>
                <div class="fbutton">
                    <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('Guestbook/attribute_del'); ?>" <?php if($recycle_switch == '1'): ?> data-deltype="del" <?php else: ?> data-deltype="pseudo" <?php endif; ?> class="layui-btn layui-btn-primary">
                        <span>批量删除</span>
                    </a>
                </div>
                <?php endif; endif; ?>
                <div class="fbuttonr">
    <div class="pages">
       <?php echo $page; ?>
    </div>
</div>
<div class="fbuttonr">
    <div class="total">
        <h5>共有<?php echo (isset($pager->totalRows) && ($pager->totalRows !== '')?$pager->totalRows:0); ?>条,每页显示
            <select name="pagesize" style="width: 60px;" onchange="ey_selectPagesize(this);">
                <option <?php if($pager->listRows == 20): ?> selected <?php endif; ?> value="20">20</option>
                <option <?php if($pager->listRows == 50): ?> selected <?php endif; ?> value="50">50</option>
                <option <?php if($pager->listRows == 100): ?> selected <?php endif; ?> value="100">100</option>
                <option <?php if($pager->listRows == 200): ?> selected <?php endif; ?> value="200">200</option>
            </select>
        </h5>
    </div>
</div>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('input[name*=ids]').click(function(){
            if ($('input[name*=ids]').length == $('input[name*=ids]:checked').length) {
                $('.checkAll').prop('checked','checked');
            } else {
                $('.checkAll').prop('checked', false);
            }
        });
        $('input[type=checkbox].checkAll').click(function(){
            $('input[type=checkbox]').prop('checked',this.checked);
        });
    });
    
    $(document).ready(function(){

        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        $('#searchForm select[name=typeid]').change(function(){
            $('#searchForm').submit();
        });
    });

    /**
     * 代码调用js
     * @param id  id
     * @param limit 条数
     */
    function copyToClipBoard(fieldname, attr_id, attr_input_type) {
        if ($.inArray(attr_input_type, [0,6,7]) > -1) { // 单行文本\Email邮箱\手机号码
            var liststr = "<input type='text' id='"+fieldname+"' name='{$"+"field."+fieldname+"}'>";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><input type="text" style="width:400px;" value="' + liststr + '" /></dd>';
            height = '250px';
        } 
        else if (1 == attr_input_type) { // 下拉框
            var liststr = "<select name='{$"+"field."+fieldname+"}' id='"+fieldname+"'>\r\n    <option value='无'>无</option>\r\n    {eyou:volist name='$"+"field.options_"+attr_id+"' id='vo'}\r\n        <option value='{$"+"vo.value}'>{$"+"vo.value}</option>\r\n    {/eyou:volist"+"}\r\n</select>";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><textarea rows="4" cols="60" style="width:400px;height:110px;">' + liststr + '</textarea></dd>';
            height = '330px';
        } 
        else if (2 == attr_input_type) { // 多行文本
            var liststr = "<textarea id='"+fieldname+"' name='{$"+"field."+fieldname+"}'></textarea>";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><input type="text" style="width:400px;" value="' + liststr + '" /></dd>';
            height = '300px';
        } 
        else if (3 == attr_input_type) { // 单选框
            var liststr = "{eyou:volist name='$"+"field.options_"+attr_id+"' id='vo'}\r\n    <label><input type='radio' id='"+fieldname+"' name='{$"+"field."+fieldname+"}' value='{$"+"vo.value}'>{$"+"vo.value}</label>\r\n{/eyou:volist"+"}";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><textarea rows="4" cols="60" style="width:400px;height:80px;">' + liststr + '</textarea></dd>';
            height = '300px';
        } 
        else if (4 == attr_input_type) { // 多选框
            var liststr = "{eyou:volist name='$"+"field.options_"+attr_id+"' id='vo'}\r\n    <label><input type='checkbox' name='{$"+"field."+fieldname+"}' value='{$"+"vo.value}'>{$"+"vo.value}</label>\r\n{/eyou:volist"+"}";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><textarea rows="4" cols="60" style="width:400px;height:80px;">' + liststr + '</textarea></dd>';
            height = '300px';
        } 
        else if (5 == attr_input_type) { // 上传图片
            var liststr = "<input type='file' name='{$"+"field."+fieldname+"}' value='' accept='image/*'>";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><input type="text" style="width:400px;" value="' + liststr + '" /></dd>';
            contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color:red; ">特别注意：请在前台模板的留言标签里追加 {$'+'field.formhidden} 到 &lt;form  &gt;表单里，<a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('+"'https://www.eyoucms.com/plus/view.php?aid=8378&origin_eycms=1','单张图教程说明'"+')">详细说明</a>。</dd>'
            height = '300px';
        }
        else if (8 == attr_input_type) { // 上传附件
            var liststr = "<input type='file' name='{$"+"field."+fieldname+"}' value=''>";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><input type="text" style="width:400px;" value="' + liststr + '" /></dd>';
            contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color:red; ">特别注意：请在前台模板的留言标签里追加 {$'+'field.formhidden} 到 &lt;form  &gt;表单里。</dd>'
            height = '300px';
        }else if(11 == attr_input_type){   //多张图
            var liststr = "<input type='file' name='{$"+"field."+fieldname+"}' multiple accept='image/*' value=''>";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><input type="text" style="width:400px;" value="' + liststr + '" /></dd>';
            contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color:red; ">特别注意：请在前台模板的留言标签里追加 {$'+'field.formhidden} 到 &lt;form  &gt;表单里。</dd>'
            height = '300px';
        }else if (9 == attr_input_type) { // 区域联动
            var liststr = "<!--一级-->\n<select {$"+"field.first_id_"+attr_id+"}>\r\n    <option value=''>请选择</option>\r\n    {eyou:volist name='$"+"field.options_"+attr_id+"' id='vo'}\r\n        <option value='{$"+"vo.id}'>{$"+"vo.name}</option>\r\n    {/eyou:volist"+"}\r\n</select>\n"+
                "<!--二级-->\n<select {$"+"field.second_id_"+attr_id+"}></select>\n" +
                "<!--三级-->\n<select {$"+"field.third_id_"+attr_id+"}></select>\n" +
                "{$"+"field.hidden_"+attr_id+"}";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><textarea rows="4" cols="60" style="width:400px;height:180px;">' + liststr + '</textarea></dd>';
            contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color:red; ">特别注意：请在前台模板的留言标签里追加 {$'+'field.hidden_'+attr_id+'} 到 &lt;form&gt;表单里。</dd>';
            height = '460px';
        }else if (10 == attr_input_type) { // 时间
            var liststr = "<input type=\"text\" name='{$"+"field."+fieldname+"}' id='{$"+"field."+fieldname+"}' placeholder='{$"+"field.itemname_"+attr_id+"}' autocomplete=\"off\">\n\n" +
                "{"+"eyou:static file='/public/plugins/laydate-v5.3.1/laydate.js' /}\n" +
                "<script type='text/javascript'>\n" +
                "    laydate.render({\n" +
                "       elem: '#{$"+"field."+fieldname+"}'\n" +
                "       ,type: 'datetime'\n" +
                "    });\n" +
                "<"+"/script>";
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>';
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>';
            contentdiv += '<dd>表单调用代码：</dd>';
            contentdiv += '<dd><textarea rows="4" cols="60" style="width:400px;height:180px;">' + liststr + '</textarea></dd>';
            contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color:red; ">特别注意：在弹窗表单里，可能遇到日期插件无法使用，请自行更换其他日期插件处理，谢谢。</dd>';
            height = '470px';
        }else {
            var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px;"><dd>属性名称：</dd>'
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.itemname_'+attr_id+'}"></dd>'
            contentdiv += '<dd>属性名称：</dd>'
            contentdiv += '<dd><input type="text" style=" width:400px;margin-bottom:10px;" value="{$'+'field.'+fieldname+'}"></dd>'
            height = '250px';
        }
        contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color: #F60;">请将相应标签复制并粘贴到对应模板文件中！</dd></dl></div>'
        layer.open({
            shade: layer_shade,
            title: '标签调用',
            type: 1,
            skin: 'layui-layer-demo',
            area: ['480px', height], //宽高
            content: contentdiv
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