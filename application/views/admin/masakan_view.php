<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Menu</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"></span> Tambah Menu</button>

			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <!-- Modal content-->
			      <div class="modal-content">
			      	<form method="post" action="<?=base_url('index.php');?>/masakan/add_masakan">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Tambah Menu</h4>
				        </div>
				        <div class="modal-body">
				        	<div class="panel-body">
					          	<div class="form-group">
					          		<input type="text" name="nama_masakan" placeholder="Nama Menu" class="form-control">
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<input type="number" name="harga" placeholder="Harga" class="form-control">
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<select class="form-control" name="id_jenis">
					          			<?php foreach ($list_jenis as $jenis): ?>
					          				<option value="<?=$jenis->id_jenis;?>"><?=$jenis->nama_jenis?></option>
					          			<?php endforeach ?>
					          		</select>
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
						<th>Nama Menu</th>
						<th>Jenis</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($list_masakan as $masakan) {
						?>
							<tr>
								<td><?=$no;?></td>
								<td><?=$masakan->nama_masakan;?></td>
								<td><?=$masakan->nama_jenis;?></td>
								<td>
									<span class="label <?php if($masakan->status_masakan == 'ada'):?>label-success<?php elseif($masakan->status_masakan == 'tidak_ada'):?>label-danger<?php endif;?>">
                                        <?=$masakan->status_masakan;?>
                                    </span>
                                </td>
								<td>
									<a href="<?=base_url("index.php");?>/masakan/edit_masakan/<?=$masakan->id_masakan;?>" class="btn btn-primary btn-sm">Ubah</a>

									<a href="<?=base_url("index.php");?>/masakan/delete_masakan/<?=$masakan->id_masakan;?>" class="btn btn-danger btn-sm">Hapus</a>
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
