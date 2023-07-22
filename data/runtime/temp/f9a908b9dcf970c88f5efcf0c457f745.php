<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:48:"./application/admin/template/guestbook/index.htm";i:1689865662;s:62:"/data/user/htdocs/application/admin/template/public/layout.htm";i:1689865671;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;s:60:"/data/user/htdocs/application/admin/template/public/page.htm";i:1689865671;s:62:"/data/user/htdocs/application/admin/template/public/footer.htm";i:1689865670;}*/ ?>
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

<body class="bodysy-w">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div  id="page_div"  class="page" style="margin-top: 15px;min-width: auto;box-shadow:none;">
    <div class="flexigrid" <?php if(\think\Request::instance()->param('archives') == '1'): ?>style="margin-top: 0px;"<?php endif; ?>>
        <div class="mDiv" <?php if(\think\Request::instance()->param('archives') == '1'): ?>style="padding: 5px 0px;"<?php endif; ?>>
            <div class="ftitle">
                <?php if(is_check_access('Guestbook@ajax_excel_export') == '1'): ?>
                <div class="fbutton">

                    <?php if(\think\Request::instance()->param('typeid') > 0): ?>
                    <a href="javascript:void(0);" onclick="excel_export(this, 'ids');" data-url="<?php echo url('Guestbook/ajax_excel_export'); ?>">
                        <div class="add">
                            <span><i class="fa fa-reply"></i>导出Excel</span>
                        </div>
                    </a>
                    <?php else: ?>
                    <a href="javascript:void(0);" onclick="showErrorMsg('请指定所属栏目！');">
                        <div class="add">
                            <span><i class="fa fa-reply"></i>导出Excel</span>
                        </div>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <form class="navbar-form form-inline" action="<?php echo url('Guestbook/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">
                        <input type="text" name="add_time_begin" id="add_time_begin" value="<?php echo \think\Request::instance()->param('add_time_begin'); ?>" class="qsbox" autocomplete="off" placeholder="起始日期">
                    </div>
                    &nbsp;至&nbsp;
                    <div class="sDiv2">
                        <input type="text" name="add_time_end" id="add_time_end" value="<?php echo \think\Request::instance()->param('add_time_end'); ?>" class="qsbox" autocomplete="off" placeholder="结束日期">
                    </div>
                    <div class="sDiv2">
                        <input type="hidden" name="typeid" id="typeid" value="<?php echo (\think\Request::instance()->param('typeid') ?: ''); ?>">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="模糊搜索...">
                        <input type="submit" class="btn" value="搜索">
                        <i class="iconfont e-sousuo"></i>
                    </div>

                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc w40"><input type="checkbox" autocomplete="off" class="checkAll"></div>
                        </th>
                        <th abbr="article_show" axis="col5" class="w50">
                            <div class="tc">ID</div>
                        </th>
                        <?php if(is_array($tab_list) || $tab_list instanceof \think\Collection || $tab_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;if($i <= 4): if($i == 1): ?>
                                <th abbr="ac_id" axis="col4">
                                    <div class="text-l10"><?php echo $vo1['attr_name']; ?></div>
                                </th>
                                <?php else: ?>
                                <th abbr="article_show" axis="col5" class="w150">
                                    <div class="tc"><?php echo $vo1['attr_name']; ?></div>
                                </th>
                                <?php endif; endif; endforeach; endif; else: echo "" ;endif; if(empty($tab_list) || (($tab_list instanceof \think\Collection || $tab_list instanceof \think\Paginator ) && $tab_list->isEmpty())): ?>
                            <th abbr="ac_id" axis="col4">
                                <div class="text-l10">所属栏目</div>
                            </th>
                        <?php else: ?>
                            <th abbr="article_time" axis="col6" class="w100">
                                <div class="tc">所属栏目</div>
                            </th>
                        <?php endif; ?>

                        <th abbr="article_time" axis="col6" class="w50">
                            <div class="tc">查阅</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w160">
                            <div class="tc">新增时间</div>
                        </th>
                        <th axis="col1" class="w120">
                            <div class="tc">操作</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%;">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <div class="no_row">
                                    <div class="no_pic"><img src="/public/static/admin/images/null-data.png"></div>
                                </div>
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr>
                            <td class="sign">
                                <div class="w40 tc"><input type="checkbox" autocomplete="off" name="ids[]" value="<?php echo $vo['aid']; ?>"></div>
                            </td>
                            <td class="sort">
                                <div class="w50 tc">
                                    <?php echo $vo['aid']; ?>
                                </div>
                            </td>
                            <?php $__FOR_START_1578904289__=0;$__FOR_END_1578904289__=count($tab_list);for($i=$__FOR_START_1578904289__;$i < $__FOR_END_1578904289__;$i+=1){ if($i < 4): if($i == 0): ?>
                                    <td style="width: 100%">
                                        <div class="text-l10">
                                            <?php echo $vo['attr_list'][$i]['attr_value']; ?>
                                        </div>
                                    </td>
                                    <?php else: ?>
                                    <td class="">
                                        <div class="w150 tc">
                                            <?php echo $vo['attr_list'][$i]['attr_value']; ?>
                                        </div>
                                    </td>
                                    <?php endif; endif; } if(empty($tab_list) || (($tab_list instanceof \think\Collection || $tab_list instanceof \think\Paginator ) && $tab_list->isEmpty())): ?>
                                <td style="width: 100%">
                                    <div class="text-l10">
                                        <a href="<?php echo url('Guestbook/index', ['typeid'=>$vo['typeid']]); ?>"><?php echo (isset($vo['typename']) && ($vo['typename'] !== '')?$vo['typename']:'<i class="red">数据出错！</i>'); ?></a>
                                    </div>
                                </td>
                            <?php else: ?>
                                <td class="">
                                    <div class="w100 tc">
                                        <a href="<?php echo url('Guestbook/index', ['typeid'=>$vo['typeid']]); ?>"><?php echo (isset($vo['typename']) && ($vo['typename'] !== '')?$vo['typename']:'<i class="red">数据出错！</i>'); ?></a>
                                    </div>
                                </td>
                            <?php endif; ?>

                            <td class="">
                                <div class="w50 tc" id="td_is_read_<?php echo $vo['aid']; ?>">
                                    <?php if($vo['is_read'] == '1'): ?>
                                        已读
                                    <?php else: ?>
                                        <font color="red">未读</font>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w160 tc">
                                    <?php echo date('Y-m-d H:i:s',$vo['add_time']); ?>
                                </div>
                            </td>
                            <td class="operation">
                                <div class="w120 tc">
                                    <a class="btn blue" href="javascript:void(0);" data-href="<?php echo url('Guestbook/details', ['aid'=>$vo['aid']]); ?>" onclick="openFullframe(this, '留言详情', '800px', '80%');$('#td_is_read_<?php echo $vo['aid']; ?>').html('已读');">查看</a>
                                    <?php if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                                    <i></i>
                                    <a class="btn red" href="javascript:void(0);" data-url="<?php echo url('Guestbook/del'); ?>" data-id="<?php echo $vo['aid']; ?>" onClick="delfun(this);">删除</a>
                                    <?php endif; ?>
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
                <div class="fbutton checkboxall">
                    <input type="checkbox" autocomplete="off" class="checkAll">
                </div>
                <?php if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                <div class="fbutton">
                    <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('Guestbook/del'); ?>">
                        <div class="add">
                            <span>批量删除</span>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
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

    layui.use('laydate', function(){
        var laydate = layui.laydate;
        //执行一个laydate实例
        laydate.render({
            elem: '#add_time_begin' //指定元素
        });
        laydate.render({
            elem: '#add_time_end' //指定元素
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
    });

    function excel_export(obj,name) {
        var url = $(obj).attr('data-url');
        var aid = [];
        var typeid =  $('input[name=typeid]').val();
        var start_time =  $('input[name=add_time_begin]').val();
        var end_time =  $('input[name=add_time_end]').val();
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                aid.push($(o).val());
            }
        });
        url = url+"&aid="+aid+"&typeid="+typeid+"&start_time="+start_time+"&end_time="+end_time;
        window.location.href = url;
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