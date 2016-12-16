<div id="data-list">
	<div class="container-fluid">
		
		<div class="col-md-offset-3">
			<h3><i class="glyphicon glyphicon-hdd"></i> &nbspData Operator</h3>

			<div class="panel panel-primary">
				<div class="panel-body">
				<div class="table-responsive">
				<a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i><b>&nbspTambah</b></a>
				<p>
				<table width="100%" class="table table-bordered">
					<thead style="background-color:#16D4E4;" align="center">
						<tr>
							<th width="5%">No.</th>
							<th>Username</th>
							<th>Password</th>
							<th>Nama</th>
							<th colspan="2" width="15%">Aksi</th>
						</tr>
					</thead>
					<?php  
						$no = 1;
						foreach ($hasil->result() as $view) {?>
						<tr align="center">
							<td><?php echo $no++;?>.</td>
							<td><?php echo $view->username;?></td>
							<td><?php echo $view->password;?></td>
							<td><?php echo $view->nama;?></td>
							<td>
	                    <button class="btn btn-success" data-target="myModal" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></button>
	                  </td>
	                  <td>
	                    <a href="#" title="hapus" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
	                  </td>
						</tr>
					<?php }?>
				</table></p>
				</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
	
		
	
<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Bagian heading modal</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p>bagian body modal.</p>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
				</div>
			</div>
		</div>
	</div>