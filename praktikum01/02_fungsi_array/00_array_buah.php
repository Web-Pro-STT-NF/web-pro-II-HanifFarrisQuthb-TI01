<?php
    $ar_buah = ["Pepaya" , "Mangga" , "Pisang" , "Jambu"];

    // cetak buah ke Index ke 2
    echo $ar_buah[2];

    // cetak jumlah buah
    echo '<br>Jumlah buah : ' . count($ar_buah);

    // cetak seluruh buah
    echo '<ol>';
    foreach($ar_buah as $buah) {
        echo '<li>' . $buah . '</li>';
    }
    echo '<ol/>';

    // tambah buah
    $ar_buah[] = "Durian";

    // Hapus Buah index ke 1
    unset($ar_buah[1]);

    // Ubah buah index 2 menjadi manggis
    $ar_buah[2] = "Manggis";

    // cetak seluruh buah dengan indexnya
    echo '<ul>';
    foreach($ar_buah as $k => $v){
        echo '<li> buah index - ' . $k . ' adalah ' . $v . '</li>';
    }
    echo '</ul>';
    ?>