<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenis_kelamin'];
    $sekolah = $_POST['asal_sekolah'];
    $alamat = $_POST['alamat'];
    $mobile = $_POST['mobile'];
    $jurusan = $_POST['jurusan'];

    // buat query
    $sql = "INSERT INTO murid_baru (nama, jenis_kelamin,asal_sekolah, alamat,  mobile, jurusan ) VALUE ('$nama','$jenkel','$sekolah', '$alamat', '$mobile','$jurusan')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?menu=data_siswa');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>