
<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Peserta Didik Baru </title>
</head>

<body>
    <header>
        <h3> Siswa Yang Sudah Mendaftar</h3>
    </header>

    <nav>
        <a href="index.php?menu=pendaftaran">[+] Tambah Baru</a>
    </nav>

    <br>

    <table width='80%' border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Asal Sekolah</th>
            <th>Alamat</th>
            <th>Mobile</th>
            <th>Jurusan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM murid_baru";
        $query = mysqli_query($con, $sql);

        while($murid = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$murid['id_siswa']."</td>";
            echo "<td>".$murid['nama']."</td>";
            echo "<td>".$murid['jenis_kelamin']."</td>";
            echo "<td>".$murid['asal_sekolah']."</td>";
            echo "<td>".$murid['alamat']."</td>";
            echo "<td>".$murid['mobile']."</td>";
            echo "<td>".$murid['jurusan']."</td>";
            echo "<td><a href='index.php?menu=edit&id=$murid[id_siswa]'class='btn btn-primary '>Edit</a> | <a href='index.php?menu=delete&id=$murid[id_siswa]'class='btn btn-danger'>Delete</a></td></tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>