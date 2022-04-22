<!DOCTYPE html>
<body>
<?php

    $tims = ["Erwin" , "Heru" , "Ali" , "Zaki"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person . '<br>';
    }

    // Array Pop berfungsi menghapus elemen terakhir dari sebuah array

?>

</body>
</html>