<!DOCTYPE html>
<html>
	<head>
		<title>仪表盘 | 时光碎片</title>
		<meta property="qc:admins" content="174222754064155621755646375" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="UTF-8" />
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="时光碎片网 -是一个集创意分享,商品交易及职位信息发布,经验分享等为一体的综合服务社区,旨在让我们的生活更加充实。" />
		<meta name="keywords" content="时光碎片 TimeFragment 创意汇 去旅行 酷工作 尚品汇 时间线 互动社区 爱生活 兼职信息 招聘 实习 工作机会 二手交易 创意分享 美文" />
		<meta name="author" content="Ri Xu">
		<meta name="og:description" content="时光碎片 | Time Fragment">
		<meta name="og:image" content="images/timefragment.png">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@timefragment">
		<meta name="twitter:title" content="时光碎片 | Time Fragment">
		<meta name="twitter:creator" content="@timefragment">
		<meta name="twitter:domain" content="timefragment.com">
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		{{-- Favicons --}}

		<link rel="shortcut icon" href="{{ route('home')}}/images/icon/ico-16.ico" sizes="16x16">
		<link rel="apple-touch-icon" href="{{ route('home')}}/images/icon/ico-57.png" sizes="57x57">
		<link rel="apple-touch-icon" href="{{ route('home')}}/images/icon/ico-72.png" sizes="72x72">
		<link rel="apple-touch-icon" href="{{ route('home')}}/images/icon/ico-114.png" sizes="114x114">
		<link rel="apple-touch-icon" href="{{ route('home')}}/images/icon/ico-144.png" sizes="144x144">
		{{ HTML::style('assets/css/fonts.googleapis.min.css') }}
		{{ HTML::style('assets/css/admin.min.css') }}
		{{ style('font-awesome-4.1.0') }}
		{{-- Js Library --}}

		{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}

		{{ script('jquery-2.1.1') }}

		{{-- Include all compiled plugins (below), or include individual files as needed --}}

		{{-- script('bootstrap-3.0.3') --}}
		{{-- script('bootstrap-select') --}}
		{{-- script('modernizr-2.8.1') --}}

		{{ Minify::javascript(array(
			'/assets/bootstrap-3.0.3/js/bootstrap.min.js',
			'/assets/bootstrap-select/js/bootstrap-select.min.js',
			'/assets/modernizr-2.8.1/modernizr-2.8.1.min.js',
			'/assets/js/admin.js',
			'/assets/js/retina-1.3.0.min.js',

			'/assets/js/lib/mosaicflow.js',
			'/assets/js/lib/snap.svg-0.2.0.min.js',
			'/assets/js/lib/pushy.js',
			'/assets/js/lib/moment.js',
			'/assets/js/lib/jquery.timeago.js',
			'/assets/js/lib/jquery.eventCalendar.js',
			'/assets/js/lib/icheck.js',
			'/assets/js/lib/lifestream.js',
			'/assets/js/lib/morris.js',
			'/assets/js/lib/easypiechart.js',
			'/assets/js/lib/sparkline.js',
			'/assets/js/lib/backstretch.js',
			'/assets/js/lib/city.js',
			'/assets/js/lib/notify.js',

			'/assets/brainsocket/lib/brain-socket.min.js'
		)) }}

		{{-- Album Library --}}

		{{ HTML::script('assets/js/lib/dropzone-3.10.2.js') }}
		{{ HTML::script('assets/js/lib/min/raphael-2.1.2.min.js') }}

		{{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}

			<!--[if lt IE 9]>
				{{ script('html5shiv-3.7.0') }}
				{{ HTML::script('assets/js/respond.min.js') }}
			<![endif]-->

		{{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}

		{{-- Js Library --}}
	</head>