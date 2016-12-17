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
							<th colspan="2" width="10%">Aksi</th>
						</tr>
					</thead>
					<?php  
						$no = 1;
						foreach ($hasil->result() as $view) {?>
						<tr>
							<td align="center"><?php echo $no++;?>.</td>
							<td><?php echo $view->username;?></td>
							<td><?php echo $view->password;?></td>
							<td><?php echo $view->nama;?></td>
							<td align="center">
	                    <a class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
	                  </td>
	                  <td align="center">
	                    <a href="#" title="hapus" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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