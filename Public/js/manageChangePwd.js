$(function(){
	$('#userChangePwdForm').submit(function(){
		var firstPwd = $('#firstP').val().trim();
		var secondPwd = $('#secondP').val().trim();

		if(firstPwd != secondPwd)
		{
			$('#userChangeMessage').html('密码不一致,请重新操作');
			$("#mymodal").modal("toggle");
		}
		else
		{
			$.post(managerChangePwdUrl,{password:firstPwd}, function(data)
            {
            	if(1 == data.status)
            	{
            		// alert('hah');
            		window.location.href = managerPwdSuccessUrl;
            	}

        	},'json');
		}
		
		return false;
	});
});

function back()
{
	window.location.href = managerbackUrl;
}