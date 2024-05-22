<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1>Barang</h1>
<div class="container mt-3">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Barang</th>
				<th scope="col">Gambar</th>
				<th scope="col">Harga</th>
				<th scope="col">Stok</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($barangs as $index => $barang): ?>
				<tr>
					<th scope="row"><?= ($index + 1) ?></th>
					<td><?= $barang->nama ?></td>
					<td>
						<img src="<?= base_url('uploads/' . $barang->gambar) ?>" alt="gambar" class="img-fluid rounded"
							width="100px">
					</td>
					<td><?= $barang->harga ?></td>
					<td><?= $barang->stok ?></td>
					<td>
						<a href="<?= site_url('barang/view/' . $barang->id) ?>" class="btn btn-sm btn-primary">View</a>
						<a href="<?= site_url('barang/update/' . $barang->id) ?>" class="btn btn-sm btn-success">Update</a>
						<a href="<?= site_url('barang/delete/' . $barang->id) ?>" class="btn btn-sm btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<?= $this->endSection() ?>