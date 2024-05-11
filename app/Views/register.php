<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center">Register Form</h3>
                </div>
                <div class="card-body">
                    <?php
                    $username = [
                        'name' => 'username',
                        'id' => 'username',
                        'value' => null,
                        'class' => 'form-control',
                        'placeholder' => 'Username'
                    ];

                    $password = [
                        'name' => 'password',
                        'id' => 'password',
                        'class' => 'form-control',
                        'placeholder' => 'Password'
                    ];

                    $repeatPassword = [
                        'name' => 'repeatPassword',
                        'id' => 'repeatPassword',
                        'class' => 'form-control',
                        'placeholder' => 'Repeat Password'
                    ];

                    $session = session();
                    $errors = $session->getFlashdata('errors');
                    ?>
                    <?php if ($errors != null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Terjadi Kesalahan</h4>
                            <hr>
                            <ul class="mb-0">
                                <?php foreach ($errors as $err) : ?>
                                    <li><?= $err ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif ?>
                    <?= form_open('Auth/register') ?>
                    <div class="form-group">
                        <?= form_input($username) ?>
                    </div>
                    <div class="form-group">
                        <?= form_password($password) ?>
                    </div>
                    <div class="form-group">
                        <?= form_password($repeatPassword) ?>
                    </div>
					<br>
                    <div class="text-center">
                        <?= form_submit('submit', 'Register', ['class' => 'btn btn-primary btn-block']) ?>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
