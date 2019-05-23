<h3>Selamat Datang</h3>
<p class="panel-subtitle">Widi Resto</p>
<div class="panel panel-headline">
	<div class="panel-heading">
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-4">
				<div class="metric">
					<a href="<?=base_url('index.php/Masakan')?>" style="color: black">
					<span class="icon"><i class="fa fa-bars"></i></span>
					<p>
						<span class="number"><?=count($list_masakan);?></span>
						<span class="title">Masakan</span>
					</p>
				</div>
			</div>
		</a>
		<div class="col-md-4">
			<div class="metric">
				<a href="<?=base_url('index.php/pelanggan/list_pelanggan')?>" style="color: black">
				<span class="icon"><i class="fa fa-shopping-bag"></i></span>
				<p>
					<span class="number"><?=count($list_pelanggan);?></span>
					<span class="title">Pelanggan</span>
				</p>
			</div>
		</div>
	</a>
			<div class="col-md-4">
				<div class="metric">
					<a href="<?=base_url('index.php/Transaksi')?>" style="color: black">
					<span class="icon"><i class="fa fa-money"></i></span>
					<p>
						<span class="number"><?=count($list_transaksi);?></span>
						<span class="title">Transaksi</span>
					</p>
				</div>
			</div>
		</a>
		</div>
		</div>
	</div>
</div>
