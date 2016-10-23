$(function(){
	$('#activityForm').submit(function(){
		//alert($('#activityForm').serialize().trim());
		 $.post(addActivityUrl,$('#activityForm').serialize().trim(), function(data)
         {
            if(1 == data.status)
            {
            	$('#activityMessage').html('发布活动成功');
            	 $("#mymodal").modal("toggle");
            }
            else
            {
            	$('#activityMessage').html('已存在该活动');
            	 $("#mymodal").modal("toggle");

            }
        });
		return false;
	});
});