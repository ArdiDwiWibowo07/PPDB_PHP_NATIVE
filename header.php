<?php
//inisialisasi session
session_start();

//mengecek username pada session
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhir Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #809bce;">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><img src="logosmk.png"  width="70" height="70"> SMK NEGERI 1 ROTA BAYAT</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=beranda">Home</a>
                    </li>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Profile
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?menu=profile" >Sejarah Perkembangan</a>
                            <a class="dropdown-item" href="index.php?menu=vision_mission" >Vision & Mission</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=ppdb" >PPDB 2022/2023</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=pendaftaran" >Formulir PPDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=data_siswa" >Data Siswa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Jurusan
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?menu=tekstil" >Kriya Tekstil</a>
                            <a class="dropdown-item" href="index.php?menu=keramik" >Kriya Keramik</a>
                            <a class="dropdown-item" href="index.php?menu=multimedia" >Multimedia</a>
                            <a class="dropdown-item" href="index.php?menu=tsm" >Teknik Sepeda Motor</a>
                        </div>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=logout">Logout</a>
                    </li>
                    </li>
                </ul>
            </ul>
        

        </div>
    </nav>