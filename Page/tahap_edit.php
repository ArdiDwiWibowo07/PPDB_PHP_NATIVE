<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenis_kelamin'];
    $sekolah = $_POST['asal-sekolah'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['mobile'];
    $agama = $_POST['jurusan'];

    // buat query update
    $sql = "UPDATE murid_baru SET nama='$nama',jenis_kelamin='$jenkel',asal_sekolah='$sekolah', alamat='$alamat',  mobile='$mobile', jurusan='$jurusan',   WHERE id=$id";
    $query = mysqli_query($con, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman data_user.php
        header('Location: index.php?menu=data_siswa');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>