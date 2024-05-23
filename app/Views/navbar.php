<?php
$session = session();
$username = $session->get('username'); // Assuming 'username' is stored in the session
?>
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">KitaMart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mx-auto">
                <?php if ($session->get('isLoggedIn')): ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">Home</span></a>
                    </li>
                    <?php if (session()->get('role') == 0): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">Barang</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="<?= site_url('barang/index') ?>">List Barang</a>
                                <a class="dropdown-item" href="<?= site_url('barang/create') ?>">Tambah Barang</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('transaksi/index') ?>">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('user/index') ?>">User</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('etalase/index') ?>">Etalase</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('transaksi/index') ?>">Transaksi</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if ($session->get('isLoggedIn')): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
<!--                            <img src="logos.png" class="rounded-circle mr-2" alt="Profile Logo">-->
                            <!-- Profile logo -->
                            <?= $username ?> <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">Account</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                            <a class="dropdown-item" href="<?= site_url('auth/login') ?>">Login</a>
                            <a class="dropdown-item" href="<?= site_url('auth/register') ?>">Register</a>
                        </div>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<style>
    .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto;
    }

    .rounded-circle {
        width: 30px;
        height: 30px;
    }
</style>
