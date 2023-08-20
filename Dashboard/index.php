<?php
$random_IPK = rand(200, 400) / 100; // Menampilkan angka desimal acak
$random_IPK = 3.9; // Menampilkan angka desimal acak
include '../Menu/header.php'; ?>
<div class="container mb-5 pt-4">
  <div class="row align-items-center pb-5 mb-3">
    <div class="col-lg-8 col-xl-4 col-md-12 col-sm-10 mx-auto">
      <div class="row">
        <div class="col align-self-start text-utama">
          <h1>Ayo Segera Daftar Beasiswa Yang Tersedia!</h1>
        </div>
      </div>
      <div class="row">
        <div class="col align-self-start">
          <p>Beasiswa Ini Tersedia 3 Pilihan yaitu Beasiswa Akademik, Beasiswa Non Akademik, dan Beasiswa Penelitian. Jangan sia-siakan kesempatan yang ada, segera daftar jika syarat dan ketentuan sudah terpenuhi.</p>
        </div>
      </div>
      <div class="row">
        <div class="col align-self-center">
          <a href="#beasiswaTersedia" class="btn btn-utama">Daftar Sekarang</a>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-xl-6 col-md-12 col-sm-10 mx-auto mt-5">
      <div id="carouselExampleCaptions" class="carousel slide shadow-lg rounded p-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/img/akademik_slide.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
              <div class="shadow p-1 bg-dark opacity-75 rounded">
                <h5>Beasiswa Akademik</h5>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/img/nonakademik_slide.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
              <div class="shadow p-1 bg-dark opacity-75 rounded">
                <h5>Beasiswa non Akademik</h5>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/img/penelitian_slide.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
              <div class="shadow p-1 bg-dark opacity-75 rounded">
                <h5>Beasiswa Penelitian</h5>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="row d-flex justify-content-center pb-5 text-center">
    <div class="row mb-4 align-items-center">
      <div class="col-lg-4 col-xl-4 col-md-6 col-sm-8 border-bottom mx-auto">
        <h3 class="mb-3 text-utama" id="beasiswaTersedia">Beasiswa Yang Tersedia</h3>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 mt-3">
      <div class="card mx-auto">
        <img src="../assets/img/akademik.jpg" class="card-img-top" alt="Akademik">
        <div class="card-body">
          <h5 class="card-title">Beasiswa Akademik</h5>
          <p class="card-text">Mahasiswa di semester 1 - 8 dengan IPK di atas 3 dapat mengajukan diri untuk beasiswa akademik sebagai biaya kegiatan akademik.</p>
          <form action="../Daftar/index.php" method="post">
            <input type="hidden" value="<?= $random_IPK; ?>" name="nilai_IPK">
            <input type="hidden" value="0" name="slide">
            <button type="submit" class="btn btn-utama">Registrasi</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 mt-3">
      <div class="card mx-auto">
        <img src="../assets/img/nonakademik.jpg" class="card-img-top" alt="Non Akademik">
        <div class="card-body">
          <h5 class="card-title">Beasiswa Non Akademik</h5>
          <p class="card-text">Bagi mahasiswa di semester 1 - 8 dengan IPK di atas 3, peluang mendapatkan beasiswa non akademik terbuka lebar.</p>
          <form action="../Daftar/index.php" method="post">
            <input type="hidden" value="<?= $random_IPK; ?>" name="nilai_IPK">
            <input type="hidden" value="1" name="slide">
            <button type="submit" class="btn btn-utama">Registrasi</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 mt-3">
      <div class="card mx-auto">
        <img src="../assets/img/penelitian.jpg" class="card-img-top" alt="Penelitian">
        <div class="card-body">
          <h5 class="card-title">Beasiswa Penelitian</h5>
          <p class="card-text">Beasiswa penelitian tersedia bagi mahasiswa di semester 1 - 8 dengan IPK di atas 3 yang tertarik dalam pengembangan penelitian.</p>
          <form action="../Daftar/index.php" method="post">
            <input type="hidden" value="<?= $random_IPK; ?>" name="nilai_IPK">
            <input type="hidden" value="2" name="slide">
            <button type="submit" class="btn btn-utama">Registrasi</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../Menu/footer.php'; ?>