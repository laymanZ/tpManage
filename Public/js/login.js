$(function(){
	$('#loginForm').submit(function()
	{
        $.post(loginUrl,$("#loginForm").serialize().trim(), function(data)
            {
            	if(2 == data.status)
            	{
            		$('p#loginMessage').html('验证码错误');
                	$("#mymodal").modal("toggle");
            	}
            	else if(1 == data.status)
            	{
                   
            		window.location.href = "manageIndexPage.html";
            	}
            	else if(0 == data.status)
            	{
            		$('p#loginMessage').html('该用户尚未注册');
                	$("#mymodal").modal("toggle");
            	}
            	else if(3 == data.status)
            	{
            		$('p#loginMessage').html('该用户由于某些原因无法登录，请联系管理员');
                	$("#mymodal").modal("toggle");
            	}
            	else if(4 == data.status)
            	{
            		window.location.href = "indexPage.html";
            	}
                else
                {

                }
        });
		return false;
	});
});	

	
	function change_code(obj)
    {
        $("#yCode").attr("src",verifyURL + '/' +Math.random());
        return false;
    }

    function findPwdPage()
    {
        window.location.href = fPURL;
    }