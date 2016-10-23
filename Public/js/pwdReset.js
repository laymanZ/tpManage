$(function(){
	$('#pwdReset').submit(function(){
		var pwd1 = $('#pwd1').val().trim();
		var pwd2 = $('#pwd2').val().trim();
		// alert(pwd1 + pwd2);
		if(pwd1 != pwd2)
		{
			$('p#userChangeMessage').html('两次输入的密码不相等，请重新输入');
            $("#mymodal").modal("toggle");
		}
		else
		{
			$.post(pwdResetUrl,{password:pwd1}, function(data)
            {
            	if(1 == data.status)
            	{
            		window.location.href = pwdResetSuccessUrl;
            	}
            	else
            	{
            		$('p#userChangeMessage').html('该邮箱尚未注册');
            		$("#mymodal").modal("toggle");
            	}
        	},'json');
		}
		return false;
	});
});