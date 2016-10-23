<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/userinfo.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/changePwd.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css" />
   <script src="__PUBLIC__/js/jquery.js"></script>
   <script src="__PUBLIC__/js/bootstrap.min.js"></script>

   <script type="text/javascript">
        var userChangePwdUrl = '<?php echo U("Deal/userChangePwd",'','');?>';
        var userChangePwdSuccessUrl = '<?php echo U("userChangePwdSuccess",'','');?>';
        var userbackUrl = '<?php echo U("userInfo",'','');?>';
    </script>

   <script src ="__PUBLIC__/js/userChangePwd.js"></script>
   <!-- <script src="__PUBLIC__/js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="__PUBLIC__/css/animsition.min.css">
    <title>修改密码</title>
</head>
<body>

<div class="border_all">
    <h1>Hey,在这里修改你的密码</h1>
    <br/><br/>
    <div class="animsition">
        <div class="login-content ">
                <div class="form" id="findPwd">
                <form id="userChangePwdForm">
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" id="firstP" name="firstP" class="form-control" placeholder="输入密码" required="required" style="min-height: 40px;">
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/>
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" id="secondP" name="secondP" class="form-control" placeholder="确认密码" required="required" style="min-height: 40px;">
                            </div>
                        </div>
                    </div>
                      <div class = "leftBtn">
                    <div class="form-group form-actions">
                        <div class="col-xs-4 col-xs-offset-4 ">
                            <button class="btn btn-large btn-info" onclick = "back()">返回</button>
                        </div>
                    </div>
                </div>
                <div class = "rightBtn">
                    <div class="form-group form-actions">
                        <div class="col-xs-4 col-xs-offset-4 ">
                            <button  class="btn btn-large btn-info" id="sureFind" type="submit">确定</button>
                        </div>
                    </div>
                </div>
                </form>
              
            </div>
    </div>
</div>
</div>


<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content" style="width:300px;margin:auto;margin-top: 200px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">修改提醒</h4>
            </div>
            <div class="modal-body">
                <p id="userChangeMessage"></p>
            </div>
            <div class="modal-footer" style="height:60px;">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-top: 0px;">确定</button>
            </div>
        </div>
    </div>
</div>





<!-- <script src="__PUBLIC__/css/jquery.min.js"></script> -->
    <script src="__PUBLIC__/js/jquery.animsition.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
  
          $(".animsition").animsition({
          
            inClass               :   'fade-in-right',
            outClass              :   'fade-in-down-sm',
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