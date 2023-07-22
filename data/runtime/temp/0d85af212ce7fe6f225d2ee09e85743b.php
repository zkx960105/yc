<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:37:"./template/mobile/lists_single_kc.htm";i:1689989959;}*/ ?>
<!DOCTYPE html>
<html style="font-size: 25px;">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>">
	<!-- 页面描述 -->
	<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>">
	<title><?php echo $eyou['field']['seo_title']; ?></title>
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/aos.css">
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/swiper.min.css">
    <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/main.css">

    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/aos.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/dyfrom.js"></script>
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/main.js"></script>
</head>

<body>


  <div class="no" style="padding-bottom: 50px;">
    <div class="header">
      <div class="logo1"><a href="http://www.ayhmjy.com/"><img
            src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/logo.png"></a></div>
      <div class="logo2"><a><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/logo2.png"></a></div>
    </div>


    <div class="nbanner">

      <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/tou.png">

    </div>



    <div class="mbg" style="min-height: 434px;">

      <div class="title">面授课程</div>
      <div class="subtitle">TRAINING COURSES</div>
      
     
      <?php echo $eyou['field']['content']; ?>


    </div>



  </div>
  <div class="fnav">
    <ul>
      <li><a href="http://www.ayhmjy.com/">
          <i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mv01.png"></i>
          <span>首页</span>
        </a></li>
      <li><a href="http://www.ayhmjy.com/new/5331.html">
          <i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mv02.png"></i>
          <span>招生简章</span>
        </a></li>
      <li><a href="tel:400-8765-801">
          <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mc.png">
        </a></li>
      <li><a href="http://p.qiao.baidu.com/cps/chat?siteId=14981026&amp;userId=29479597">
          <i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mv03.png"></i>
          <span>咨询</span>
        </a></li>
      <li><a>
          <i><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/mv04.png"></i>
          <span>报名</span>
        </a></li>
    </ul>
  </div>

  <div class="toTop" style="display: none;"></div>

  <div class="modal" style="">
    <form action="http://www.ayhmjy.com/home/index/message1" enctype="multipart/form-data" method="post"
      id="message-form-index">
      <div class="content">
        <div class="close" style="height: 0.98rem;text-align: right;font-size:0.64rem;line-height:0.98rem;">x 
        </div>
        <div class="modal-title">在线报名</div>
        <div class="inputwrapper">
          <div class="right">
            <input type="text" name="name" placeholder="请输入姓名" class="name">
            <div class="cha chan"></div>
          </div>
        </div>
        <div class="inputwrapper">
          <div class="right">
            <input type="text" placeholder="输入电话号码" name="phone" class="phone">
            <div class="cha chap"></div>
          </div>
        </div>
        <div class="inputwrapper list">
          <div class="right">
            <input type="hidden" name="banji" id="class_name" value="">
            <input type="text" value="选择班级" readonly="" style="color: #999;">
            <div class="cha chab"></div>
            <ol class="ul">
              <li>名校定制班</li>
              <li>央清班</li>
              <li>金牌定制班</li>
              <li>校长旗舰班</li>
              <li>重点班</li>
              <li>校长VIP班</li>
              <li>周末班</li>
              <li>暑假班</li>
              <li>寒假班</li>
              <li>央清培优班</li>

            </ol>
          </div>
        </div>
        <div class="inputwrapper">
          <div class="right">
            <input type="text" placeholder="输入QQ号码" name="qq" class="qq">
            <div class="cha chaq"></div>
          </div>
        </div>
        <div class="btn postdata1" onclick="postform();"></div>
        <div class="btn1"></div>
      </div>
    </form>
  </div>





</body>

</html>