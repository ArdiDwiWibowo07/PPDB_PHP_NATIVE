<?php
include 'fungsi_halaman.php';
require_once 'header.php';
?>
<div class="content">
    <?php
    //menampilkan content yang diinginkan
    $file = content($_GET['menu']);
    include "page/$file";
    ?>
</div>

<?php require_once 'footer.php'; ?>
</div>