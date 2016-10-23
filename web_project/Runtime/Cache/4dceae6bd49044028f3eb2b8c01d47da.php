<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/animsition.min.css">
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        var loginUrl = '<?php echo U("Deal/userLogin",'','');?>';
        var verifyURL = '<?php echo U("verify",'','');?>';
        var fPURL = '<?php echo U("findPwdPage",'','');?>';
    </script>
    <script src="__PUBLIC__/js/login.js"></script>

    <title>青协登录</title>
    
  </head>
<body>

<div class="bg">
    <img src="__PUBLIC__/image/qx2.jpg" />
</div>
<div class="animsition2">
<div class = "welcome">
欢迎
</div>
</div>
<h3 class="please_login">请登录：</h3>

<form class = "login_btn" id="loginForm">
<div class = "login_all">
   <div class = "container-login">
        <div class="row" >
            <div class="col-xs-2">
            <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control input-block-level" id="username" placeholder="用户名" required="required" name="username" autofocus="autofocus">
            </div>
            </div>
        </div>
    
        <div class = "row" style="margin-top: 10px;">
            <div class="col-xs-2">
            <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control input-block-level" id="password" placeholder="密码" required="required" name="password" >
            </div>
            </div>
        </div>
   
        <div class = "row" style="margin-top: 10px;">
            <div class="col-xs-1">
           
            <input type="text" class="form-control input-block-level"  placeholder="请输入验证码" required="required" name="code">
                <div class = "yanzheng">
                    <a href = "javascript:void(change_code(this));">看不清?</a><img src="<?php echo U("verify");?>" id="yCode" style="width: 110px;">
                </div>
            </div>
            
        </div>
    </div> 
   <div class = "remember_me">
   <label class="checkbox">
   
    <input type="checkbox" value="remember-me">
    记住我
    </label>
    </div>
</div>

<button  class="btn btn-primary btn-lg" id= "login" type="submit">&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-danger btn-lg" onclick="findPwdPage()">找回密码</button>
</form>


<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content" style="width:300px;margin:auto;margin-top: 200px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">登录提醒</h4>
            </div>
            <div class="modal-body">
                <p id="loginMessage"></p>
            </div>
            <div class="modal-footer" style="height:60px;">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-top: 0px;">确定</button>
            </div>
        </div>
    </div>
</div>


<script src="__PUBLIC__/js/jquery.animsition.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(".animsition2").animsition({

            inClass               :   'rotate-in-lg',
            outClass              :   'fade-out-down-lg',
            inDuration            :    2500,
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