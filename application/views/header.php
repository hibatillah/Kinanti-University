<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinanti University</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
    <script src="<?= base_url() ?>/assets/js/jquery-migrate-3.4.0.min"></script>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="<?php echo base_url('/index.php/Main'); ?>" style="color: #fff;">
                <h2>Kinanti University</h2>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="<?php echo base_url('/index.php/Main'); ?>">Beranda</a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Main/prodi'); ?>">Program Studi</a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Main/tentang'); ?>">Tentang</a>
                </li>
            </ul>
        </div>
        <div class="profile">
            <a href="<?php echo base_url('index.php/Signup/'); ?>" style="color: #ffffff;">
                <button class="btn pr two" style="cursor: pointer;">Sign Up</button>
            </a>
            <a href="<?php echo base_url('index.php/Login/'); ?>" style="color: #ffffff;">
                <button class="btn sc two" style="cursor: pointer;">Login</button>
            </a>
        </div>
    </nav>