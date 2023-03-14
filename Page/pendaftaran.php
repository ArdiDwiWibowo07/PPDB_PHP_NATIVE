<!DOCTYPE html>
<html>
<head>
    <title>FORMULIR PPDB SMK NEGERI 1 ROTA BAYAT</title>
</head>

<body>
    <header>
    <h4 class="text-center font-weight-bold">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</h4>
    </header>

    <form action="index.php?menu=tahap_daftar" method="POST">
        <section class="container-fluid mb-4">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">

    <fieldset>
        
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
    </div>
    <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin"  id="jenis_kelamin" class="form-control" >
            <option value="">-Pilih Jenis Kelamin-</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
    </div>
    <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan Asal Sekolah">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Masukkan Mobile">
    </div>
    <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control">
                <option value="">-Pilihan jurusan-</option>
                <option value="Keramik">Tekstil</option>
                <option value="Tekstil">Keramik</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Otomotif">Teknik Sepeda Motor</option>
            </select>
    </div>

    
    <button type="submit" name="daftar" class="btn btn-primary btn-block">Daftar</button>
    <nav>
        <a href="index.php?menu=data_siswa"></a>
    </nav>

    </fieldset>

    </form>

    </body>
</html>
