<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinanti University</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="<?php echo base_url('/index.php/Active/');?>" style="color: #fff;">
                <h2>Kinanti University</h2>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="<?php echo base_url('/index.php/Active'); ?>">Beranda</a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Active/prodi'); ?>">Program Studi</a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Active/tentang'); ?>">Tentang</a>
                </li>
            </ul>
        </div>
        <div class="profile">
            <button onclick="myFunction()" class="dropbtn">
                <!-- <img src="<?php echo base_url('/assets/img/profile.svg'); ?>" alt="profile"> -->
            </button>
            <div id="myDropdown" class="dropdown-content">
                <a href="<?php echo base_url('index.php/Form'); ?>">Daftar</a>
                <a href="<?php echo base_url('index.php/Profile'); ?>">Profile</a>
                <a href="<?php echo base_url('index.php/Login/logout'); ?>">Log Out</a>
                <a href="<?php echo base_url('index.php/Form/getID'); ?>">id</a>
            </div>
        </div>
        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown menu if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
    </nav>