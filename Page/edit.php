<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php?menu=data_siswa');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM murid_baru WHERE id_siswa=$id";
$query = mysqli_query($con, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Siswa </title>
</head>

<body>
    <header>
    <h4 class="text-center font-weight-bold">Form Edit Siswa</h4>
    </header>

    <form action="index.php?menu=proses_edit" method="POST">

        <fieldset>
        <section class="container-fluid mb-4">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">

            <input type="hidden" name="id" value="<?php echo $siswa['id_siswa'] ?>" />

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label></br>
            <?php $jenkel = $siswa['jenis_kelamin']; ?>
            <select name="jenis_kelamin" class="form-control">
            <option <?php echo ($jenkel == 'Laki-Laki') ? "selected": "" ?>>Laki-Laki</option>
            <option <?php echo ($jenkel == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
        </select>
        <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="nama sekolah" value="<?php echo $siswa['asal_sekolah'] ?>" />
        </p>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" ><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <textarea name="mobile" class="form-control" ><?php echo $siswa['mobile'] ?></textarea>
        </p>
        </p>
        <div class="form-group">
            <label for="jurusan">Jurusan</label></br>
            <?php $jurusan = $siswa['jurusan']; ?>
            <select name="jurusan" class="form-control">
                <option <?php echo ($jurusan == 'Keramik') ? "selected": "" ?>>Keramik</option>
                <option <?php echo ($jurusan == 'Multimedia') ? "selected": "" ?>>Multimedia</option>
                <option <?php echo ($jurusan == 'Teknik Sepeda Motor') ? "selected": "" ?>>Teknik Sepeda Motor</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Simpan"  name="simpan" class="btn btn-primary btn-block" />
        </p>

        </fieldset>


    </form>

    </body>
</html>