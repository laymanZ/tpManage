$(function(){
	$("#sub_btn").click(function(){
		var mail = $("#email").val().trim();
		

		var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; 
              
		if(mail == "")
		{
			$("#chkmsg").html("邮箱不能为空");
		} 	
		else if(!preg.test(mail))
		{
			$("#chkmsg").html("请填写正确的邮箱！");
		}
		else
		{
			$("#sub_btn").attr("disabled","disabled").val('提交中..').css("cursor","default");
				$.post(findPwdUrl,{mail:mail},function(data){
				
                //alert(data)
				if(1  == data.status)
				{
					$("#chkmsg").html("该邮箱尚未注册！");
					$("#sub_btn").removeAttr("disabled").val('提 交').css("cursor","pointer");
				}
				else
				{
					$(".demo").html("<h3>"+data.status+"</h3>");
				}
			},'json');
		}
	});
});