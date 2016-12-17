<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Admin</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/app.css");?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap.min.css");?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap.css");?>">
		<script src="<?php echo base_url("js/bootstrap.js");?>" type="text/javascript" ></script>
		<script src="<?php echo base_url("js/jquery.min.js");?>" type="text/javascript" ></script>
		
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div id="header-menu">
			  <div class="container-fluid">
			    <div class="navbar-header" style="background-color: #464CC6;">
			    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			    		<span class="sr-only">Toggle Responsive</span>
			    		<span class="icon-bar"></span>
			    		<span class="icon-bar"></span>
			    		<span class="icon-bar"></span>
			    	</button>
			      <a class="navbar-brand" href="<?php echo base_url("admin/homepage");?>"><b>Jersey Bola</b></a>
			    </div>
			   <div class="collapse navbar-collapse" id="navbar-collapse">
			      <ul class="nav navbar-nav">
			        <li><a href="<?php echo base_url("admin/homepage.html");?>"><i class="glyphicon glyphicon-home"></i> <b>Home</b></a></li>
			        <li><a href="<?php echo base_url("admin/masterData.html");?>"><i class="glyphicon glyphicon-list-alt"></i> <b>Master Data</b></a></li>
			        <li><a href="<?php echo base_url("admin/dataTransaksi.html");?>"><i class="glyphicon glyphicon-tasks"></i> <b>Data Transaksi</b></a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			       <li>
			          <a href='<?php echo site_url('admin/login/logout');?>'><span class="glyphicon glyphicon-log-out"> <b>Logout</b></span></a>
			       </li>

			      </ul>
			   </div>
			  
		  	</div>
		  </div>
		</nav>
