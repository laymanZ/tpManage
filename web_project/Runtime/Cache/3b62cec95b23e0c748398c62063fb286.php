<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>活动报名</title>
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/userActivity2.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/htmleaf-demo.css">
      <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/userActivity.css">
      <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/colorfulTab.min.css">
      <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">

       <link rel="stylesheet" href="__PUBLIC__/css/pictureShow.css" type="text/css" media="screen"/>
		<script src="__PUBLIC__/js/cufon-yui.js" type="text/javascript"></script>
		<script src="__PUBLIC__/js/Cantarell.font.js" type="text/javascript"></script>
		
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->

	<style type="text/css">
			
			.content{
				width:900px;
				position:relative;
				margin:20px auto 0px auto;
			}
			
		</style>
</head>
<body style="background:#494A5F;">
			<div style="text-align: center;margin-top: 100px;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 25px;font-weight: bold;">
		  <h1 style="color: #fff;">欢迎<?php echo ($_COOKIE['username']); ?>,你可以在这里进行活动报名，或者点击<a href="__URL__/indexPage" style="text-decoration: none;color: #fff;">
		  &nbsp;返回</a></h1>
		   
		  </div>
		<div class="htmleaf-container">
		  
		  <!-- Flatline -->
		  <div class="colorful-tab-wrapper" id="colorful-flatline">
		    <ul class="colorful-tab-menu">
		      <li class="colorful-tab-menu-item active" tab-color="#C9003C"><a href="#fl-0" style="color: #fff;text-decoration: none;">活动展示</a></li>
		      <li class="colorful-tab-menu-item" tab-color="#00A566"><a href="#fl-1" style="color: #fff;text-decoration: none;">未报名活动</a></li>
		      <li class="colorful-tab-menu-item" tab-color="#8021D3"><a href="#fl-2" style="color: #fff;text-decoration: none;">已报名活动</a></li>
		    </ul>
		    <div class="colorful-tab-container">  
		      <div class="colorful-tab-content active" id="fl-0">  
		        <p>


		      	<div class="content">
				<div id="hs_container" class="hs_container">
				<div class="hs_area hs_area1">
					<img class="hs_visible" src="__PUBLIC__/image/area1/qx1.jpg" alt=""/>
					<img src="__PUBLIC__/image/area1/qx2.jpg" alt=""/>
					<img src="__PUBLIC__/image/area1/qx3.jpg" alt=""/>
				</div>
				<div class="hs_area hs_area2">
					<img class="hs_visible" src="__PUBLIC__/image/area2/qx1.jpg" alt=""/>
					<img src="__PUBLIC__/image/area2/qx2.jpg" alt=""/>
					<img src="__PUBLIC__/image/area2/qx3.jpg" alt=""/>
				</div>
				<div class="hs_area hs_area3">
					<img class="hs_visible" src="__PUBLIC__/image/area3/qx1.jpg" alt=""/>
					<img src="__PUBLIC__/image/area3/qx2.jpg" alt=""/>
					<img src="__PUBLIC__/image/area3/qx3.jpg" alt=""/>
				</div>
				<div class="hs_area hs_area4">
					<img class="hs_visible" src="__PUBLIC__/image/area4/qx1.jpg" alt=""/>
					<img src="__PUBLIC__/image/area4/qx2.jpg" alt=""/>
					<img src="__PUBLIC__/image/area4/qx3.jpg" alt=""/>
				</div>
				<div class="hs_area hs_area5">
					<img class="hs_visible" src="__PUBLIC__/image/area5/qx1.jpg" alt=""/>
					<img src="__PUBLIC__/image/area5/qx2.jpg" alt=""/>
					<img src="__PUBLIC__/image/area5/qx3.jpg" alt=""/>
				</div>
			</div>
			</div>
		        <br/>
				<br/>
		        <?php if(is_array($activityAll)): $i = 0; $__LIST__ = $activityAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$all): $mod = ($i % 2 );++$i;?><div class = "ActivityTitle">
		        	<?php echo ($all["aname"]); ?>
		        </div>
		        <br/>
		        <div class = "ActivityPlace">
		        	<?php echo ($all["aplace"]); ?>
		        </div>
		        <br/>
		        <div class = "ActivityTime">
		        	<?php echo ($all["astime"]); ?><span>——</span><?php echo ($all["aendtime"]); ?>
		        </div>
		        <br/>
		        <div class="ActivityDescription">
		        	<span>活动描述：</span><?php echo ($all["ades"]); ?>
		        </div>
		        <br/><br/>
		        <hr/><?php endforeach; endif; else: echo "" ;endif; ?>
		        </p>
		        
		        
		      </div>
		      <div class="colorful-tab-content" id="fl-1"> 
		        <p>
		         <table class="table table-hover">
   						<thead>
    					 <tr>
      					 	<th>序号</th>
       						<th>活动名称</th>
       						
     					</tr>
   						</thead>
   						<tbody>
   						 <?php if(is_array($userNotSelect)): $i = 0; $__LIST__ = $userNotSelect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$uNS): $mod = ($i % 2 );++$i;?><tr>
       						<td><input type="checkbox" class="joinCheck"></input></td>
       						<td><?php echo ($uNS["aname"]); ?></td>
       						
       						<td><a href="javascript:void(0)" class="joinActivity" joinTitle=<?php echo ($uNS["aname"]); ?>>我要报名</a></td>
     					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
   						</tbody>
 					</table>
		        </p>
		      </div>
		      <div class="colorful-tab-content active" id="fl-2"> 
		      <p>

		      <table class="table table-hover">
   						<thead>
    					 <tr>
      					 	<th>序号</th>
       						<th>活动名称</th>
     					</tr>
   						</thead>
   						<tbody>
   						<?php if(is_array($userSelect)): $i = 0; $__LIST__ = $userSelect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$uS): $mod = ($i % 2 );++$i;?><tr>
       						<td><input type="checkbox" class="dJoinCheck"></input></td>
       						<td><?php echo ($uS["aname"]); ?></td>
       						
       						<td><a href="javascript:void(0)" class="dJoinActivity" dJoinTitle=<?php echo ($uS["aname"]); ?>>取消报名</a></td>
     					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
   						</tbody>
 					</table>
		      </p>
		      </div>
		    </div>
		  </div>
		  <!-- Flatline -->
		 <footer>
    	<p class="pull-left" style="color: #fff;margin-left: 500px;font-size: 20px;font-weight: bold;">@CopyRight&nbsp;&nbsp;2016&nbsp;&nbsp;LZW</p>
        <p class="pull-right" style="margin-right: 500px;font-size: 20px;font-weight: bold;"><a href="#top" style="color: #fff;text-decoration: none;">回到顶部</a></p>
    	</footer>
	</div>
	


	<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content" style="width:300px;margin:auto;margin-top: 200px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">操作提醒</h4>
            </div>
            <div class="modal-body">
                <p id="userActivity"></p>
            </div>
            <div class="modal-footer" style="height:60px;">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-top: 0px;">确定</button>
            </div>
        </div>
    </div>
</div>

	<script src="__PUBLIC__/js/jquery.js" type="text/javascript"></script>
	<!-- <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script> -->
	<script type="text/javascript" src="__PUBLIC__/js/colorfulTab.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
	<script type="text/javascript">
        	var userJoinActivityUrl = '<?php echo U("Deal/userJoinActivity",'','');?>';
        	var userDeleteJoinActivityUrl = '<?php echo U("Deal/userDeleteJoinActivity",'','');?>';
   	</script>
	<script src = "__PUBLIC__/js/userActivity.js" type = "text/javascript"></script>
	  <script type="text/javascript">
	    $(document).ready(function(){
	    	
	          
	   
	     
	       		var animations		= ['right','left','top','bottom','rightFade','leftFade','topFade','bottomFade'];
				var total_anim		= animations.length;
				//just change this to one of your choice
				var easeType		= 'swing';
				//the speed of each transition
				var animSpeed		= 450;
				//caching
				var $hs_container	= $('#hs_container');
				var $hs_areas		= $hs_container.find('.hs_area');
				
				//first preload all images
                $hs_images          = $hs_container.find('img');
                var total_images    = $hs_images.length;
                var cnt             = 0;
                $hs_images.each(function(){
                    var $this = $(this);
                    $('<img/>').load(function(){
                        ++cnt;
                        if(cnt == total_images){
							$hs_areas.each(function(){
								var $area 		= $(this);
								//when the mouse enters the area we animate the current
								//image (random animation from array animations),
								//so that the next one gets visible.
								//"over" is a flag indicating if we can animate 
								//an area or not (we don't want 2 animations 
								//at the same time for each area)
								$area.data('over',true).bind('mouseenter',function(){
									if($area.data('over')){
										$area.data('over',false);
										//how many images in this area?
										var total		= $area.children().length;
										//visible image
										var $current 	= $area.find('img:visible');
										//index of visible image
										var idx_current = $current.index();
										//the next image that's going to be displayed.
										//either the next one, or the first one if the current is the last
										var $next		= (idx_current == total-1) ? $area.children(':first') : $current.next();
										//show next one (not yet visible)
										$next.show();
										//get a random animation
										var anim		= animations[Math.floor(Math.random()*total_anim)];
										switch(anim){
											//current slides out from the right
											case 'right':
												$current.animate({
													'left':$current.width()+'px'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'left'		: '0px'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;
											//current slides out from the left
											case 'left':
												$current.animate({
													'left':-$current.width()+'px'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'left'		: '0px'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;
											//current slides out from the top	
											case 'top':
												$current.animate({
													'top':-$current.height()+'px'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'top'		: '0px'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;
											//current slides out from the bottom	
											case 'bottom':
												$current.animate({
													'top':$current.height()+'px'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'top'		: '0px'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;
											//current slides out from the right	and fades out
											case 'rightFade':
												$current.animate({
													'left':$current.width()+'px',
													'opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'left'		: '0px',
														'opacity'	: '1'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;
											//current slides out from the left and fades out	
											case 'leftFade':
												$current.animate({
													'left':-$current.width()+'px','opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'left'		: '0px',
														'opacity'	: '1'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;
											//current slides out from the top and fades out	
											case 'topFade':
												$current.animate({
													'top':-$current.height()+'px',
													'opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'top'		: '0px',
														'opacity'	: '1'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;
											//current slides out from the bottom and fades out	
											case 'bottomFade':
												$current.animate({
													'top':$current.height()+'px',
													'opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'top'		: '0px',
														'opacity'	: '1'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;		
											default:
												$current.animate({
													'left':-$current.width()+'px'
												},
												animSpeed,
												easeType,
												function(){
													$current.hide().css({
														'z-index'	: '1',
														'left'		: '0px'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
												break;
										}	
									}
								});
							});
							
							//when clicking the hs_container all areas get slided
							//(just for fun...you would probably want to enter the site
							//or something similar)
							$hs_container.bind('click',function(){
								$hs_areas.trigger('mouseenter');
							});
						}
					}).attr('src',$this.attr('src'));
				});			
	       $("#colorful-flatline").colorfulTab({
	            theme: "flatline"
	        }); 

	    });
	  </script>
</body>
</html>