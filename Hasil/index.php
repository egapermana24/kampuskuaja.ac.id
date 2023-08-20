<?php
include '../Database/koneksi.php';
include '../Menu/header.php';

$query = mysqli_query($koneksi, "SELECT * FROM pendaftar");


if (mysqli_num_rows($query) == 0) {
  echo "<script>alert('Anda harus mendaftar terlebih dahulu!');window.location.href='../Dashboard/index.php';</script>";
  die();
}
?>
<div class="container pt-5">
  <div class="row align-items-center pb-5 mb-3">
    <div class="col-xl-5 col-md-10 col-lg-5 col-sm-12 mx-auto">
      <div class="card shadow mb-4 mx-auto">
        <div class="card-header d-sm-flex align-items-center justify-content-center mb-4 bg-white">
          <h1 class="h4 mb-0 text-utama font-weight-bolder text-center">Hasil</h1>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <th scope="row">Nama Lengkap</th>
                    <td><?= $row['namaLengkap']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td><?= $row['email']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">No HP</th>
                    <td><?= $row['noHp']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Semester</th>
                    <td><?= $row['semester']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">IPK</th>
                    <td><?= $row['ipk']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Pilihan</th>
                    <td><?= $row['pilihan']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Berkas</th>
                    <td><a href="../Daftar/berkas/<?= $row['berkas']; ?>">Berkas Persyaratan</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Status Ajuan</th>
                    <td><span class="badge text-bg-warning"><?= $row['status_ajuan']; ?></span></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-10 col-lg-6 col-sm-12 mx-auto">
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
        <h1 class="h4 mb-0 text-utama font-weight-bolder text-center pb-2">Terima Kasih Karena Telah Mendaftar</h1>
      </div>
    </div>
  </div>



</div>

<?php include '../Menu/footer.php'; ?>