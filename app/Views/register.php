<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KitaMart - Login & Register</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #ecf0f3;
        }

        .wrapper {
            max-width: 450px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaa7,
                -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555;
            text-align: center;
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
            display: flex;
            align-items: center;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px;
        }

        .wrapper .form-field .fas,
        .wrapper .form-field .far {
            margin-right: 10px;
            color: #555;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1,
                -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        .wrapper a:hover {
            color: #039BE5;
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://img.freepik.com/premium-vector/click-shop-logo-icon-design-online-shop-logo-design_272744-679.jpg?w=740"
                alt="KitaMart">
        </div>
        <div class="text-center mt-4 name">
            KitaMart
        </div>

        <div class="card-body">
            <?php
            $username = [
                'name' => 'username',
                'id' => 'username',
                'value' => null,
                'placeholder' => 'Masukan Username'
            ];

            $password = [
                'name' => 'password',
                'id' => 'password',
                'placeholder' => 'Masukan Password'
            ];

            $repeatPassword = [
                'name' => 'repeatPassword',
                'id' => 'repeatPassword',
                'placeholder' => 'Repeat Password'
            ];

            $session = session();
            $errors = $session->getFlashdata('errors');
            ?>
            <?php if ($errors != null): ?>
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



            <!-- Register Form -->
            <br>
            <?= form_open('Auth/register') ?>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <?= form_input($username) ?>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <?= form_password($password) ?>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <?= form_password($repeatPassword) ?>
            </div>
            <div class="text-center">
                <?= form_submit('submit', 'Register', ['class' => 'btn mt-3']) ?>
            </div>
            <?= form_close() ?>
        </div>
        <div class="text-center fs-6">
            <a href="<?= site_url('auth/login') ?>">Login</a>
        </div>
    </div>
</body>

</html>
<?= $this->endSection() ?>