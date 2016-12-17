<div id="data-list">
	<div class="container-fluid">
		
		<div class="col-md-offset-3">
			<h3><i class="glyphicon glyphicon-hdd"></i> &nbspData Member</h3>

			<div class="panel panel-primary">
				<div class="panel-body">
				<form>
				  <div class="form-group">
				    <label>Username</label>
				    <input type="text" class="form-control" value="<?php echo $show->username?>" readonly>
				  </div>
				  <div class="form-group">
				    <label>Password</label>
				    <input type="text" class="form-control" value="<?php echo $show->password?>" readonly>
				  </div>
				  <div class="form-group">
				    <label>Nama Lengkap</label>
				    <input type="text" class="form-control" value="<?php echo $show->nama?>" readonly>
				  </div>
				  <div class="form-group">
				    <label>Email</label>
				    <input type="email" class="form-control" value="<?php echo $show->email?>" readonly>
				  </div>
				  <div class="form-group">
				    <label>No Telp.</label>
				    <input type="text" class="form-control" value="<?php echo $show->no_telp?>" readonly>
				  </div>
				  <div class="form-group">
				    <label>Alamat</label>
				    <textarea class="form-control" value="<?php echo $show->alamat;?>" readonly><?php echo $show->alamat;?></textarea>
				  </div>
				  <div class="form-group">
				    <label>Provinsi</label>
				    <input type="text" class="form-control" value="<?php echo $show->provinsi?>" readonly>
				  </div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url("js/bootstrap.js");?>" type="text/javascript" ></script>
<script src="<?php echo base_url("js/jquery.min.js");?>" type="text/javascript" ></script>