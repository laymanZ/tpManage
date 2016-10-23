<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>青协会员管理</title>

		<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/manage.css" />
		
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css" />
	<!-- 	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/htmleaf-demo.css"> -->
		<!-- <link rel="stylesheet" href="__PUBLIC__/css/semantic.min.css"> -->
		<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/jquery.mmenu.css" />
		<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/jquery.mmenu.dragopen.css" />

		<script type="text/javascript">
        	var manageAgreeRegistUrl = '<?php echo U("Deal/manageAgreeRegist",'','');?>';
        	var manageYiRuBlackUrl = '<?php echo U("Deal/manageYiRuBlack",'','');?>';
        	var manageDeleteUnReadUrl = '<?php echo U("Deal/manageDeleteUnRead",'','');?>';
        	var manageDeleteReadUrl = '<?php echo U("Deal/manageDeleteRead",'','');?>';
        	var manageYiChuBlackUrl = '<?php echo U("Deal/manageYiChuBlack",'','');?>';
        	var manageDeleteChuBlackUrl = '<?php echo U("Deal/manageDeleteChuBlack",'','');?>';
        	var manageUserToBlackUrl = '<?php echo U("Deal/manageUserToBlack",'','');?>';
        	var manageUserDeleteUrl = '<?php echo U("Deal/manageUserDelete",'','');?>';
        	var manageUserBianJiUrl = '<?php echo U("Deal/manageUserBianJi",'','');?>';
        	var manageDeleteActivityUrl = '<?php echo U("Deal/manageActivityDelete",'','');?>';
        	var manageEditActivityUrl = '<?php echo U("Deal/manageActivityEdit",'','');?>';
        	var manageDeleteUserActivityUrl = '<?php echo U("Deal/manageDeleteUserActivity",'','');?>';
   		 </script>

		<!-- for the one page layout -->
		<style type="text/css">
			#intro,
			#first,
			#second,
			#third,
			#forth,
			#fifth
			{
				height: 1080px;
				text-align: center;

			}
			#intro
			{
				padding-top: 0;
			}
			#first,
			#second,
			#third,
			#forth,
			#fifth
			{
				border-top: 1px solid #ccc;
				padding-top: 150px;
			}
			#intro table{
				width: 1000px;
				margin-left: 100px;
			}
			th{
				text-align: center;
			}
			body{
				background-color: #F9F9F9;
			}
			.container {
			width: 50%;
			margin: 50px auto;
		}
		.column {
			margin-bottom: 20px;
		}
		
		li:before {display: none;}
		ul.ui.list {margin-left: 0}
		</style>
		
		<!-- for the fixed header -->
		<style type="text/css">
			.header,
			.footer
			{
				box-sizing: border-box;
				width: 100%;
				position: fixed;
			}
			.header
			{
				top: 0;
			}
			.footer
			{
				bottom: 0;
			}
			
		</style>
		
		<script type="text/javascript" src="__PUBLIC__/js/hammer.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/manage.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.mmenu.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.mmenu.dragopen.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.mmenu.fixedelements.min.js"></script>
		<script type="text/javascript">
			$(function() {
				var $menu = $('nav#menu'),
					$html = $('html, body');

				$menu.mmenu({
					dragOpen: true
				});

				var $anchor = false;
				$menu.find( 'li > a' ).on(
					'click',
					function( e )
					{
						$anchor = $(this);
					}
				);

				var api = $menu.data( 'mmenu' );
				api.bind( 'closed',
					function()
					{
						if ( $anchor )
						{
							var href = $anchor.attr( 'href' );
							$anchor = false;

							//	if the clicked link is linked to an anchor, scroll the page to that anchor 
							if ( href.slice( 0, 1 ) == '#' )
							{
								$html.animate({
									scrollTop: $( href ).offset().top
								});	
							}
						}
					}
				);
			});
		</script>
	</head>
	<body>

		<div id="page">
			<div class="header Fixed">
				<a href="#menu"></a>
				青协会员管理
			</div>
			<div class="content" id="content">
			<div id="intro">
				<div class = "headMessageT">下面是青协所有会员的信息，你可以点击此按钮&nbsp;&nbsp;<button type="button" class="btn btn-primary" id="handleM">操作</button>&nbsp;&nbsp;进行一些操作
				</div>
					
				 	<span class="inputYang"><input type="text" placeholder="Search by name..."></span>
				 	
						<?php if(is_array($userInfo)): $i = 0; $__LIST__ = $userInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mInfo): $mod = ($i % 2 );++$i;?><ul>
							<li class = "item">
				    			<img src="__PUBLIC__/image/helen.jpg">
				    			
				  				<div class="name"><?php echo ($mInfo["username"]); ?></div>
				  				
				   		 		<div class="infoOther"><?php echo ($mInfo["mail"]); ?></div>
				    			<div class="infoOther2"><?php echo ($mInfo["time"]); ?></div>
				    			<div class="infoOther3"><input type="checkbox" class="userCheck"></input></div>
				    			<div class="infoOther4"><a href="javascript:void(0)" class="userToBlack" untitle13=<?php echo ($mInfo["mail"]); ?> untitle14=<?php echo ($mInfo["username"]); ?> >移至黑名单</a></div>
				    			<div class="infoOther5"><a href="javascript:void(0)" class="userRemove" untitle15=<?php echo ($mInfo["mail"]); ?> untitle16=<?php echo ($mInfo["username"]); ?> >删除</a></input></div>
				    			<div class="infoOther6"><a href="javascript:void(0)" class="userBianJi" untitle17=<?php echo ($mInfo["mail"]); ?> untitle18=<?php echo ($mInfo["username"]); ?>>编辑</a></div>
				    		</li>
						</ul><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php echo ($page3); ?>
			</div>
			<div id="first">

				<div class = "headMessageT">下面是您的未读消息，是用户的注册信息，你可以点击此按钮&nbsp;&nbsp;<button type="button" class="btn btn-primary" id="handleUnRead">操作</button>&nbsp;&nbsp;进行一些操作
				</div>
					<table class="table table-hover">
   						<thead>
    					 <tr>
      					 	<th class="urReadHao">序号</th>
       						<th>用户名</th>
       						<th>邮箱</th>
       						<th>注册时间</th>
     					</tr>
   						</thead>
   						<tbody>
   						<?php if(is_array($unreadInfo)): $i = 0; $__LIST__ = $unreadInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$unInfo): $mod = ($i % 2 );++$i;?><tr>
       						<td class="unReadC"><input type="checkbox"  class="unReadCheck"></input></td>
       						<td><?php echo ($unInfo["username"]); ?></td>
       						<td><?php echo ($unInfo["mail"]); ?></td>
       						<td><?php echo ($unInfo["time"]); ?></td>
       						<td class="unReadAgree"><a href="javascript:void(0)" class="agreeRegist" unTitle=<?php echo ($unInfo["mail"]); ?> unTitle2=<?php echo ($unInfo["username"]); ?> >同意注册</a></td>
       						<td class="unReadYiru"><a href="javascript:void(0)" class="yiRu" unTitle3=<?php echo ($unInfo["mail"]); ?> unTitle4=<?php echo ($unInfo["username"]); ?>>移入黑名单</a></td>
       						<td class="unReadShanchu"><a href="javascript:void(0)" class="unReadRemove" unTitle5=<?php echo ($unInfo["mail"]); ?> unTitle6=<?php echo ($unInfo["username"]); ?>>删除</a></td>
     					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
   						</tbody>
 					</table>
 					<?php echo ($page1); ?>
					<p><a href="#menu">打开菜单</a></p>
				</div>
				<div id="second">
					<div class = "headMessageT">下面是您的已读消息，是您已同意用户的注册信息，你可以点击此按钮&nbsp;&nbsp;<button type="button" class="btn btn-primary" id="handleRead">操作</button>&nbsp;&nbsp;进行一些操作
				</div>
					<table class="table table-hover">
   						<thead>
    					 <tr>
      					 	<th class="readHao">序号</th>
       						<th>用户名</th>
       						<th>邮箱</th>
       						<th>注册时间</th>
     					</tr>
   						</thead>
   						<tbody>
   						<?php if(is_array($readmessageInfo)): $i = 0; $__LIST__ = $readmessageInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rInfo): $mod = ($i % 2 );++$i;?><tr>
       						<td class="readC"><input type="checkbox" class="readCheck"></input></td>
       						<td><?php echo ($rInfo["username"]); ?></td>
       						<td><?php echo ($rInfo["mail"]); ?></td>
       						<td><?php echo ($rInfo["time"]); ?></td>
       						
       						<td class="readShanchu"><a href="javascript:void(0)" class= "readRemove" unTitle8=<?php echo ($rInfo["username"]); ?> unTitle7=<?php echo ($rInfo["mail"]); ?>>删除</a></td>
     					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
   						</tbody>
 					</table>
 					<?php echo ($page2); ?>

					<p><a href="#menu">打开菜单</a></p>
				</div>
				<div id="third">
					<div class = "headMessageT">下面是黑名单中用户的信息，你可以点击此按钮&nbsp;&nbsp;<button type="button" class="btn btn-primary" id="handleBlack">操作</button>&nbsp;&nbsp;进行一些操作
					</div>
					<table class="table table-hover">
   						<thead>
    					 <tr>
      					 	<th class="blackHao">序号</th>
       						<th>用户名</th>
       						<th>邮箱</th>
       						<th>注册时间</th>
     					</tr>
   						</thead>
   						<tbody>
   						<?php if(is_array($blacklistInfo)): $i = 0; $__LIST__ = $blacklistInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bInfo): $mod = ($i % 2 );++$i;?><tr>
       						<td class="blackC"><input type="checkbox" class="blackCheck"></input></td>
       						<td><?php echo ($bInfo["username"]); ?></td>
       						<td><?php echo ($bInfo["mail"]); ?></td>
       						<td><?php echo ($bInfo["time"]); ?></td>
       						
       						<td class="blackYiChu"><a href="javascript:void(0)" class="blackYiDong" unTitle9=<?php echo ($bInfo["mail"]); ?> unTitle10=<?php echo ($bInfo["username"]); ?>>移出黑名单</a></td>
       						<td class="blackShanchu"><a href="javascript:void(0)" class="blackRemove" unTitle11=<?php echo ($bInfo["mail"]); ?> unTitle12=<?php echo ($bInfo["username"]); ?>>删除</a></td>
     					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
   						</tbody>
 					</table>
 					<?php echo ($page4); ?>
						<a href="#menu">打开菜单</a></p>
				</div>
				<div id="forth">
					<div class = "headMessageT">下面是你的已发布的活动，你可以点击此按钮&nbsp;&nbsp;<button type="button" class="btn btn-primary" id="handleActivity">操作</button>&nbsp;&nbsp;进行一些操作
					</div>
					<table class="table table-hover">
   						<thead>
    					 <tr>
      					 	<th class="activityHao">序号</th>
       						<th>活动名称</th>
       						<th>开始时间</th>
       						<th>结束时间</th>
       						<th>地点</th>
     					</tr>
   						</thead>
   						<tbody>
   						<?php if(is_array($activityInfo)): $i = 0; $__LIST__ = $activityInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aInfo): $mod = ($i % 2 );++$i;?><tr>
       						<td class="aXuHao"><input type="checkbox" class="activityCheck"></input></td>
       						<td><?php echo ($aInfo["aname"]); ?></td>
       						<td><?php echo ($aInfo["astime"]); ?></td>
       						<td><?php echo ($aInfo["aendtime"]); ?></td>
       						<td><?php echo ($aInfo["aplace"]); ?></td>
       						
       						<td class="aC"><a href="javascript:void(0)" class="aDelete" unTitle13=<?php echo ($aInfo["aname"]); ?> >删除</a></td>
       						<td class="aBianji"><a href="javascript:void(0)" class="aEdit" unTitle14=<?php echo ($aInfo["aname"]); ?> unTitle15=<?php echo ($aInfo["astime"]); ?>
       						unTitle16=<?php echo ($aInfo["aendtime"]); ?> unTitle17=<?php echo ($aInfo["aplace"]); ?>>编辑</a></td>
     					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
   						</tbody>
 					</table>
 					<?php echo ($page5); ?>
						<a href="#menu">打开菜单</a></p>
				</div>


				<div id="fifth">
					<div class = "headMessageT">下面是活动报名用户的信息，你可以点击此按钮&nbsp;&nbsp;<button type="button" class="btn btn-primary" id="handleUserActivity">操作</button>&nbsp;&nbsp;进行一些操作
					</div>
					<table class="table table-hover">
   						<thead>
    					 <tr>
      					 	<th class="userActivityHao">序号</th>
       						<th>用户名</th>
       						<th>已报名活动</th>
     					</tr>
   						</thead>
   						<tbody>
   						<?php if(is_array($useractivityInfo)): $i = 0; $__LIST__ = $useractivityInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$uaInfo): $mod = ($i % 2 );++$i;?><tr>
       						<td class="userActivityC"><input type="checkbox" class="userActivityCheck"></input></td>
       						<td><?php echo ($uaInfo["username"]); ?></td>
       						<td><?php echo ($uaInfo["aname"]); ?></td>
       						
       						
       						<td class="userActivityShanchu"><a href="javascript:void(0)" class="userActivityRemove" userActivity1=<?php echo ($uaInfo["username"]); ?> userActivity2=<?php echo ($uaInfo["aname"]); ?>>删除</a></td>
     					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
   						</tbody>
 					</table>
 					<?php echo ($page6); ?>
						<a href="#menu">打开菜单</a></p>
				</div>
			</div>
			<div class="footer Fixed">
				CopyRight @LZW 2016 青协会员
			</div>
			<nav id="menu" style="background-color: #fff;">
				<ul>
					<div class="welcome">欢迎,root</div>
					<img src="__PUBLIC__/image/aisi.jpg">
					<br/>
					<div class="message">青协，热爱你的生活</div>
					<li><a href="__URL__/manageIndexPage"><div class="leftShow">首页</div></a></li>
					<li><a href="#content"><div class="leftShow">查看用户</div></a></li>
					<li><a href="#first"><div class="leftShow">未读消息<div class="leftUp"><?php echo ($_COOKIE['unreadCount']); ?></div></div></a></li>
					<li><a href="#second"><div class="leftShow">已读消息<div class="leftUp"><?php echo ($_COOKIE['readCount']); ?></div></div></a></li>
					<li><a href="#third"><div class="leftShow">黑名单</div></a></li>
					<li><a href="#forth"><div class="leftShow">已发布活动</div></a></li>
					<li><a href="#fifth"><div class="leftShow">报名用户</div></a></li>
				</ul>
			</nav>
		</div>



<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content" style="width:300px;margin:auto;margin-top: 200px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">操作提醒</h4>
            </div>
            <div class="modal-body">
                <p id="manageMessageH"></p>
            </div>
            <div class="modal-footer" style="height:60px;">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-top: 0px;">确定</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="mymodal2">
    <div class="modal-dialog">
        <div class="modal-content" style="width:300px;margin:auto;margin-top: 200px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">操作提醒</h4>
            </div>
            <div class="modal-body">
                <form id='editForm'>
                <label>活动名称:</label>
              <p id="activityNameEdit"></p>
              <label for="sTimeEdit">开始时间:</label>
              <input type="datetime" class="form-control"  id="sTimeEdit" name="sTimeEdit" placeholder="请输入开始时间" required="required">
             <label for="eTimeEdit">结束时间:</label>
              <input type="datetime" class="form-control" id="eTimeEdit" placeholder="请输入结束时间" required="required">  
               <label for="aPlaceEdit">活动地点:</label>
              <input type="text" class="form-control" id="aPlaceEdit" placeholder="请输入活动地点" required="required">

               <div class="modal-footer" style="height:60px;">
				<button type="submit" class="btn btn-primary" style="margin-top: 0px;" >确定</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" style="margin-top: 0px;">取消</button>
            	</div>
         	</form>
            </div>
           
        </div>
    </div>
</div>
	
	<script src="__PUBLIC__/js/jquery.easysearch.js"></script>
	<script>
		$('input').jSearch({ 
		    selector  : 'ul',
		    child : 'li div.name',
		    minValLength: 0,
		    Found : function(elem, event){
		        $(elem).parent().parent().show();
		    },
		    NotFound : function(elem, event){
		        $(elem).parent().parent().hide();
		    },
		    After : function(t){
		        if (!t.val().length) $('ul li').show();
		    }
		});
	</script>
	</body>
</html>