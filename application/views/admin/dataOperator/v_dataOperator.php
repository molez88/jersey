<div id="data-list">
	<div class="container-fluid">
		
		<div class="col-md-offset-3">
			<h3><i class="glyphicon glyphicon-hdd"></i> &nbspData Operator</h3>

			<div class="panel panel-primary">
				<div class="panel-body">
				<a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i><b>&nbspTambah</b></a>
				<p>
				<table width="100%" class="table table-bordered">
					<thead style="background-color:#16D4E4;" align="center">
						<tr>
							<th width="5%">No.</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Email</th>
							<th colspan="3" width="18%">Aksi</th>
						</tr>
					</thead>
					<?php  
						$no = 1;
						foreach ($hasil->result() as $view) {?>
						<tr align="center">
							<td><?php echo $no++;?>.</td>
							<td><?php echo $view->op_nama;?></td>
							<td><?php echo $view->op_alamat;?></td>
							<td><?php echo $view->op_email;?></td>
							<td>
	                    <a href="#" title="view" class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i></a>
	                  </td>
							<td>
	                    <a href="#" title="edit" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i></a>
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
	
		
	
