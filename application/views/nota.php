Widi Resto<br>
_________________________________<br>
No Nota :<?= $ts->id_order?><br>
Nama Kasir :<?= $ts->id_user?><br>
Tanggal :<?= $ts->tanggal?>


<table border="1px solid black" style="border-collapse: collapse;">


	<tr>
	<th>No</th>
	<th>Judul</th>
	<th>Harga</th>
	<th>Jumlah</th>
	<th>Sub total</th>
	</tr>

	<?php $no=0; foreach($dts as $dts):$no++?>

	<tr>

	<td><?= $no?></td>
	<td><?= $dts->makanan?></td>
	<td><?= number_format($dts->harga)?></td>
	<td><?= $dts->jumlah?></td>
	<td><?= number_format($dts->harga*$dts->jumlah)?></td>

	</tr>
<?php endforeach?>

	<tr>

	<td colspan="2">Total</td>
	<td colspan="3"><?= $ts->total?></td>

	</tr>

</table>


<script type="text/javascript">

window.print();
location.href="<?= base_url('index.php/Transaksi')?>";

</script>
