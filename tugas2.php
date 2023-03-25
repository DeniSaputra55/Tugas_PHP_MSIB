<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Gaji Pegawai</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div class="form-container">
    <h2>Form Gaji Pegawai</h2>
    <form method="POST">
        <label for=""> Nama  </label>
        <input type="text" name="nama" placeholder="masukan nama"> <br> 
        <label for="">Jabatan</label>
        <select name="jabatan" id="">
            <option value="">----Pilih Jabatan----</option>
            <option value="manager">Manager</option>
            <option value="asisten">Asisten</option>
            <option value="kabag">Kepala Bagian</option>
            <option value="staff">Staff</option>
        </select>
        <br>
        <label for="">Status Pernikahan</label>
        <select name="status" id="">
        <option value="">----Pilih Status----</option>
        <option value="single">Belum Menikah</option>
        <option value="menikah">Sudah Menikah</option>
        </select> <br>
        
        <label for="">Agama </label>
        <select name="agama" id="">
        <option value="">----Pilih Agama----</option>
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="budha">Kristen</option>
        <option value="hindu">Hindu</option>
        </select> <br>
        <label for="">Jumlah Anak</label>
        <input type="number" name="anak" placeholder="masukan jumlah anak"> <br>
        <button name="proses" type="submit">Hitung Gaji</button>
    </form>
    </div>
    <div class="form-container">
    <h3>Hasil Rincian Gaji Pegawai</h3>
    <?php
    error_reporting(0);
    $nama = $_POST ['nama'];
    $jabatan = $_POST ['jabatan'];
    $status = $_POST ['status'];
    $anak = $_POST ['anak'];
    $agama = $_POST ['agama'];
    $tombol = $_POST ['proses'];
    // 1. Tentukan gaji pokok (switch case)
    // Jika Manager = 20jt, Asisten = 15jt, Kabag = 10jt, Staff = 4jt
    switch ($jabatan) {
        case 'manager' :
            $gapok = 20000000;
            break;
        case 'asisten' :
            $gapok = 15000000;
            break;
        case 'kabag' :
            $gapok = 10000000;
            break;
        case 'staff' :
            $gapok = 4000000;
            break;
        default:
        $gapok = 0;
        break;
    }
    // 2. Tentukan tunjangan jabatan = 20% dari gaji pokok
    $tunjangan_jabatan = 0.2 * $gapok;
    // 3. Tentukan tunjangan keluarga (if multi kondisi):

    //     Jika sudah menikah dan anak maksimal 2 = 5% dari gapok
    
    //     Jika sudah menikah dan anak antara 3 - 5 = 10% dari gapok
    
    //     Selain itu belum dapat tunjangan keluarga
    if ($status == 'menikah') {
		if ($anak == 1 || $anak == 2) {
			$tunjangan_keluarga = 0.05 * $gapok;
		} elseif ($anak >= 3 && $anak <= 5) {
			$tunjangan_keluarga = 0.1 * $gapok;
		} else {
			$tunjangan_keluarga = 0;
		}
	} else {
		$tunjangan_keluarga = 0;
	}
    // 4. Tentukan gaji kotor
    $gaji_kotor = $gapok + $tunjangan_jabatan + $tunjangan_keluarga;
    // 5. Tentukan zakat_profesi (ternary)

    // Jika ia muslim dan gaji kotor minimal 6 juta, ada zakat = 2.5%

    // dari gaji kotor. Selain itu tidak ada zakat
    $zakat_profesi = ($agama == "islam" && $gaji_kotor >= 6000000) ? 0.025 * $gaji_kotor : 0 * $gaji_kotor;
    // 6. Tentukan take home pay
    $take_home_pay = $gaji_kotor - $zakat_profesi;
    
    if(isset($tombol)) {
    ?>
    Nama Pegawai : <?= $nama ?>
    <br>Gaji Pokok : <?= $gapok ?>
    <br>Jabatan : <?= $jabatan ?>
    <br>Status Pernikahan : <?= $status ?>
    <br>Agama : <?= $agama ?>
    <br>Jumlah anak : <?= $anak ?>
    <br>Tunjangan Jabatan : <?= $tunjangan_jabatan ?>
    <br>Tunjangan Keluarga  : <?= $tunjangan_keluarga ?>
    <br>Gaji Kotor : <?= $gaji_kotor ?>
    <br>Zakat Profesi : <?= $zakat_profesi ?>
    <br>Take home Pay : <?= $take_home_pay ?>
    <?php } ?>
    </div>
</body>
</html>