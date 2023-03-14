<?php

function content($menu)
{
    $cek = trim($menu);
    if ($cek == '') {
        $file = 'beranda.php';
    }
	if ($cek == 'beranda') {
        $file = 'beranda.php';
    }
    if ($cek == 'about') {
        $file = 'about.php';
    }
    if ($cek == 'profile') {
        $file = 'profile.php';
    }
	if ($cek == 'vision_mission') {
        $file = 'vision_mission.php';
    }
    if ($cek == 'tekstil') {
        $file = 'tekstil.php';
    }
    if ($cek == 'keramik') {
        $file = 'keramik.php';
    }
    if ($cek == 'multimedia') {
        $file = 'multimedia.php';
    }
    if ($cek == 'tekniksepedamotor') {
        $file = 'tsm.php';
    }
    if ($cek == 'ppdb') {
        $file = 'ppdb.php';
    }
	if ($cek == 'logout') {
        $file = 'logout.php';
    }
	if ($cek == 'pendaftaran') {
        $file = 'pendaftaran.php';
    }
	if ($cek == 'tahap_daftar') {
        $file = 'tahap_daftar.php';
    }
    if ($cek == 'data_siswa') {
        $file = 'data_siswa.php';
    }
    if ($cek == 'proses_edit'){
        $file = 'proses_edit.php';
    }
    if ($cek == 'edit') {
        $file = 'edit.php';
    }
    if ($cek == 'tahap_edit') {
        $file = 'tahap_edit.php';
    }
    if ($cek == 'delete') {
        $file = 'delete.php';
    }
    if($cek == 'tsm'){
        $file = 'tsm.php';
    }
    return $file;
}
?>