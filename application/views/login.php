<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<title>Halaman Login</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/app.css">
		<style>
			.login-form {
			    margin-top: 80px;
			    border: 1px solid #ddd;
			    height: auto;
			}
			 
			.login-form h4 {
			    font-size: 26px;
			    margin-bottom: 20px;
			    margin-top: 20px;
			}
			 
		</style>
	</head>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-md-offset-4 col-md-4 login-form">
		            <h3>Sistem Penjualan Jersey Online</h3>
		            <?php echo form_open('login/cek_login');?>
		                <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input type="text" class="form-control" name="username" placeholder="Username"/>
			                </div>

			            </div><br/>
		                <div class="form-group">
			                <div class="input-group">
			                	<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>   
			                    <input type="password" class="form-control" name="password" placeholder="Password" />
			                </div>
		                </div>
		                <div class="col-sm-12">
						      <select class="form-control" name="level">
							      <option>-Level-</option>
							      <option value="admin">Admin</option>
							      <option value="operator">Operator</option>
						      </select>
						    </div>
						    <br><br>
		                <div class="text-right">
		                    <button class="btn btn-primary" name="login">Login</button>
		                </div><br/>
		            <?php echo form_close();?>     
		        </div>
		    </div>
		</div>
		<br/><br/>
		<h4><p align="center"><?php echo $this->session->flashdata('message');?></p></h4>
	
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		    <!-- End Script -->
	</body>
</html>