$(function(){

	// 用户
	$(".infoOther3").hide();
  	$(".infoOther4").hide();
  	$(".infoOther5").hide();
  	$(".infoOther6").hide();


	$("#handleM").click(function(){
		
  		$(".infoOther3").toggle(1000);
  		$(".infoOther4").toggle(1000);
  		$(".infoOther5").toggle(1000);
  		$(".infoOther6").toggle(1000);
  });

	
	$('.userToBlack').click(function(){

  		if($('.userCheck').is(':checked')) 
		{
			var mail =$(this).attr('unTitle13');
			var username = $(this).attr('unTitle14');
			// alert(mail + username);


   			$.post(manageUserToBlackUrl,{
   				mail:mail,
   				username:username},function(data){
            		if(data.status == 1)
            		{
            			$('p#manageMessageH').html('移至黑名单成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#manageMessageH').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#manageMessageH').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});

  	$('.userRemove').click(function(){

  		if($('.userCheck').is(':checked')) 
		{
			var mail =$(this).attr('unTitle15');
			var username = $(this).attr('unTitle16');
			// alert(mail + username);


   			$.post(manageUserDeleteUrl,{
   				mail:mail,
   				username:username},function(data){
            		if(data.status == 1)
            		{
            			$('p#manageMessageH').html('删除成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#manageMessageH').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#manageMessageH').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});








	//未读消息

	$(".urReadHao").hide();
	$(".unReadC").hide();
  	$(".unReadAgree").hide();
  	$(".unReadYiru").hide();
  	$(".unReadShanchu").hide();

  	$("#handleUnRead").click(function(){
  		$(".urReadHao").toggle(1000);
  		$(".unReadC").toggle(1000);
  		$(".unReadAgree").toggle(1000);
  		$(".unReadYiru").toggle(1000);
  		$(".unReadShanchu").toggle(1000);
  	});

  	$('.agreeRegist').click(function(){

  		if($('.unReadCheck').is(':checked')) 
		{
			var mail =$(this).attr('unTitle');
			var username = $(this).attr('unTitle2');
			// alert(mail + username);


   			$.post(manageAgreeRegistUrl,{
   				mail:mail,
   				username:username},function(data){
            		if(data.status == 1)
            		{
            			$('p#manageMessageH').html('同意注册成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#manageMessageH').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#manageMessageH').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});

  	$('.yiRu').click(function(){

  		if($('.unReadCheck').is(':checked')) 
		{
			var mail =$(this).attr('unTitle3');
			var username = $(this).attr('unTitle4');
			// alert(mail + username);


   			$.post(manageYiRuBlackUrl,{
   				mail:mail,
   				username:username},function(data){
            		if(data.status == 1)
            		{
            			$('p#manageMessageH').html('移入黑名单成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#manageMessageH').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#manageMessageH').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});
  	$('.unReadRemove').click(function(){

  		if($('.unReadCheck').is(':checked')) 
		{
			var mail =$(this).attr('unTitle5');
			var username = $(this).attr('unTitle6');
			// alert(mail + username);


   			$.post(manageDeleteUnReadUrl,{
   				mail:mail,
   				username:username},function(data){
            		if(data.status == 1)
            		{
            			$('p#manageMessageH').html('删除成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#manageMessageH').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#manageMessageH').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});






	//已读消息

	$(".readHao").hide();
	$(".readC").hide();
  	$(".readShanchu").hide();

  	$("#handleRead").click(function(){
  		$(".readHao").toggle(1000);
  		$(".readC").toggle(1000);
  		$(".readShanchu").toggle(1000);
  	});
  	$('.readRemove').click(function(){

  		if($('.readCheck').is(':checked')) 
		{
			var mail =$(this).attr('unTitle7');
			var username = $(this).attr('unTitle8');
			// alert(mail + username);


   			$.post(manageDeleteReadUrl,{
   				mail:mail,
   				username:username},function(data){
            		if(data.status == 1)
            		{
            			$('p#manageMessageH').html('删除成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#manageMessageH').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#manageMessageH').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});




	//黑名单

	$(".blackHao").hide();
	$(".blackYiChu").hide();
  	$(".blackShanchu").hide();
  	$(".blackC").hide();
	
	$("#handleBlack").click(function(){
  		$(".blackHao").toggle(1000);
		$(".blackYiChu").toggle(1000);
  		$(".blackShanchu").toggle(1000);
  		$(".blackC").toggle(1000);
  	});

	$('.blackYiDong').click(function(){

  		if($('.blackCheck').is(':checked')) 
		{
			var mail =$(this).attr('unTitle9');
			var username = $(this).attr('unTitle10');
			// alert(mail + username);

   			$.post(manageYiChuBlackUrl,{
   				mail:mail,
   				username:username},function(data){
            		if(data.status == 1)
            		{
            			$('p#manageMessageH').html('移出黑名单成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#manageMessageH').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#manageMessageH').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});


  	$('.blackRemove').click(function(){

  		if($('.blackCheck').is(':checked')) 
		{
			var mail =$(this).attr('unTitle11');
			var username = $(this).attr('unTitle12');
			// alert(mail + username);

   			$.post(manageDeleteChuBlackUrl,{
   				mail:mail,
   				username:username},function(data){
            		if(data.status == 1)
            		{
            			$('p#manageMessageH').html('删除成功');
            			$("#mymodal").modal("toggle");
            		}
            		else
            		{
            			$('p#manageMessageH').html('请重新尝试');
            			$("#mymodal").modal("toggle");
            		}
       			},'json');
		}
		else
		{
			$('p#manageMessageH').html('请选择一条记录');
            $("#mymodal").modal("toggle");
		}
  	});



    // 已发布活动


  $(".activityHao").hide();
  $(".aC").hide();
  $(".aBianji").hide();
  $(".aXuHao").hide();
  
  $("#handleActivity").click(function(){

      $(".activityHao").toggle(1000);
      $(".aC").toggle(1000);
      $(".aBianji").toggle(1000);
      $(".aXuHao").toggle(1000);
    });

  $('.aDelete').click(function(){
      if($('.activityCheck').is(':checked')) 
      {
        var activityname =$(this).attr('unTitle13');
      
       // alert(activityname);

        $.post(manageDeleteActivityUrl,{
          activityname:activityname},function(data){
                if(data.status == 1)
                {
                  $('p#manageMessageH').html('删除成功');
                  $("#mymodal").modal("toggle");
                }
                else
                {
                  $('p#manageMessageH').html('请重新尝试');
                  $("#mymodal").modal("toggle");
                }
            },'json');
    }
    else
    {
      $('p#manageMessageH').html('请选择一条记录');   
      $("#mymodal").modal("toggle");
    }

    });
    
    $('.aEdit').click(function(){
         if($('.activityCheck').is(':checked')) 
        {
            var activityname =$(this).attr('unTitle14');
            var activitystime =$(this).attr('unTitle15');
            var activityetime =$(this).attr('unTitle16');
            var activityplace =$(this).attr('unTitle17');

            $('#activityNameEdit').html(activityname);
            $('#sTimeEdit').val(activitystime);
            $('#eTimeEdit').val(activityetime);
            $('#aPlaceEdit').val(activityplace);

            $('#mymodal2').modal('toggle');

           

        }
         else
        {
          $('p#manageMessageH').html('请选择一条记录');   
          $("#mymodal").modal("toggle");
        }
    });

     $('#editForm').submit(function(){
          $('#mymodal2').modal('toggle');

          var activityname = $('#activityNameEdit').html();
          var sTimeEdit = $('#sTimeEdit').val();
          var eTimeEdit = $('#eTimeEdit').val();
          var aPlaceEdit = $('#aPlaceEdit').val();

          $.post(manageEditActivityUrl,{
            activityname:activityname,
            sTimeEdit:sTimeEdit,
            eTimeEdit:eTimeEdit,
            aPlaceEdit:aPlaceEdit},function(data){

              if(1 == data.status)
              {
                  $('p#manageMessageH').html('编辑成功');   
                  $("#mymodal").modal("toggle");
              }
              else
              {
                  $('p#manageMessageH').html('编辑失败');   
                  $("#mymodal").modal("toggle");
              }

          },'json');



          return false;
     });





    // 报名用户

    $(".userActivityHao").hide();
    $(".userActivityC").hide();
    $(".userActivityShanchu").hide();
    
    $('#handleUserActivity').click(function(){
        $(".userActivityHao").toggle(1000);
        $(".userActivityC").toggle(1000);
        $(".userActivityShanchu").toggle(1000);
    });

    $('.userActivityRemove').click(function(){
        if($('.userActivityCheck').is(':checked')) 
        {
            var username =$(this).attr('userActivity1');
            var aname =$(this).attr('userActivity2');

            // alert(username + aname);
            $.post(manageDeleteUserActivityUrl,{
                username:username,
                aname:aname
            },function(data){
                if(1 == data.status)
              {
                  $('p#manageMessageH').html('删除成功');   
                  $("#mymodal").modal("toggle");
              }
              else
              {
                  $('p#manageMessageH').html('删除失败');   
                  $("#mymodal").modal("toggle");
              }
            },'json');
            
        }
         else
        {
          $('p#manageMessageH').html('请选择一条记录');   
          $("#mymodal").modal("toggle");
        }
    });


});