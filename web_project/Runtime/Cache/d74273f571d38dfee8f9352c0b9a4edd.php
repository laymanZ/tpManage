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

		<link rel="stylesheet" href="__PUBLIC__/css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="__PUBLIC__/css/back.css"> <!-- Gem style -->
		<link rel="stylesheet" href="__PUBLIC__/css/main.css" />
		<link rel="stylesheet" href="__PUBLIC__/css/sgz.css" />
		<script src="__PUBLIC__/js/modernizr.js"></script> <!-- Modernizr -->


		<script src="__PUBLIC__/js/modernizr.custom.63321.js"></script>
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
                <li class="active"><a href="javascript:void(0)">首页</a></li>
                <li><a href="__URL__/aboutPage">关于我们</a></li>
                <li><a href="__URL__/advicePage">留言建议</a></li>
                <li><a href="__URL__/userActivity">活动报名</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
        	<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          		Hi&nbsp;欢迎你 <span class="caret"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($_COOKIE['username']); ?>
          		</a>
          		<ul class="dropdown-menu">
            		<li><a href="#" style="font-weight: bold;">艾斯</a></li>
           			<li><a href="#"><img src="__PUBLIC__/image/aisi.jpg"></a></li>
            		<li role="separator" class="divider"></li>
            		<li><a href="__URL__/userInfo">我的信息</a></li>
            		<li role="separator" class="divider"></li>
            		<li><a href="__URL__/index">退出</a></li>
          		</ul>
        	</li>
      </ul>
        </div>
    </div>
</div>
	<!-- end 导航条 -->
	<!-- 时光轴start -->

<section id="cd-timeline" class="cd-container" style="margin-left: 100px;padding-top: 50px;">
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
			<img src="__PUBLIC__/image/cd-icon-picture.svg" alt="Picture">
		</div>

		<div class="cd-timeline-content">
			<h2>青协见面会</h2>
			<p>这一天，正式成为青协的一员，在见面会上完了许多游戏，并且认识了很多充满爱心的师兄师姐，他们每一个人都值得我们学习，我们也要好好努力，为青协贡献自己的力量，
			让青协更加强大。</p>
			<a href="javascript:void(0)" class="cd-read-more" target="_blank">First</a>
			<span class="cd-date">2013-10-10号</span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="__PUBLIC__/image/cd-icon-movie.svg" alt="Movie">
		</div>

		<div class="cd-timeline-content">
			<h2>爱心家教</h2>
			<p>许多志愿者都是第一天满怀憧憬与炽热的心来参加爱心家教，地方不大，却充满欢声笑语，时间定格在每个人的笑容上，同时，我们还帮当地打扫了公共场地，和每个小朋友相处无时无刻让人感受到快乐，虽然调皮，但这是一次难忘的回忆。</p>
			<a href="javascript:void(0)" class="cd-read-more" target="_blank">Second</a>
			<span class="cd-date">2013-11-01</span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
			<img src="__PUBLIC__/image/cd-icon-picture.svg" alt="Picture">
		</div>

		<div class="cd-timeline-content">
			<h2>天使行动</h2>
			<p>回收旧衣物一直是天使行动的有意义的内容，让我们懂得废物利用，同时许多人也都积极贡献自己的力量，都是为了更多需要这些东西的地方，每次收获满满，既让我们感慨，又让我们欣慰，每个活动都让我们充满力量。</p>
			<a href="javascript:void(0)" class="cd-read-more" target="_blank">Third</a>
			<span class="cd-date">2013-11-20</span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="__PUBLIC__/image/cd-icon-movie.svg" alt="Movie">
		</div>

		<div class="cd-timeline-content">
			<h2>环保宣传活动</h2>
			<p>我们跟着师兄师姐每个宿舍进行宣传，同时还在公共场所申请了摆摊宣传，很多人都积极参加，宣传的时候很紧张，不过这是有意义的行为，让我们每个人都感到很自豪，活动过程中我们本身也学到了一些。</p>
			<a href="javascript:void(0)" class="cd-read-more" target="_blank">Forth</a>
			<span class="cd-date">2013-12-06</span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="__PUBLIC__/image/cd-icon-location.svg" alt="Location">
		</div>

		<div class="cd-timeline-content">
			<h2>迎新活动</h2>
			<p>酷热的一天，却充满干劲，每个青协的成员都在热情的帮助新来报道的师弟师妹，当年我们师兄师姐也是这样过来的，路上擦肩而过总是有闪亮的青协徽标在提着行李，每次听到新来的同学的“谢谢”，让我们十分感动，Because I'm a volunteer!</p>
			<a href="javascript:void(0)" class="cd-read-more" target="_blank">Fifth</a>
			<span class="cd-date">2014-09-14</span>
		</div>
	</div>
</section>
	<!-- </main> -->
	<a href="#0" class="cd-top">Top</a>

	<!-- 时光轴end -->









    <div class="indexRightAll" >
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
<a href="#0" class="cd-top" style="background:  url(__PUBLIC__/image/top.png) no-repeat center 50%;">Top</a>
	</div>
		<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.1.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.calendario.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/data.js"></script>
		<script src="__PUBLIC__/js/main.js"></script>
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