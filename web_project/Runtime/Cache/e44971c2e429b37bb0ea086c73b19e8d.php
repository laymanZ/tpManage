<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"><!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/calendar.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/custom_2.css" />
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/indexRight.css" />
		<script src="__PUBLIC__/js/modernizr.custom.63321.js"></script>
		<link rel="stylesheet" href="__PUBLIC__/css/zhezhao1.css"> 
		<link rel="stylesheet" href="__PUBLIC__/css/zhezhao2.css"> 
		<style type="text/css">
		.cd-bouncy-nav-modal .cd-close{
			background: url("__PUBLIC__/image/cd-icon-close.svg") no-repeat center center;
		}
		.cd-bouncy-nav a::before
		{
			background-image: url("__PUBLIC__/image/cd-category-icons.svg");
		}
		body
		{
			background: #f9f9f9 url(__PUBLIC__/image/indexBg.jpg);
		}
		</style>
	</head>
	<body>
	<!--  start 导航条 -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu-nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">青协会员</span>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li  class="active"><a href="javascript:void(0)">首页</a></li>
                <li><a href="__URL__/manageAboutPage">关于我们</a></li>
                <li><a href="__URL__/manageAdvicePage">留言建议</a></li>
                <li><a href="__URL__/manageActivity">发布活动</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Hi&nbsp;欢迎你 <span class="caret"></span>&nbsp;<?php echo ($_COOKIE['username']); ?>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#" style="font-weight: bold;">艾斯</a></li>
            <li><a href="#"><img src="__PUBLIC__/image/aisi.jpg"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="__URL__/manageInfo">我的信息</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="__URL__/index">退出</a></li>
          </ul>
        </li>

        <ul class="nav navbar-nav">
                <li><a href="__URL__/managePage">管理中心</a></li>
        </ul>
      </ul>
        </div>
    </div>
</div>
	<div style="float: left;margin-top: 200px;margin-left: 500px;font-family: Muli,'Helvetica Neue','Hiragino Sans GB','WenQuanYi Micro Hei','Microsoft Yahei',sans-serif !important;color: #fff;font-weight: bold;font-size: 50px;">
	管理员，你好<br/><br/>
	<div style="margin-left: -50px">欢迎登录青协会员</div>
	</div>

	<div class="sucaihuo-container">
	<section class="borderAll">
		<a class="cd-bouncy-nav-trigger" href="#0">我的职责</a>
	</section> 

	<div class="cd-bouncy-nav-modal">
		<nav>
			<ul class="cd-bouncy-nav">
				<li><a href="#">公平</a></li>
				<li><a href="#">热情</a></li>
				<li><a href="#">负责</a></li>
				<li><div style="font-size: 80px;width: 500px;text-align: center;">That's All</div></li>
			</ul>
		</nav>
		<a href="#0" class="cd-close">Close modal</a>
	</div>
</div>

	<!-- end 导航条 -->
    <div class="indexRightAll2">
<!-- start 右边信息 -->
	<div class="indexMIRight">
		<img src="__PUBLIC__/image/aisi.jpg"/>
		<hr/>
		<h3><?php echo ($_COOKIE['username']); ?></h3><br/>
		这是我的个性签名<br/>
		
	</div>
<!--  end 右边信息-->
<!-- start 日历 -->
		<div class="container2">	
			<section class="main">
				<div class="custom-calendar-wrap">
					<div id="custom-inner" class="custom-inner">
						<div class="custom-header clearfix">
							<nav>
								<span id="custom-prev" class="custom-prev"></span>
								<span id="custom-next" class="custom-next"></span>
							</nav>
							<h2 id="custom-month" class="custom-month"></h2>
							<h3 id="custom-year" class="custom-year"></h3>
						</div>
						<div id="calendar" class="fc-calendar-container"></div>
					</div>
				</div>
			</section>
		</div><!-- /container -->
<!-- end 日历 -->
	</div>
		<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.calendario.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/data.js"></script>
		<script src="__PUBLIC__/js/zhezhao.js"></script> 
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var transEndEventNames = {
						'WebkitTransition' : 'webkitTransitionEnd',
						'MozTransition' : 'transitionend',
						'OTransition' : 'oTransitionEnd',
						'msTransition' : 'MSTransitionEnd',
						'transition' : 'transitionend'
					},
					transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
					$wrapper = $( '#custom-inner' ),
					$calendar = $( '#calendar' ),
					cal = $calendar.calendario( {
						onDayClick : function( $el, $contentEl, dateProperties ) {

							if( $contentEl.length > 0 ) {
								showEvents( $contentEl, dateProperties );
							}

						},
						caldata : codropsEvents,
						displayWeekAbbr : true
					} ),
					$month = $( '#custom-month' ).html( cal.getMonthName() ),
					$year = $( '#custom-year' ).html( cal.getYear() );

				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );

				function updateMonthYear() {				
					$month.html( cal.getMonthName() );
					$year.html( cal.getYear() );
				}

				// just an example..
				function showEvents( $contentEl, dateProperties ) {

					hideEvents();
					
					var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
						$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

					$events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
					
					setTimeout( function() {
						$events.css( 'top', '0%' );
					}, 25 );

				}
				function hideEvents() {

					var $events = $( '#custom-content-reveal' );
					if( $events.length > 0 ) {
						
						$events.css( 'top', '100%' );
						Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

					}

				}


			
			});
		</script>
	</body>
</html>