<!DOCTYPE html>
<body>
<?php

    $tims = ["Erwin" , "Heru" , "Ali" , "Zaki"];
    array_unshift($tims , "Joko" , "Wati");
    foreach($tims as $person){
        echo $person . '<br>';
    }

    // Array shift berfungsi untuk memasukkan elemen baru kedalam sebuah array.
    // Element baru akan dimasukkan pada awal dari array tersebut.

?>

</body>
</html>