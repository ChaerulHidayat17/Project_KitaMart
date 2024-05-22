<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow-sm border rounded-lg mt-4">
				<div class="card-header">
					<h4 class="card-title">Transaksi No <?= $transaksi->id_trans ?></h4>
				</div>
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Barang</th>
							<td><?= $transaksi->nama ?></td>
						</tr>
						<tr>
							<th>Pembeli</th>
							<td><?= $transaksi->username ?></td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td><?= $transaksi->alamat ?></td>
						</tr>
						<tr>
							<th>Jumlah</th>
							<td><?= $transaksi->jumlah ?></td>
						</tr>
						<tr>
							<th>Total Harga</th>
							<td><?= $transaksi->total_harga ?></td>
						</tr>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>