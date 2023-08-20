<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beasiswa Kampuskuaja</title>
  <link rel="icon" href="../assets/img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    .bg {
      position: relative;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      /* Warna hitam dengan transparansi 0.5 */
    }

    .utama {
      background-color: #6f9995;
    }

    .text-utama {
      color: #6f9995;
    }

    .btn-utama {
      background-color: #6f9995;
      color: #fff;
    }

    .btn-utama:hover {
      background-color: #374c4a;
      color: #fff;
    }

    .opacity-saya {
      opacity: 0.9;
      /* blur */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg utama px-xl-5 px-lg-5 px-md-3 px-sm-4 shadow" data-bs-theme="dark">
    <div class="container-fluid mx-xl-5 mx-lg-5 mx-md-5 px-xl-4 px-lg-4 px-md-4 px-sm-4">
      <a class="navbar-brand mb-0 h1" href="#">
        <img src="../assets/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Kampuskuaja
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php
          if ($_SERVER['REQUEST_URI'] == "/kampuskuaja.ac.id/Dashboard/" || $_SERVER['REQUEST_URI'] == "/kampuskuaja.ac.id/Dashboard/index.php") {
          ?>
            <a class="nav-link active fw-bold" aria-current="page" href="/kampuskuaja.ac.id/Dashboard/">Pilihan Beasiswa</a>
          <?php } else { ?>
            <a class="nav-link" href="/kampuskuaja.ac.id/Dashboard/">Pilihan Beasiswa</a>
          <?php } ?>
          <?php
          if ($_SERVER['REQUEST_URI'] == "/kampuskuaja.ac.id/Daftar/" || $_SERVER['REQUEST_URI'] == "/kampuskuaja.ac.id/Daftar/index.php") {
          ?>
            <a class="nav-link active fw-bold" aria-current="page" href="/kampuskuaja.ac.id/Daftar/">Daftar</a>
          <?php } else { ?>
            <a class="nav-link" href="/kampuskuaja.ac.id/Daftar/">Daftar</a>
          <?php } ?>
          <?php
          if ($_SERVER['REQUEST_URI'] == "/kampuskuaja.ac.id/Hasil/" || $_SERVER['REQUEST_URI'] == "/kampuskuaja.ac.id/Hasil/index.php") {
          ?>
            <a class="nav-link active fw-bold" aria-current="page" href="/kampuskuaja.ac.id/Hasil/">Hasil</a>
          <?php } else { ?>
            <a class="nav-link" href="/kampuskuaja.ac.id/Hasil/">Hasil</a>
          <?php } ?>
          <!-- <a class="nav-link" href="/kampuskuaja.ac.id/Daftar">Daftar</a>
          <a class="nav-link" href="/kampuskuaja.ac.id/Hasil">Hasil</a> -->
          <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
        </div>
      </div>
    </div>
  </nav>