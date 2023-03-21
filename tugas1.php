<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Bangun datar jajar genjang</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <form method="POST">
    <table align="center" border="1" width="10%">
        <tr>
        <th colspan="2">Bangun datar Jajar Genjang</th>
        </tr>
        <tr>
            <td >Alas </td>
            <td><input type="number" name="alas" require></td>
        </tr>
        <tr>
            <td>Tinggi </td>
            <td><input type="number" name="tinggi" require></td>
        </tr>
        <tr>
            <td>Sisi 1</td>
            <td><input type="number" name="sisi1" require></td>
        </tr>
        <tr>
            <td>Sisi 2</td>
            <td><input type="number" name="sisi2" require></td>
        </tr>
        <tr >
            <td colspan="2"><input  type="submit" name="submit" value="Hitung"></td>
        </tr>
    </table>
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];


        $luasjajargenjang = $alas * $tinggi;
        $kelilingjajargenjang = 2 * ($sisi1 + $sisi2);

        echo 'Hasil Perhitungan Luas dan Keliling Jajar Genjang' ;
        echo '<br> Diketahui : ';
        echo '<br> Alas         :'.$alas;
        echo '<br> Tinggi       :'.$tinggi;
        echo '<br> Sisi Pertama : '.$sisi1;
        echo '<br> Sisi Kedua   : '.$sisi2;

        echo '<br> Maka Luas Jajar Genjang adalah       : '.$luasjajargenjang;
        echo '<br> Maka Keliling jajar genjang adalah   :'.$kelilingjajargenjang ;


    }
    ?>
</body>
</html>