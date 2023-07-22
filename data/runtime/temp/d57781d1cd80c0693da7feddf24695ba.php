<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:52:"./application/admin/template/field/arctype_index.htm";i:1689865661;s:62:"/data/user/htdocs/application/admin/template/public/layout.htm";i:1689865671;s:65:"/data/user/htdocs/application/admin/template/public/theme_css.htm";i:1689865671;s:60:"/data/user/htdocs/application/admin/template/public/page.htm";i:1689865671;s:62:"/data/user/htdocs/application/admin/template/public/footer.htm";i:1689865670;}*/ ?>
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

<body class="bodystyle" style="cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back_xin" href="<?php echo url('Index/switch_map'); ?>" title="返回"><i class="iconfont e-fanhui"></i></a>
            <div class="subject">
                <h3>栏目字段</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <div class="flexigrid">
        <div class="mDiv pt0">
            <div class="ftitle">
                <?php if(is_check_access(CONTROLLER_NAME.'@arctype_add') == '1'): ?>
                <div class="fbutton">
                    <a href="javascript:void(0);" data-href="<?php echo url('Field/arctype_add'); ?>" onclick="openFullframe(this, '新增字段', '100%', '100%');">
                        <div class="add">
                            <span><i class="layui-icon layui-icon-addition"></i>新增字段</span>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            
            <form class="navbar-form form-inline" action="<?php echo url('Field/arctype_index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">
                        <input type="hidden" name="searchopt" value="1">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="字段搜索...">
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
                        <th abbr="article_title" axis="col3" class="w50">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="">
                            <div class="text-l10">字段标题</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w160">
                            <div class="tc">字段名称</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w120">
                            <div class="tc">字段类型</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w70">
                            <div class="tc">字段分类</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">更新时间</div>
                        </th>
                        <th axis="col1" class="w180">
                            <div class="tc">操作</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc">排序</div>
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
                            <td class="sort">
                                <div class="tc w50">
                                    <?php echo $vo['id']; ?>
                                </div>
                            </td>
                            <td style="width: 100%">
                                <div class="text-l10">
                                <?php if(empty($vo['ifsystem'])): if(is_check_access(CONTROLLER_NAME.'@arctype_edit') == '1'): ?>
                                    <a href="javascript:void(0);" data-href="<?php echo url('Field/arctype_edit',array('id'=>$vo['id'])); ?>" onclick="openFullframe(this, '栏目字段编辑', '100%', '100%');"><?php echo $vo['title']; ?></a>
                                    <?php else: ?>
                                    <?php echo $vo['title']; endif; else: ?>
                                    <?php echo $vo['title']; endif; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w160 tc">
                                    <?php echo $vo['name']; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w120 tc">
                                    <?php echo (isset($fieldtypeList[$vo['dtype']]['title']) && ($fieldtypeList[$vo['dtype']]['title'] !== '')?$fieldtypeList[$vo['dtype']]['title']:'数据出错'); ?>
                                </div>
                            </td>
                            <td>
                                <div class="tc w70">
                                    <?php if($vo['ifsystem'] == 1): ?>
                                        系统
                                    <?php else: ?>
                                        自定义
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <div class="w100 tc">
                                    <?php echo date('Y-m-d',$vo['update_time']); ?>
                                </div>
                            </td>
                            <td class="operation">
                                <div class="w180 tc">
                                <?php if(empty($vo['ifsystem'])): if(is_check_access(CONTROLLER_NAME.'@arctype_edit') == '1'): ?>
                                    <a href="javascript:void(0);" data-href="<?php echo url('Field/arctype_edit',array('id'=>$vo['id'])); ?>" class="btn blue" onclick="openFullframe(this, '栏目字段编辑', '100%', '100%');">编辑</a>
									<i></i>
                                    <?php endif; if(is_check_access(CONTROLLER_NAME.'@arctype_del') == '1'): ?>
                                    <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Field/arctype_del'); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this);">删除</a>
									<i></i>
                                    <?php endif; endif; ?>
                                <a class="btn blue" href="javascript:void(0);" data-name="<?php echo $vo['name']; ?>" data-dtype="<?php echo $vo['dtype']; ?>" onclick="copyToClipBoard(this)">标签调用</a>
                                </div>
                            </td>
                            <td class="sort">
                                <div class="w60 tc">
                                <?php if(empty($vo['ifsystem'])): if(is_check_access(CONTROLLER_NAME.'@arctype_edit') == '1'): ?>
                                    <input style="text-align: left;" type="text" onchange="changeTableVal('channelfield','id','<?php echo $vo['id']; ?>','sort_order',this);"  size="4"  value="<?php echo $vo['sort_order']; ?>" />
                                    <?php else: ?>
                                    <?php echo $vo['sort_order']; endif; else: ?>
                                    ————
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

    function delfun(obj){
      var title = $(obj).attr('data-typename');
      layer.confirm('确认删除？', {
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
        }, function(){
          layer_loading('正在处理');
        // 确定
          $.ajax({
            type : 'post',
            url : $(obj).attr('data-url'),
            data : {del_id:$(obj).attr('data-id'), _ajax:1},
            dataType : 'json',
            success : function(data){
              layer.closeAll();
              if(data.code == 1){
                layer.msg(data.msg, {icon: 1});
                window.location.reload();
                // $('tr[data-id="'+$(obj).attr('data-id')+'"]').remove();
              }else{
                layer.alert(data.msg, {icon: 2, title:false});
              }
            }
          })
        }, function(index){
          layer.close(index);
        }
      );
      return false;
    }  

    /**
     * 标签调用js
     * @param string  fieldname 字段名称
     */
    function copyToClipBoard(obj) {
        var fieldname = $(obj).attr('data-name');
        var dtype = $(obj).attr('data-dtype');
        var height = '250px';

        var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px">';

        switch(dtype)
        {
            case 'imgs':
                {
                    height = '400px';
                    var viewstr = "{eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyou.field."+fieldname+"'}\r\n    <img src='{$"+fieldname+".image_url}' />\r\n    注释：{$"+fieldname+".intro}\r\n{/eyou:diyfield";
                    contentdiv += '<dd>列表/内容页：</dd>';
                    contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:80px;">' + viewstr + '}</textarea></dd>';
                    var liststr = "{eyou:type typeid='$"+"field.typeid' id='eyoav'}\r\n    {eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyoav."+fieldname+"'}\r\n        <img src='{$"+fieldname+".image_url}' />\r\n        注释：{$"+fieldname+".intro}\r\n    {/eyou:diyfield"+"}\r\n{/eyou:type";
                    contentdiv += '<dd>标签 arclist / list 内调用 <font color="red">(更多简洁调法请参考标签 arclist /list)</font>：</dd>';
                    contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:120px;">' + liststr + '}</textarea></dd>';
                }
                break;

            case 'checkbox':
                {
                    height = '400px';
                    var viewstr = "{eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyou.field."+fieldname+"'}\r\n    {$"+fieldname+".value}\r\n{/eyou:diyfield";
                    contentdiv += '<dd>列表/内容页：</dd>';
                    contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:60px;">' + viewstr + '}</textarea></dd>';
                    var liststr = "{eyou:type typeid='$"+"field.typeid' id='eyoav'}\r\n    {eyou:diyfield type='"+dtype+"' id='"+fieldname+"' name='$"+"eyoav."+fieldname+"'}\r\n        {$"+fieldname+".value}\r\n    {/eyou:diyfield"+"}\r\n{/eyou:type";
                    contentdiv += '<dd>标签 arclist / list 内调用 <font color="red">(更多简洁调法请参考标签 arclist /list)</font>：</dd>';
                    contentdiv += '<dd><textarea rows="4" cols="60" style="width:470px;height:100px;">' + liststr + '}</textarea></dd>';
                }
                break;

            case 'datetime':
                {
                    contentdiv += '<dd>列表/内容页：</dd>';
                    contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'eyou.field.'+fieldname+'|MyDate=\'Y-m-d H:i:s\',###}"></dd>'
                    contentdiv += '<dd>标签 type / arclist / list 内调用：</dd>'
                    contentdiv += '<dd><input type="text" style=" width:470px;" value="{$'+'field.'+fieldname+'|MyDate=\'Y-m-d H:i:s\',###}"></dd>';
                }
                break;

            default:
                {
                    contentdiv += '<dd>列表/内容页：</dd>';
                    contentdiv += '<dd><input type="text" style=" width:470px;margin-bottom:10px;" value="{$'+'eyou.field.'+fieldname+'}"></dd>'
                    contentdiv += '<dd>标签 type / arclist / list 内调用：</dd>'
                    contentdiv += '<dd><input type="text" style=" width:470px;" value="{$'+'field.'+fieldname+'}"></dd>';
                }
                break;
        }

        contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color: #F60;">请将相应标签复制并粘贴到对应模板文件中！</dd></dl></div>';

        layer.open({
            shade: layer_shade,
            title: '标签调用',
            type: 1,
            skin: 'layui-layer-demo',
            area: ['550px', height], //宽高
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