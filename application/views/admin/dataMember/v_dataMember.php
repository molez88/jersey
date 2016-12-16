<div id="data-list">
	<div class="container-fluid">
		
		<div class="col-md-offset-3">
			<h3><i class="glyphicon glyphicon-hdd"></i> &nbspData Member</h3>

			<div class="panel panel-primary">
				<div class="panel-body">
				<div class="table-responsive">
				<div id="search">
					<label>Cari : <input type="search" name="search"></label>
				</div>
				<p>
					<table width="100%" class="table table-bordered">
						<thead style="background-color:#16D4E4;" align="center">
							<tr>
								<th width="5%">No.</th>
								<th width="18%">Nama</th>
								<th>Email</th>	
								<th width="25%">Provinsi</th>
								<th colspan="2" width="10%">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<tr>
						<?php 
							$no = 1;
							foreach ($show->result() as $tampil) { ?>
							<td align="center"><?php echo $no++ ?>.</td>
							<td><?php echo $tampil->nama; ?></td>
							<td><?php echo $tampil->email; ?></td>
							<td><?php echo $tampil->provinsi; ?></td>
							<td>
		                 <a href="<?php echo base_url();?>admin/dataMember/data/detail_member/<?php echo $tampil->username;?>" class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i></a>
	                  </td>
	                  <td>
	                    <button title="hapus" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
	                  </td>
						</tr><?php } ?>
						</tbody>
					</table></p>
				</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<script src="<?php echo base_url("js/bootstrap.js");?>" type="text/javascript" ></script>
<script src="<?php echo base_url("js/jquery.min.js");?>" type="text/javascript" ></script>