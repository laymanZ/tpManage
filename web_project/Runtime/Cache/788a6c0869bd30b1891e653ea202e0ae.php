<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="__PUBLIC__/css/findPwd.css" rel="stylesheet">
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/fwd.js"></script>
    <script type="text/javascript">
    	var findPwdUrl = '<?php echo U("Deal/findPwd",'','');?>';
    </script>

	<title>青协会员密码找回</title>
</head>
<body>

	<div class="demo">
        	<h1> 欢迎</h1>

        	<p><strong>输入您注册的电子邮箱：</strong></p>
        	<p><input type="text" class="input" name="email" id="email"><span id="chkmsg"></span></p>
		
            <p><input type="button" class="btn" id = "sub_btn" value="提 交"></p>
    </div>        
</body>
</html>