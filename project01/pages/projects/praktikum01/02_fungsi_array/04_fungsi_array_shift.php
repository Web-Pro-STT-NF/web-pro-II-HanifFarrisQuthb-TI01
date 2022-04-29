<!DOCTYPE html>
<body>
<?php

    $tims = ["Erwin" , "Heru" , "Ali" , "Zaki"];
    array_shift($tims);
    foreach($tims as $person){
        echo $person . '<br>';
    }

    // Array shift berfungsi untuk menghapus elemen pertama dari sebuah array
    // dan mengembalikan value dari element yang dihapus

?>

</body>
</html>