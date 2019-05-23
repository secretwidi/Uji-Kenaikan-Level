<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Pelanggan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"></span> Tambah Pelanggan</button>

			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <!-- Modal content-->
			      <div class="modal-content">
			      	<form method="post" action="<?=base_url('index.php');?>/pelanggan/add_pelanggan">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        <div class="modal-body">
				        	<div class="panel-body">
					          	<div class="form-group">
					          		<input type="text" name="nama" placeholder="Nama" class="form-control">
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<input type="number" name="telp" placeholder="Telepon" class="form-control">
					          	</div>
					          	<div class="form-group">
												<input type="text" name="alamat" value="" placeholder="Alamat" class="form-control">
					          	</div>
					          	<div class="form-group">
					          		<input type="text" name="username" placeholder="Username" class="form-control">
					          	</div>
					          	<div class="form-group">
					          		<input type="text" name="password" placeholder="Password" class="form-control">
					          	</div>
					        </div>
				        </div>
				        <div class="modal-footer">
				        	<button type="submit" class="btn btn-primary">Tambah</button>
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
				        </div>
			        </form>
			      </div>

			    </div>
			</div>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Telepon</th>
						<th>Username</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($list_pelanggan as $pelanggan) {
						?>
							<tr>
								<td><?=$no;?></td>
								<td><?=$pelanggan->nama;?></td>
								<td><?=$pelanggan->telp;?></td>
								<td><?=$pelanggan->username;?></td>
								<td>
									<a href="<?=base_url("index.php");?>/pelanggan/edit_pelanggan/<?=$pelanggan->id_pelanggan;?>" class="btn btn-primary btn-sm">Ubah</a>

									<a href="<?=base_url("index.php");?>/pelanggan/delete_pelanggan/<?=$pelanggan->id_pelanggan;?>" class="btn btn-danger btn-sm">Hapus</a>
								</td>
							</tr>
						<?php
						$no++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
