<!-- mengambil data dari $_POST yang dikirimkan oleh index.php -->
<?php
include '../Database/koneksi.php';
$namaLengkap = $_POST['namaLengkap'];
$email = $_POST['email'];
$noHp = $_POST['noHp'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
$pilihan = $_POST['pilihan'];
$status_ajuan = $_POST['status_ajuan'];

// mengambil data berkas
if ($semester == "0") {
  echo "<script>alert('Maaf, Semester tidak boleh kosong!');window.location.href='index.php';</script>";
  die();
}

if ($pilihan == "0") {
  echo "<script>alert('Maaf, Pilihan Beasiswa tidak boleh kosong!');window.location.href='index.php';</script>";
  die();
}
// untuk mengeksekusi gambar
$nama_berkas = $_FILES['berkas']['name'];
// hilangkan character spesial
$nama_berkas = preg_replace("/[^A-Za-z0-9\_\-\.]/", '', $nama_berkas);
$nama_berkas = rand() . $nama_berkas;
$ukuran_file = $_FILES['berkas']['size'];
$tipe_file = $_FILES['berkas']['type'];
$tmp_file = $_FILES['berkas']['tmp_name'];
// Set path folder tempat menyimpan berkasnya
$path = "berkas/" . $nama_berkas;
// jika folder belum ada maka akan membuat folder baru
if (!file_exists("berkas")) {
  mkdir("berkas", 0777, true);
}
// proses uploadnya
if (
  $tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/webp" ||
  $tipe_file == "application/pdf" || $tipe_file == "application/zip" || $tipe_file == "application/x-rar-compressed"
) {
  if (move_uploaded_file($tmp_file, $path)) { // Cek apakah file berhasil diupload atau tidak
    // Jika gambar berhasil diupload, Lakukan :
    // hilangkan character spesial sebelum masuk ke database
    $namaLengkap = mysqli_real_escape_string($koneksi, $namaLengkap);
    $email = mysqli_real_escape_string($koneksi, $email);
    $noHp = mysqli_real_escape_string($koneksi, $noHp);
    $semester = mysqli_real_escape_string($koneksi, $semester);
    $ipk = mysqli_real_escape_string($koneksi, $ipk);
    $pilihan = mysqli_real_escape_string($koneksi, $pilihan);
    // Proses simpan ke Database
    $query = "INSERT INTO pendaftar (namaLengkap, email, noHp, semester, ipk, pilihan, berkas, status_ajuan) VALUES ('$namaLengkap', '$email', '$noHp', '$semester', '$ipk', '$pilihan', '$nama_berkas', '$status_ajuan')";
    $sql = mysqli_query($koneksi, $query);
    // Eksekusi Jalankan query dari variabel $query
    if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
      echo "<script>alert('Data berhasil disimpan!');window.location.href='../Hasil/index.php';</script>";
    } else {
      // gunakan alert
      echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database!');window.location.href='index.php';</script>";
    }
  } else {
    // gunakan alert
    echo "<script>alert('Maaf, File gagal untuk diupload!');window.location.href='index.php';</script>";
  }
} else {
  // gunakan alert
  echo "<script>alert('Maaf, Tipe file yang diupload tidak sesuai!');window.location.href='index.php';</script>";
}
?>