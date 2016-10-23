$(function(){
	$('#registForm').submit(function()
	{
        $.post(registUrl,$("#registForm").serialize().trim(), function(data)
            {
            if(1 == data.status)
            {
            	$('p#registMessage').html('该用户已注册');
                $("#mymodal").modal("toggle");
            }
            else if(2 == data.status)
            {
            	$("p#registMessage").html("正在等待管理员确认，请不要重复注册");
                $("#mymodal").modal("toggle");
            }
            else if (0 == data.status) 
            {
            	$("p#registMessage").html("注册信息已发送，请等待管理员确认");
                $("#mymodal").modal("toggle");
            }
        });
		return false;
	});
});