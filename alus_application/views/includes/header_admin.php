<!DOCTYPE html>
<html lang="en">
<head>
	<title>Metrasat Sistem Operasional & Maintenance</title>
	<meta charset="utf-8">
	<!-- Global stylesheets -->
	<link href="<?php echo base_url();?>/metrasat-themes/css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/common.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/form.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/standard.css" rel="stylesheet" type="text/css">
	<!-- Comment/uncomment one of these files to toggle between fixed and fluid layout -->
	<!--<link href="css/960.gs.css" rel="stylesheet" type="text/css">-->
	<link href="<?php echo base_url();?>/metrasat-themes/css/960.gs.fluid.css" rel="stylesheet" type="text/css">
	<!-- Custom styles -->
	<link href="<?php echo base_url();?>/metrasat-themes/css/simple-lists.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/block-lists.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/planning.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/table.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/calendars.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/wizard.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/metrasat-themes/css/gallery.css" rel="stylesheet" type="text/css">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/metrasat-themes/favicon.ico">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>/metrasat-themes/favicon-large.png">
</head>

<body>
<!-- The template uses conditional comments to add wrappers div for ie8 and ie7 - just add .ie or .ie7 prefix to your css selectors when needed -->
<!--[if lt IE 9]><div class="ie"><![endif]-->
<!--[if lt IE 8]><div class="ie7"><![endif]-->
	<!-- Header -->
	<!-- Server status -->
<header>
	<div class="container_12">
	<p id="skin-name"><small>Metrasat System<br> Operasional & Maintenan</small> <strong>0.1</strong></p>
	<div class="server-info">Server: <strong><?php $version = apache_get_version(); echo $version; ?></strong></div>
	<div class="server-info">Php: <strong><?php $php_version= phpversion(); echo $php_version; ?></strong></div>
	</div>
</header>
<!-- End server status -->
<!-- Main nav -->
<nav id="main-nav">
	<ul class="container_12">
		<li class="home current-disable"><a href="#" title="Home">Home</a>
			<ul>
				<li class="current-disable"><a href="#" title="Dashboard">Dashboard</a></li>
				<li class="with-menu"><a href="#" title="My settings">My settings</a>
				<div class="menu">
					<img src="<?php echo base_url();?>/metrasat-themes/images/menu-open-arrow.png" width="16" height="16">
						<ul>
							<li class="icon_address"><a href="#">Browse by</a>
								<ul>
									<li class="icon_blog"><a href="#">Blog</a>
										<ul>
											<li class="icon_alarm"><a href="#">Recents</a>
												<ul>
													<li class="icon_building"><a href="#">Corporate blog</a></li>
													<li class="icon_newspaper"><a href="#">Press blog</a></li>
												</ul>
											</li>
											<li class="icon_building"><a href="#">Corporate blog</a></li>
											<li class="icon_computer"><a href="#">Support blog</a></li>
											<li class="icon_search"><a href="#">Search...</a></li>
										</ul>
									</li>
									<li class="icon_server"><a href="#">Website</a></li>
									<li class="icon_network"><a href="#">Domain</a></li>
								</ul>
						</li>
						<li class="icon_export"><a href="#">Export</a>
							<ul>
								<li class="icon_doc_excel"><a href="#">Excel</a></li>
								<li class="icon_doc_csv"><a href="#">CSV</a></li>
								<li class="icon_doc_pdf"><a href="#">PDF</a></li>
								<li class="icon_doc_image"><a href="#">Image</a></li>
								<li class="icon_doc_web"><a href="#">Html</a></li>
							</ul>
						</li>
						<li class="sep"></li>
						<li class="icon_refresh"><a href="#">Reload</a></li>
						<li class="icon_reset">Reset</li>
						<li class="icon_search"><a href="#">Search</a></li>
						<li class="sep"></li>
						<li class="icon_terminal"><a href="#">Custom request</a></li>
						<li class="icon_battery"><a href="#">Stats server load</a></li>
					</ul>
				</div>
				</li>
			</ul>
		</li>
		<li class="write current"><a href="#" title="Siomai">Siomai</a>
			<ul>
				<li><a href="<?php echo base_url(); ?>document" title="Document">Dokumen</a></li>
				<li><a href="<?php echo base_url(); ?>departement" title="Departement">Departemen</a></li>
				<li><a href="<?php echo base_url(); ?>sio_form_order" title="Form Order">Form Order</a></li>
				<li><a href="<?php echo base_url(); ?>sio_perangkat_operasional" title="Perangkat Operasional">Perangkat Operasional</a></li>
				<li><a href="<?php echo base_url(); ?>login/list_user" title="Perangkat Operasional">Users</a></li>
			</ul>
		</li>
		<li class="comments"><a href="#" title="Monel">Monel</a>
			<ul>
				<li><a href="#" title="Manage">Manage</a></li>
				<li><a href="#" title="Spams">Spams</a></li>
			</ul>
		</li>
		<li class="medias"><a href="#" title="Workshop">Workshop</a>
			<ul>
				<li><a href="#" title="Browse">Browse</a></li>
				<li><a href="#" title="Add file">Add file</a></li>
				<li><a href="#" title="Manage">Manage</a></li>
				<li><a href="#" title="Settings">Settings</a></li>
			</ul>
		</li>
		<li class="users"><a href="#" title="Logistic">Logistic</a>
			<ul>
				<li><a href="#" title="Browse">List</a></li>
				<li><a href="#" title="Add user">Add user</a></li>
				<li><a href="#" title="Settings">Settings</a></li>
			</ul>
		</li>
		<li class="stats"><a href="#" title="Warehouse">Warehouse</a></li>
		<li class="settings"><a href="#" title="Procurement">Procurement</a></li>
		<li class="backup"><a href="#" title="Asset">Asset</a></li>
	</ul>
</nav>
<!-- End main nav -->
<!-- Sub nav -->
<div id="sub-nav">
	<div class="container_12">
		<a href="#" title="Help" class="nav-button"><b>Help</b></a>
			<form id="search-form" name="search-form" method="post" action="search.html">
				<input type="text" name="s" id="s" value="" title="Search admin..." autocomplete="off">
			</form>
	</div>
</div>
<!-- End sub nav -->
<!-- Status bar -->
<div id="status-bar"><div class="container_12">
	<ul id="status-infos">
		<li class="spaced">Logged as: <strong><?php echo $this->session->userdata('username'); ?></strong></li>
		<li>
			<a href="#" class="button" title="5 messages"><img src="<?php echo base_url();?>/metrasat-themes/images/icons/fugue/mail.png" width="16" height="16"> <strong>5</strong></a>
			<div id="messages-list" class="result-block">
				<span class="arrow"><span></span></span>
					<ul class="small-files-list icon-mail">
						<li>
							<a href="#"><strong>10:15</strong> Please update...<br>
							<small>From: System</small></a>
						</li>
						<li>
							<a href="#"><strong>Yest.</strong> Hi<br>
							<small>From: Jane</small></a>
						</li>
						<li>
							<a href="#"><strong>Yest.</strong> System update<br>
							<small>From: System</small></a>
						</li>
						<li>
							<a href="#"><strong>2 days</strong> Database backup<br>
							<small>From: System</small></a>
						</li>
						<li>
							<a href="#"><strong>2 days</strong> Re: bug report<br>
							<small>From: Max</small></a>
						</li>
					</ul>
					<p id="messages-info" class="result-info"><a href="#">Go to inbox &raquo;</a></p>
				</div>
			</li>
			<li>
				<a href="#" class="button" title="25 comments"><img src="<?php echo base_url();?>/metrasat-themes/images/icons/fugue/balloon.png" width="16" height="16"> <strong>25</strong></a>
				<div id="comments-list" class="result-block">
					<span class="arrow"><span></span></span>

					<ul class="small-files-list icon-comment">
						<li>
							<a href="#"><strong>Jane</strong>: I don't think so<br>
							<small>On <strong>Post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Ken_54</strong>: What about using a different...<br>
							<small>On <strong>Post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Jane</strong> Sure, but no more.<br>
							<small>On <strong>Another post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Max</strong>: Have you seen that...<br>
							<small>On <strong>Post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Anonymous</strong>: Good luck!<br>
							<small>On <strong>My first post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Sébastien</strong>: This sure rocks!<br>
							<small>On <strong>Another post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>John</strong>: Me too!<br>
							<small>On <strong>Third post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>John</strong> This can be solved by...<br>
							<small>On <strong>Another post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Jane</strong>: No prob.<br>
							<small>On <strong>Post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Anonymous</strong>: I had the following...<br>
							<small>On <strong>My first post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Anonymous</strong>: Yes<br>
							<small>On <strong>Post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Lian</strong>: Please make sure that...<br>
							<small>On <strong>Last post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Ann</strong> Thanks!<br>
							<small>On <strong>Last post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Max</strong>: Don't tell me what...<br>
							<small>On <strong>Post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Gordon</strong>: Here is an article about...<br>
							<small>On <strong>My another post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Lee</strong>: Try to reset the value first<br>
							<small>On <strong>Last title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Lee</strong>: Sure!<br>
							<small>On <strong>Second post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Many</strong> Great job, keep on!<br>
							<small>On <strong>Third post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>John</strong>: I really like this<br>
							<small>On <strong>First title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Paul</strong>: Hello, I have an issue with...<br>
							<small>On <strong>My first post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>June</strong>: Yuck.<br>
							<small>On <strong>Another title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Jane</strong>: Wow, sounds amazing, do...<br>
							<small>On <strong>Another title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Esther</strong>: Man, this is the best...<br>
							<small>On <strong>Another post</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>Max</strong>: Thanks!<br>
							<small>On <strong>Post title</strong></small></a>
						</li>
						<li>
							<a href="#"><strong>John</strong>: I'd say it is not safe...<br>
							<small>On <strong>My first post</strong></small></a>
						</li>
					</ul>

					<p id="comments-info" class="result-info"><a href="#">Manage comments &raquo;</a></p>
				</div>
			</li>
			<li><a href="<?php echo base_url();?>logout" class="button red" title="Logout"><span class="smaller">LOGOUT</span></a></li>
		</ul>
		<ul id="breadcrumb">
			<li><a href="#" title="Home">Home</a></li>
			<li><a href="#" title="Dashboard">Dashboard</a></li>
		</ul>
</div></div>
<!-- End status bar -->
<div id="header-shadow"></div>
<!-- End header -->
<!-- Always visible control bar -->
<!--<div id="control-bar" class="grey-bg clearfix"><div class="container_12">
	<div class="float-left">
		<button type="button"><img src="<?php echo base_url();?>/metrasat-themes/images/icons/fugue/navigation-180.png" width="16" height="16"> Back to list</button>
	</div>
	<div class="float-right">
		<button type="button" disabled="disabled">Disabled</button>
		<button type="button" class="red">Cancel</button>
		<button type="button" class="grey">Reset</button>
		<button type="button"><img src="<?php echo base_url();?>/metrasat-themes/images/icons/fugue/tick-circle.png" width="16" height="16"> Save</button>
	</div>
</div></div>-->
<!-- End control bar -->
<article class="container_12">

