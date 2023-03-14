<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM murid_baru WHERE id_siswa=$id");
 
// After delete redirect to Home, so hat latest user list will be displayed.
header("Location:index.php?menu=data_siswa");
?>