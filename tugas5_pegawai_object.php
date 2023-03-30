<!-- Kamis-30-03-2023 -->
<?php
require 'tugas5_pegawai.php';

$pegawai1 = new Pegawai('0111','Deni','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('0112','Bayu','Asisten Manager','Kristen','Menikah');
$pegawai3 = new Pegawai('0113','Bagas','Kepala Bagian','Hindu','Belum Menikah');
$pegawai4 = new Pegawai('0114','Zidan','Staff','Budha','Menikah');
$pegawai5 = new Pegawai('0115','Ela','Staff','Islam','Belum menikah');

$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>