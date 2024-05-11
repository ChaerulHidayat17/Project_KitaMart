<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
	
<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Hello, Selamat Datang!</h1>
				<?php
				$username = session()->get('username');
				// Menggunakan kelas CSS display-3 untuk membuat ukuran font yang sama
				echo '<h1 class="display-3">' . $username . '</h1>';
				?>
				
			</div>
		</div>


      
    </main>

    <footer class="container">
      <p>&copy; KitaMart 2024</p>
    </footer>
    
    
<?= $this->endSection() ?>
