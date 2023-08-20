<?php
include '../Database/koneksi.php';
include '../Menu/header.php';

// jika variabel nilai_IPK kosong maka akan diarahkan ke halaman dashboard
if (isset($_POST['nilai_IPK']) && isset($_POST['slide'])) {
  $nilai_IPK = $_POST['nilai_IPK'];
  $slide = $_POST['slide'];
  // Lanjutkan dengan pengolahan variabel $nilai_IPK
} else {
  echo "<script>alert('Pilih beasiswa terlebih dahulu dengan klik registrasi!');window.location.href='../Dashboard/';</script>";
  die();
}
// Menghapus semua data yang ada di tabel pendaftar
mysqli_query($koneksi, "DELETE FROM pendaftar");
// Menghapus semua data dan mengatur ulang auto increment pada tabel pendaftar
mysqli_query($koneksi, "TRUNCATE TABLE pendaftar");
// Menghapus data berkas yang diunggah
$folderPath = 'berkas/'; // lokasi folder berkas
// Mendapatkan daftar file dalam folder
$files = scandir($folderPath);
foreach ($files as $file) {
  $filePath = $folderPath . $file;
  // Memeriksa apakah itu adalah file dan bukan folder
  if (is_file($filePath)) {
    $fileInfo = pathinfo($filePath);
    // Memeriksa apakah ekstensi file bukan .php
    if ($fileInfo['extension'] !== 'php') {
      unlink($filePath); // Menghapus file
    }
  }
}

?>
<?php
if ($slide == "0") {
?>
  <div class="bg pt-5 pb-5" style="background-image: url(../assets/img/akademik_slide.jpg); background-size: cover; background-position: center center; height: 100%;">
  <?php } ?>
  <?php
  if ($slide == "1") {
  ?>
    <div class="bg pt-5 pb-5" style="background-image: url(../assets/img/nonakademik_slide.jpg); background-size: cover; background-position: center center; height: 100%;">
    <?php } ?>
    <?php
    if ($slide == "2") {
    ?>
      <div class="bg pt-5 pb-5" style="background-image: url(../assets/img/penelitian_slide.jpg); background-size: cover; background-position: center center; height: 100%;">
      <?php } ?>
      <div class="overlay"></div>
      <div class="container">
        <div class="card shadow mb-4 col-xl-6 col-lg-6 col-md-10  mx-auto">
          <div class="card-header d-sm-flex align-items-center justify-content-center mb-4 bg-white">
            <h1 class="h4 mb-0 text-utama font-weight-bolder text-center">ISI DATA DIRI</h1>
          </div>
          <div class="card-body">
            <?php
            if (isset($_POST['nilai_IPK'])) {
              if ($_POST['nilai_IPK'] < 3) { ?>
                <div class="alert alert-danger" role="alert">
                  Maaf IPK anda tidak memenuhi syarat, silahkan kembali dengan <a href="../Dashboard/index.php" class="alert-link">klik disini</a>. Tetap semangat untuk kesempatan berikutnya.
                </div>
              <?php } ?>
            <?php }
            ?>
            <form method="post" action="save.php" enctype="multipart/form-data">
              <div class="form-group mb-3">
                <label class="fw-bold" for="namaLengkap">Nama Lengkap</label>
                <input type="text" class="form-control mt-2" id="namaLengkap" placeholder="Masukkan Nama Lengkap" name="namaLengkap" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group mb-3">
                <label class="fw-bold" for="email">Email</label>
                <input type="email" class="form-control mt-2" id="email" placeholder="Masukkan email" name="email" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group mb-3">
                <label class="fw-bold" for="noHp">Nomor HP</label>
                <input type="number" class="form-control mt-2" id="noHp" placeholder="Masukkan Nomor HP" name="noHp" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group mb-3">
                <label class="fw-bold" for="semester">Semester Saat Ini</label>
                <select class="form-select" aria-label="Default select example" name="semester" id="semester">
                  <option value="0" selected hidden>Pilih Semester</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                </select>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group mb-3">
                <label class="fw-bold" for="ipk">IPK Terakhir</label>
                <input type="hidden" value="<?= $nilai_IPK; ?>" class="form-control mt-2" id="ipk" name="ipk" required>
                <input type="number" value="<?= $nilai_IPK; ?>" disabled class="form-control mt-2" id="ipk" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group mb-3">
                <label class="fw-bold" for="pilihan">Pilihan Beasiswa</label>
                <?php
                if (isset($_POST['nilai_IPK'])) {
                  if ($_POST['nilai_IPK'] >= 3) { ?>
                    <select class="form-select" aria-label="Default select example" name="pilihan" id="pilihan">
                      <!-- <option value="0" selected hidden>Pilih Beasiswa</option> -->
                      <?php
                      if ($slide == "0") {
                      ?>
                        <option selected value="Beasiswa Akademik">Beasiswa Akademik</option>
                        <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                        <option value="Beasiswa Penelitian">Beasiswa Penelitian</option>
                      <?php } ?>
                      <?php
                      if ($slide == "1") {
                      ?>
                        <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                        <option selected value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                        <option value="Beasiswa Penelitian">Beasiswa Penelitian</option>
                      <?php } ?>
                      <?php
                      if ($slide == "2") {
                      ?>
                        <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                        <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                        <option selected value="Beasiswa Penelitian">Beasiswa Penelitian</option>
                      <?php } ?>
                    </select>
                  <?php } else { ?>
                    <select disabled class="form-select" aria-label="Default select example" name="pilihan" id="pilihan">
                      <option value="0" selected hidden>Pilih Beasiswa</option>
                    </select>
                <?php }
                } ?>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group mb-3">
                <label class="fw-bold" for="berkas">Upload Berkas Syarat</label>
                <div class="mb-3">
                  <?php
                  if (isset($_POST['nilai_IPK'])) {
                    if ($_POST['nilai_IPK'] >= 3) { ?>
                      <input class="form-control" type="file" id="berkas" name="berkas" required>
                    <?php } else { ?>
                      <input disabled class="form-control" type="file" id="berkas" name="berkas" required>
                  <?php }
                  } ?>

                </div>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <input type="hidden" name="status_ajuan" value="belum di verifikasi">
              <div class="row justify-content-center">
                <div class="col mx-auto d-flex justify-content-end">
                  <?php
                  if (isset($_POST['nilai_IPK'])) {
                    if ($_POST['nilai_IPK'] >= 3) { ?>
                      <button type="submit" class="btn btn-utama mt-3 ">Daftar</button>
                    <?php } else { ?>
                      <button disabled type="submit" class="btn btn-utama mt-3 ">Daftar</button>
                  <?php }
                  }
                  ?>

                </div>
                <div class="col mx-auto d-flex justify-content-start">
                  <a href="../Dashboard/">
                    <button type="button" class="btn btn-secondary mt-3 mx-auto" onclick="return confirm('Apakah Anda yakin untuk membatalkan?')">Batal</button>
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      <?php include '../Menu/footer.php'; ?>