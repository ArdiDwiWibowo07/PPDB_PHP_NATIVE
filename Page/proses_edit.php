<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenis_kelamin'];
    $sekolah = $_POST['asal_sekolah'];
    $alamat = $_POST['alamat'];
    $mobile = $_POST['mobile'];
    $jurusan = $_POST['jurusan'];

    // buat query
    $sql = "update murid_baru set nama = '$nama', jenis_kelamin = '$jenkel', asal_sekolah = '$sekolah', alamat = '$alamat', mobile = '$mobile', jurusan = '$jurusan' where id_siswa = '$id'";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?menu=data_siswa');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        window.alert("Pengisian masih ada yang salah");
    }


} else {
    die("Akses dilarang...");
}

?>