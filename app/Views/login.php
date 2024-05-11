<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center">Login Form</h3>
                </div>
                <div class="card-body">
                    <?php
                    $username = [
                        'name' => 'username',
                        'id' => 'username',
                        'value' => null,
                        'class' => 'form-control',
                        'placeholder' => 'Enter your username'
                    ];

                    $password = [
                        'name' => 'password',
                        'id' => 'password',
                        'class' => 'form-control',
                        'placeholder' => 'Enter your password'
                    ];

                    $session = session();
                    $errors = $session->getFlashdata('errors');
                    ?>
                    <?php if ($errors != null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Terjadi Kesalahan</h4>
                            <hr>
                            <p class="mb-0">
                                <?php
                                foreach ($errors as $err) {
                                    echo $err . '<br>';
                                }
                                ?>
                            </p>
                        </div>
                    <?php endif ?>
                    <?= form_open('Auth/login') ?>
                    <div class="form-group">
                        <?= form_label("Username", "username") ?>
                        <?= form_input($username) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Password", "password") ?>
                        <?= form_password($password) ?>
                    </div>
					<br>
                    <div class="text-center">
                        <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
