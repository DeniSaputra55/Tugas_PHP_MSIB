<!-- rabu 29-3-2023 -->
<link rel="stylesheet" href="css/tugas4.css">
<?php 
$ar_prodi = ["SI"=>"Sistem informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWO Boostrap"=>20, "PHP"=>30, "MysSQl"=>30, "Laravel"=>40];

$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya","Tegal","lainnya"];
?>
<fieldset  class="form">
    <table>
        <thead>
            <h3 style="text-align: center;">Form Registrasi</h3>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NIM </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" >
                    </td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" >
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin </td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="L" >Laki-laki &nbsp;
                        <input type="radio" name="jk" value="P" >Perempuan &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>Program Studi  </td>
                    <td>:</td>
                    <td>
                        <select name="prodi">
                            <?php 
                            foreach($ar_prodi as $prodi => $v){
                            ?>
                            <option value="<?= $prodi ?>"><?= $v ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming  </td>
                    <td>:</td>
                    <td>
                        <?php
                        foreach ($ar_skill as $skill => $s){
                            ?>
                        <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Domisili  </td>
                    <td>:</td>
                    <td>
                        <select name="domisili">
                            <?php 
                            foreach($domisili as $d){
                                ?>
                                <option value="<?= $d ?>"><?= $d ?></option>
                            <?php  } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email  </td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" >
                    </td>
                </tr>
                <tfoot>
                    <tr>
                        <td align="right">
                            <button name="proses">Submit</button>
                        </td>
                    </tr>
                    
                </tfoot>
            </form>
        </tbody>
    </table>
</fieldset>
<?php 
// error_reporting();
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
}
function tambahHitungSkorSkill($ar_skill, $pilihan) {
    $total_skor = 0;
  
    foreach ($pilihan as $skill) {
      if (isset($ar_skill[$skill])) {
        $total_skor += $ar_skill[$skill];
      }
    }
  
    return $total_skor;
  }
  
   {
    $pilihan = $_POST["skill"] ?? [];
    $total_skor = tambahHitungSkorSkill($ar_skill, $pilihan);
    
  }
  if ($total_skor >= 101 && $total_skor <= 150) {
    $kategori = "sangat baik";
} elseif ($total_skor >= 60 && $total_skor <= 100) {
    $kategori = "baik";
} elseif ($total_skor >= 40 && $total_skor <= 59) {
    $kategori = "cukup";
} elseif ($total_skor >= 0 && $total_skor <= 39) {
    $kategori = "kurang";
} else {
    $kategori = "tidak memandai";
}

?>
<fieldset class="output">
<table>
    <thead>
        <h3 style="text-align: center;">Data Form Registrasi</h3>
    </thead>
    <tbody>
                <tr>
                    <td>NIM </td>
                    <td>:</td>
                    <td>
                        <?= $nim ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td>
                        <?= $nama ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin </td>
                    <td>:</td>
                    <td>
                        <?= $jk ?>
                    </td>
                </tr>
                <tr>
                    <td>Program Studi  </td>
                    <td>:</td>
                    <td>
                        <?= $prodi ?>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming  </td>
                    <td>:</td>
                    <td>
                    <?php
                    foreach($skill as $s){ ?>
                    <?= $s ?>,
                    <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Skor Skill</td>
                    <td>:</td>
                    <td> <?= $total_skor ?></td>
                </tr>
                <tr>
                    <td>Kategori Skill</td>
                    <td>:</td>
                    <td> <?= $kategori ?></td>
                </tr>
                <tr>
                    <td>Domisili  </td>
                    <td>:</td>
                    <td>
                        <?= $domisili ?>
                    </td>
                </tr>
                <tr>
                    <td>Email  </td>
                    <td>:</td>
                    <td>
                        <?= $email ?>
                    </td>
                </tr>
</table>
</fieldset>