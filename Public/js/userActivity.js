$(function(){

	$('.joinActivity').click(function(){
  		if($('.joinCheck').is(':checked')) 
		{
			var aname =$(this).attr('joinTitle');
			
			//alert(aname);


   			$.post(userJoinActivityUrl,{
   				aname:aname},function(data){
            		if(data.status == 1)
            		{
            			$('p#userActivity').html('活动报名成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#userActivity').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#userActivity').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});

	$('.dJoinActivity').click(function(){
  		if($('.dJoinCheck').is(':checked')) 
		{
			var aname =$(this).attr('dJoinTitle');
			
			//alert(aname);


   			$.post(userDeleteJoinActivityUrl,{
   				aname:aname},function(data){
            		if(data.status == 1)
            		{
            			$('p#userActivity').html('取消报名成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#userActivity').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#userActivity').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});


});