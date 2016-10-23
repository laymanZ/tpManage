<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/userinfo.css">
    <link rel="stylesheet" href="__PUBLIC__/css/animsition.min.css">
    <title>账户信息</title>
</head>
<body>

<div class="border_all">
    <h1>Hi</h1>
    <div class="animsition">
        <img src = "__PUBLIC__/image/aisi.jpg"/><br/><br/>
        <hr/>
        <?php if(is_array($userInfo)): $i = 0; $__LIST__ = $userInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$myInfo): $mod = ($i % 2 );++$i;?><h1><div class = "leftShow">昵称：</div><?php echo ($myInfo["username"]); ?></h1>
        <h1><div class = "leftShow">邮箱：</div><?php echo ($myInfo["mail"]); ?></h1><?php endforeach; endif; else: echo "" ;endif; ?>
        <br/><br/>
        <a href="__URL__/userPwdChange">修改密码</a>

    </div>
</div>
</div>
<script src="__PUBLIC__/js/jquery.min.js"></script>
    <script src="__PUBLIC__/js/jquery.animsition.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
  
          $(".animsition").animsition({
          
            inClass               :   'fade-in-up-sm',
            outClass              :   'fade-out-down-lg',
            inDuration            :    1500,
            outDuration           :    800,
            linkElement           :   '.animsition-link',
            // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
            loading               :    true,
            loadingParentElement  :   'body', //animsition wrapper element
            loadingClass          :   'animsition-loading',
            unSupportCss          : [ 'animation-duration',
                                      '-webkit-animation-duration',
                                      '-o-animation-duration'
                                    ],
            overlay               :   false,
            overlayClass          :   'animsition-overlay-slide',
            overlayParentElement  :   'body'
          });
        });
    </script>
</body>
</html>