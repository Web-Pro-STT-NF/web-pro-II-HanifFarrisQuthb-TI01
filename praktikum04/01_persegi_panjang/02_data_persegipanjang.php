<?php
require_once "01_class_persegipanjang.php";

$persegipanjang1 = new persegipanjang(10, 8);
$persegipanjang2 = new persegipanjang(12, 14);

echo "<br>Luas Persegi Panjang Pertama = " . $persegipanjang1 -> getLuas();
echo "<br>Luas Persegi Panjang Kedua = " . $persegipanjang2 -> getLuas();

echo "<hr>";

echo "<br>Keliling Persegi Panjang Pertama = " . $persegipanjang1 -> getKeliling();
echo "<br>Keliling Persegi Panjang Kedua = " . $persegipanjang2 -> getKeliling();
?>
