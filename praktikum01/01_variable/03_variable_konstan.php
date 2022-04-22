<?php

// definisikan konstanta
define('PHI' , 3.14);
define('DBNAME' , 'Inventory');
define('DBSERVER' , 'localhost');

$jari = 4;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari ' . $jari . ' : ' . $luas;
echo '<br>Dan kelilingnya adalah ' . $keliling;
?>
<hr/>
<?php
echo 'Nama databasenya : ' . DBNAME;
echo '<br> Lokasi databasenya ada di ' . DBSERVER;
?>

