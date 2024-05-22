<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<?php

$nama = [
	'name' => 'nama',
	'id' => 'nama',
	'value' => null,
	'class' => 'form-control',
	'placeholder' => 'Masukan Nama Product'
];

$harga = [
	'name' => 'harga',
	'id' => 'harga',
	'value' => null,
	'class' => 'form-control',
	'placeholder' => 'Masukan Harga (Rp)',
	'type' => 'number',
	'min' => 0,
];

$stok = [
	'name' => 'stok',
	'id' => 'stok',
	'value' => null,
	'class' => 'form-control',
	'placeholder' => 'Masukan Jumlah Stok',
	'type' => 'number',
	'min' => 0,
];

$gambar = [
	'name' => 'gambar',
	'id' => 'gambar',
	'value' => null,
	'class' => 'form-control',
	'placeholder' => 'Silahkan Pilih Gambar Produk',
	'type' => 'file',
];

$submit = [
	'name' => 'submit',
	'id' => 'submit',
	'value' => 'Submit',
	'class' => 'btn btn-primary',
	'type' => 'submit',
];

?>
<div class="container mt-5">
	<div class="card shadow rounded">
		<div class="card-header bg-primary text-white">
			<h3>Tambah Barang</h3>
		</div>
		<div class="card-body">
			<?= form_open_multipart('Barang/create') ?>

			<div class="form-group mb-3">
				<?= form_label("Nama", "nama") ?>
				<?= form_input($nama) ?>
			</div>

			<div class="form-group mb-3">
				<?= form_label("Harga", "harga") ?>
				<?= form_input($harga) ?>
			</div>

			<div class="form-group mb-3">
				<?= form_label("Stok", "stok") ?>
				<?= form_input($stok) ?>
			</div>

			<div class="form-group mb-3">
				<?= form_label("Gambar", "gambar") ?>
				<?= form_upload($gambar) ?>
				<small class="text-muted">Allowed formats: jpg, jpeg, png. Max size: 2MB</small>
			</div>

			<div class="text-end">
				<?= form_submit($submit) ?>
			</div>

			<?= form_close() ?>
		</div>
	</div>
</div>

<?= $this->endSection() ?>