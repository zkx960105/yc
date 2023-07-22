<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:38:"public/static/common/dispatch_jump.htm";i:1689865560;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: '微软雅黑'; color: #CCC; font-size: 16px; }
        .system-message{ padding: 24px 48px; margin:auto; box-shadow: 0px 0px 10px rgba(0,0,0,.2)!important; top:50%; width:500px; border-radius:2px;
            -moz-border-radius:10px; /* Old Firefox */}
        .system-message .jump{ padding-top: 10px; color: #999;text-align: center;}
        .system-message .success,.system-message .error{ line-height: 1.8em;  color: #000; font-size: 18px;font-weight: bold; text-align: center;}
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
        .status-ico{margin: 20px auto;width: 73px;height: 76px;display: block;background: url(/public/static/admin/images/ico_right_wrong.png) no-repeat}
        .status-ico-ok{background-position: 0 0}
        .status-ico-error{background-position: -97px 0}
		@media (max-width: 767px) {.system-message{width: 90%;box-shadow:none!important;}}
    </style>
    <script type="text/javascript" src="/public/static/common/js/jquery.tools.min.js"></script>
    <script type="text/javascript">
        $(function(){
            var height2=$('.system-message').height();
            var height1=$(window).height();
            $('.system-message').css('margin-top',((height1-height2)/3)-30);
        });
    </script>
    <!-- Bootstrap core CSS -->
    <link href="/public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="system-message">
        <?php switch($code): case "1": ?>
            <div class="status-ico status-ico-ok"></div>
            <p class="success">
                <?php if(in_array((get_current_lang()), explode(',',"cn,zh"))): if(stristr($msg, '__html__')): ?>
                        <?php echo str_replace('__html__','',$msg); else: ?>
                        <?php echo strip_tags($msg); endif; else: ?>
                    success
                <?php endif; ?>
            </p>
            <?php break; case "0": ?>
            <div class="status-ico status-ico-error"></div>
            <p class="error">
                <?php if(stristr($msg, '__html__')): ?>
                    <?php echo str_replace('__html__','',$msg); else: ?>
                    <?php echo strip_tags($msg); endif; ?>
            </p>
            <?php break; endswitch; ?>
        <p class="jump">
            <?php if(in_array((get_current_lang()), explode(',',"cn,zh"))): if(get_current_lang() == 'zh'): ?>
                    頁面自動 <a id="href" href="<?php echo $url; ?>">跳轉</a> 等待時間： <b id="wait" data-data="<?php echo $data; ?>"><?php echo $wait; ?></b>
                <?php else: ?>
                    页面自动 <a id="href" href="<?php echo $url; ?>">跳转</a> 等待时间： <b id="wait" data-data="<?php echo $data; ?>"><?php echo $wait; ?></b>
                <?php endif; else: ?>
                Waiting time for page auto <a id="href" href="<?php echo $url; ?>">jump</a>: <b id="wait" data-data="<?php echo $data; ?>"><?php echo $wait; ?></b>
            <?php endif; ?>
        </p>
    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);

            /*留言自动发送邮箱*/
            var gbook_submit = document.getElementById('wait').getAttribute("data-data");
            var data = gbook_submit.split("|");
            if (data.length > 0 && data[0] == 'gbook_submit') {
                //发送邮箱
                $.ajax({
                    type: "post",
                    data: {type:data[0],tid:data[1],aid:data[2],_ajax:1},
                    dataType: 'json',
                    // timeout: 3000,
                    url: "<?php echo url('api/Ajax/send_email'); ?>",
                });
                //发送短信
                $.ajax({
                    type: "post",
                    data: {scene:11,_ajax:1},
                    dataType: 'json',
                    // timeout: 3000,
                    url: "<?php echo url('api/Ajax/SendMobileCode'); ?>",
                });
            }
            /*--end*/
        })();
    </script>
</body>
</html>