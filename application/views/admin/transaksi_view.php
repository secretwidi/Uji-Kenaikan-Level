<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Transaksi</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md">Tambah Pesanan</button>

			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <!-- Modal content-->
			      <div class="modal-content">
			      	<form method="post" action="<?=base_url('index.php')?>/transaksi/add_transaksi">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Transaksi</h4>
				        </div>
				        <div class="modal-body">
				        	<div class="panel-body">
					          	<div class="form-group">
					          		<select class="form-control" name="no_meja">
						          		<option value="" disabled> Pilih Meja </option>
						          		<option value="1" >No.1</option>
						          		<option value="2" >No.2</option>
						          		<option value="3" >No.3</option>
						          		<option value="4" >No.4</option>
						          		<option value="5" >No.5</option>
						          	</select>
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<textarea class="form-control" placeholder="Keterangan Pesanan" name="keterangan"></textarea>
					          	</div>
					          	<br>
					          	<label> Menu 1</label>
					          	<div class="form-group">
					          		<select class="form-control" name="masakan[]">
					          			<option value="" disabled>Pilih Menu</option>
						          		<?php foreach ($list_masakan as $masakan): ?>
						          			<option value="<?=$masakan->id_masakan;?>"><?=$masakan->nama_masakan." - ".$masakan->nama_jenis;?></option>
						          		<?php endforeach ?>
					          		</select>
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<textarea class="form-control" placeholder="Keterangan Menu" name="keterangan_masakan[]"></textarea>
					          	</div>
					          	<br>
					          	<div id="insert-form"></div>
					          	<button type="button" class="btn btn-primary" id="btn-tambah-masakan">Tambah pesanan</button>
					          	<button type="button" class="btn btn-primary" id="btn-reset-masakan">Reset menu</button>
					        </div>
				        </div>
				        <div class="modal-footer">
				        	<input type="hidden" id="jumlah-form" value="1">
				        	<button type="submit" class="btn btn-info">Pesan</button>
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
				        </div>
			        </form>
			      </div>

			    </div>
			    <script>
					$(document).ready(function(){
					  	$("#btn-tambah-masakan	").click(function(){
					  		var jumlah = parseInt($("#jumlah-form").val());
					  		var nextform = jumlah + 1;

					  		$("#insert-form").append(
					  			'<label> Makanan '+nextform+'</label>'+
					  			'<div class="form-group">'+
					          		'<select class="form-control" name="masakan[]">'+
					          			'<option value="" disabled>Pilih Menu</option>'+
						          		'<?php foreach ($list_masakan as $masakan): ?>'+
						          			'<option value="<?=$masakan->id_masakan;?>"><?=$masakan->nama_masakan." - ".$masakan->nama_jenis;?></option>'+
						          		'<?php endforeach ?>'+
					          		'</select>'+
					          	'</div>'+
					          	'<br>'+
					          	'<div class="form-group">'+
					          		'<textarea class="form-control" placeholder="Keterangan Menu" name="keterangan_masakan[]""></textarea>'+
					          	'</div>'+
					          	'<br>'
					  		);
						  	$("#jumlah-form").val(nextform);
						});

						$("#btn-reset-masakan").click(function(){
							$("#insert-form").html("");
							$("#jumlah-form").val("1");
						});
					});
				</script>
			  </div>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>No. Meja</th>
						<th>Pelanggan</th>
						<th>Admin</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Total</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($list_transaksi as $transaksi): ?>
						<tr>
							<td><?=$no;?></td>
							<td><?=$transaksi->no_meja;?></td>
							<td><?=$transaksi->nama;?></td>
							<td><?=$transaksi->nama_user;?></td>
							<td><?=$transaksi->tanggal;?></td>
							<td>
								<span class="label <?php if($transaksi->status == 'pending'):?>label-warning<?php elseif($transaksi->status == 'success'):?>label-success<?php endif;?>">
                                        <?php if($transaksi->status == 'pending'):?>
                                        	Menunggu pembayaran
                                        <?php elseif($transaksi->status == 'success'):?>
                                        	Pembayaran sukses
                                    	<?php endif;?>
                                    </span>
							</td>
							<td><?=$transaksi->total_bayar;?></td>
							<td>

								<a href="<?=base_url("index.php");?>/transaksi/konfirmasi_pembayaran/<?=$transaksi->id_order;?>" class="btn btn-success btn-sm">Sukses</a>

								<a href="<?=base_url("index.php");?>/transaksi/delete_transaksi/<?=$transaksi->id_order;?>" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
					<?php $no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
