<?php
require_once 'tugas6_lingkaran.php';
require_once 'tugas6_persegipanjang.php';
require_once 'tugas6_segitiga.php';

$lingkaran = new Lingkaran(7);
$persegi_panjang = new PersegiPanjang(8, 6);
$segitiga = new Segitiga(12, 8);

echo "<table border='2' >
    <h2>Hasil luas dan keliling bidang 2D </h2>
    <tr>
        <th>Bidang</th>
        <th>Luas</th>
        <th>Keliling</th>
    </tr>";

echo "<tr>
        <td>" . $lingkaran->namaBidang() . "</td>
        <td>" . $lingkaran->luasBidang() . "</td>
        <td>" . $lingkaran->kelilingBidang() . "</td>
    </tr>";
echo "<tr>
        <td>" . $persegi_panjang->namaBidang() . "</td>
        <td>" . $persegi_panjang->luasBidang() . "</td>
        <td>" . $persegi_panjang->kelilingBidang() . "</td>
    </tr>";
echo "<tr>
    <td>" . $segitiga->namaBidang() ."</td>
    <td>" . $segitiga->luasBidang() . "</td>
    <td>" . $segitiga->kelilingBidang() . "</td>
</tr>";
?>
<style>
    table {
			width: 80%;
			height: 300px;
			margin: auto;
			background-color: #e1e1e1;
			border-collapse: collapse;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
		}
		th, td {
			padding: 15px;
			text-align: center;
			color: #555;
			font-weight: bold;
			font-size: 18px;
			border-bottom: 1px solid #ddd;
			transition: all 0.3s ease-in-out;
		}
		th {
			background-color: #3b3b3b;
			color: white;
		}
		tr:hover td {
			background-color: #b8dbff;
			color: white;
		}
        h2 {
            text-align: center;
        }
	</style>
</style>
