<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container">
	<div class="row justify-content-around">
		<?php foreach ($model as $m): ?>
			<div class="col-md-3 mb-3">
				<div class="card shadow-sm border rounded-lg overflow-hidden">
					<div class="card-header bg-light">
						<span class="text-success fw-bold"><?= $m->nama ?></span>
					</div>
					<div class="card-body p-3">
						<img class="img-fluid d-block mx-auto rounded-lg" style="max-height: 200px"
							src="<?= base_url('uploads/' . $m->gambar) ?>" alt="<?= $m->nama ?>">
						<h5 class="mt-3 text-success text-center"><?= "Rp " . number_format($m->harga, 2, ',', '.') ?></h5>
						<p class="text-muted mb-0">Stok: <?= $m->stok ?></p>
					</div>
					<div class="card-footer p-2">
						<a href="<?= site_url('etalase/beli/' . $m->id) ?>" class="btn btn-success rounded-pill px-4"
							style="background: linear-gradient(to top, #008000 0%, #698B22 100%);">Beli <i
								class="fas fa-shopping-cart ml-2"></i></a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>




<?= $this->endSection() ?>