<div id="data-list">
	<div class="container-fluid">
		
		<div class="col-md-offset-3">
			<h3><i class="glyphicon glyphicon-hdd"></i> &nbspJasa Pengiriman</h3>

			<div class="panel panel-primary">
				<div class="panel-body">
				<a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i><b>&nbspTambah</b></a>
				<div id="search">
					<label>Cari : <input type="search" name="search"></label>
				</div>
				

				<p>
				<table width="100%" class="table table-bordered">
					<thead style="background-color:#16D4E4;" align="center">
						<tr>
							<th width="5%">No.</th>
							<th width="10%">Id Provinsi</th>
							<th>Provinsi</th>
							<th>Biaya Pengiriman</th>
							<th colspan="2" width="10%">Aksi</th>
						</tr>
					</thead>
					<?php 
						$no = 1;
						foreach ($show->result() as $tampil) {
					 ?>
					<tr>
						<td align="center"><?php echo $no++ ?>.</td>
						<td><?php echo $tampil->id_prov ?></td>
						<td><?php echo $tampil->provinsi ?></td>
						<td>Rp. <?php echo number_format($tampil->biaya_kirim) ?></td>
						<td>
                    <a href="#" title="edit" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i></a>
                  </td>
                  <td>
                    <a href="#" title="hapus" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
					</tr><?php } ?>
				</table></p>
				</div>
			</div>
		</div>
		
	</div>
</div>
	
		
	
