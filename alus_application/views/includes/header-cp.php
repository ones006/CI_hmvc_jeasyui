<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>Alus HMVC Framework</title>
	<meta charset="utf-8">
	<!-- Global stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>alus_assets/themes/default/layout.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>alus_assets/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>alus_assets/themes/icon.css">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="favicon-large.png">
	<script type="text/javascript" src="<?php echo base_url();?>alus_assets/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>alus_assets/jquery.easyui.min.js"></script>

</head>
<body>
<div id="wrapper" class="clearfix">
	
	<div id="top">
		<div id="header">
			<div id="title">Alus Framework-Backend</div>
			
			<div id="info">
				<h4>Welcome <?php echo $this->session->userdata('username'); ?></h4>
				
				<p>
					You have <a href="javascript:;">5 messages</a>
				</p>
				
				<img src="<?php echo base_url();?>/one-themes/images/avatar.jpg" alt="avatar" />
			</div> <!-- #info -->
					
		</div> <!-- #header -->	
		
		
		<div id="nav">	
	
			<ul class="mega-container mega-grey">
	
				<li class="mega mega-current">
					<a href="<?php echo base_url();?>site/members_area" class="mega-link">Dashboard</a>	
				</li>
		
				<li class="mega">				
					<a href="javascript:;" class="mega-tab">
						Main Menu 
					</a>
					
					<div class="mega-content mega-menu ">
						<ul>
							<li><a href="#">Menu 1</a></li>
							<li><a href="#">Menu 2</a></li>			
							<li><a href="#">Menu 3</a></li>				
							<li><a href="#">Menu 4</a></li>	
							<li><a href="#">Menu 5</a></li>		
							<li><a href="#">Menu 6</a></li>	
							<li><a href="#">Menu 8</a></li>	
						</ul>
					</div>						
				</li>
		
				<li class="mega">				
					<a href="#" class="mega-link">Menu A</a>		
				</li>
				
				<li class="mega">				
					<a href="#" class="mega-link">Menu B</a>
				</li>	
		
				<li id="grid" class="mega">				
					<a href="#" class="mega-link">Menu C</a>		
				</li>
		
				<li class="mega">
					<a href="#" class="mega-link">Menu D</a>
				</li>					
				
				<li class="mega">				
					<a href="#" class="mega-link">Menu E</a>
				</li>	
			</ul>
			<div id="info"><a href="#">logout</a></div>
		</div> <!-- #nav -->
	</div> <!-- #top -->
