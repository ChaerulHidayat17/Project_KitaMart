<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive rounded-lg shadow-sm mt-4">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Barang</th>
							<th scope="col">Pembeli</th>
							<th scope="col">Alamat</th>
							<th scope="col">Jumlah</th>
							<th scope="col">Harga</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($model as $index => $transaksi): ?>
							<tr>
								<th scope="row"><?= $index + 1 ?></th>
								<td><?= $transaksi->id_barang ?></td>
								<td><?= $transaksi->id_pembeli ?></td>
								<td><?= $transaksi->alamat ?></td>
								<td><?= $transaksi->jumlah ?></td>
								<td><?= "Rp " . number_format($transaksi->total_harga, 2, ',', '.') ?></td>
								<td>
									<a href="<?= site_url('transaksi/view/' . $transaksi->id) ?>"
										class="btn btn-primary btn-sm">View</a>
									<a href="<?= site_url('transaksi/invoice/' . $transaksi->id) ?>"
										class="btn btn-info btn-sm">Invoice</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>