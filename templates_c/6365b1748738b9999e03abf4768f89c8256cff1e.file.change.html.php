<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 17:47:13
         compiled from "/var/www/wx-welifemall/templates/change.html" */ ?>
<?php /*%%SmartyHeaderCode:170935175652b806a1b81aa9-19166860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6365b1748738b9999e03abf4768f89c8256cff1e' => 
    array (
      0 => '/var/www/wx-welifemall/templates/change.html',
      1 => 1387791887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170935175652b806a1b81aa9-19166860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b806a1bb9552_05913755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b806a1bb9552_05913755')) {function content_52b806a1bb9552_05913755($_smarty_tpl) {?>﻿<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>故乡人后台管理</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.php">

				<img src="media/image/logo.png" alt="logo" />

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="media/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

			</div>
		</div>
	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>
				
				<br /> <br />

				<li class="start ">

					<a href="index.php">

					<i class="icon-home"></i> 

					<span class="title">主页</span>

					</a>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-cogs"></i> 

					<span class="title">会员管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="address_and_phone.php">

							管理地址和手机</a>

						</li>

					</ul>

				</li>

				<li>

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">订单管理</span>

					<span class="arrow"></span>

					</a>

					<ul class="sub-menu">

						<li>

							<a href="order_manage.php">

							订单管理</a>

						</li>

						<li >

							<a href="order_analysis.php">

							订单统计</a>

						</li>

						<li >

							<a href="delivery.php">

							快递员</a>

						</li>

						<li class="active" >

							<a href="fees.php">

							同城快递配送费用</a>

						</li>

					</ul>

				</li>

	<li class="active">

					<a class="active" href="javascript:;">

					<i class="icon-sitemap"></i> 

					<span class="title">产品管理</span>
					
					<span class="selected"></span>

					<span class="arrow open"></span>

					</a>

					<ul class="sub-menu">

						<li class="active">

							<a href="javascript:;">

							菜品管理

							<span class="arrow open"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="add.php">添加菜品</a></li>

								<li><a href="delete.php">删除菜品</a></li>

								<li class="active"><a href="change.php">修改菜品</a></li>

							</ul>

						</li>

						<li>

							<a href="today_menu.php">

							今日菜单设置

							</a>

						</li>

					</ul>

				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->


			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							产品管理 <small>修改菜品</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.php">Home</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">产品管理</a>

								<i class="icon-angle-right"></i>

							</li>
							
							<li>

								<a href="#">菜品管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">修改菜品</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

					<div class="portlet box purple">
					
				        

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>修改菜品</div>

							</div>

							<div class="portlet-body form">

								<!-- BEGIN FORM-->

								<form action="#" class="form-horizontal">

									<div class="control-group">									

										<label class="control-label">选择菜品</label>

										<div class="controls">

											<select class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">

												<option value="">选择...</option>

												<option value="Category 1">A</option>

											</select>

										</div>
										
									</div>

									<div class="control-group">

										<label class="control-label">菜名</label>

										<div class="controls">

											<input type="text" class="span6 m-wrap" />

										</div>

									</div>

									<div class="control-group">

										<label class="control-label">价格</label>

										<div class="controls">

											<div class="input-prepend input-append">

												<span class="add-on">元</span><input class="m-wrap " type="text" /><span class="add-on"></span>

											</div>

										</div>

									</div>

									<div class="control-group">

										<label class="control-label">类型</label>

										<div class="controls">

											<select class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">

												<option value="">选择...</option>

												<option value="Category 1">中式</option>

												<option value="Category 2">西式</option>

												<option value="Category 3">水果</option>

												<option value="Category 4">甜品</option>

											</select>

										</div>

									</div>

									<div class="control-group">

										<label class="control-label">描述</label>

										<div class="controls">

											<textarea class="span6 m-wrap" rows="3"></textarea>

										</div>

									</div>

									<div class="control-group">

										<label class="control-label">上传菜品照片</label>

										<div class="controls">

											<div class="fileupload fileupload-new" data-provides="fileupload">

												<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">

													<img src="media/image/AAAAAA&amp;text=no+image" alt="" />

												</div>

												<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

												<div>

													<span class="btn btn-file"><span class="fileupload-new">选择照片</span>

													<span class="fileupload-exists">更改照片</span>

													<input type="file" class="default" /></span>

													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">删除</a>

												</div>

											</div>

										</div>

									</div>

								

								

									<div class="form-actions">

										<button type="submit" class="btn blue">提交</button>

										<button type="button" class="btn">取消</button>                            

									</div>

								</form>

								<!-- END FORM-->       

							</div>

						</div>

			</div>

			<!-- END PAGE CONTAINER-->       

		</div>

		<!-- BEGIN PAGE -->     

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script type="text/javascript" src="media/js/jquery.gritter.js"></script>

	<script type="text/javascript" src="media/js/jquery.pulsate.min.js"></script>

	<script type="text/javascript" src="media/js/jquery.bootpag.min.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="media/js/app.js"></script>

	<script src="media/js/ui-general.js"></script>     

	<!-- END PAGE LEVEL SCRIPTS -->

	<script>

		jQuery(document).ready(function() {       

		   // initiate layout and plugins

		   App.init();

		   UIGeneral.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html><?php }} ?>
