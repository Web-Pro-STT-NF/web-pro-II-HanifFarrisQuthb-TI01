<?php
class NilaiMahasiswa{
    var  $nim;
    var  $matkul;
    var  $nilai;

    function __construct($nim, $matkul, $nilai){
        $this -> nim = $nim;
        $this -> matkul = $matkul;
        $this -> nilai = $nilai;
    }

    function print(){
        echo 'NIM : ' . $this -> nim;
        echo '<br>Mata Kuliah : ' . $this -> matkul;
        echo '<br>Nilai : ' . $this -> nilai;
    }

    function status(){
        if($this -> nilai > 55){
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
    }
    
    function grade(){
        if($this -> nilai > 100){
            $grade = "I";
        } elseif ($this -> nilai > 84) {
            $grade = "A";
        } elseif ($this -> nilai > 69) {
            $grade = "B";
        } elseif ($this -> nilai > 55) {
            $grade = "C";
        } elseif ($this -> nilai > 35) {
            $grade = "D";
        } elseif ($this -> nilai > 0) {
            $grade = "E";
        } else{
            $grade = "I";
        }

        return $grade;
    }
    
    // function predikat(){
    //     switch ($this -> grade) {
    //         case "E":
    //             return "Sangat Kurang";
    //             break;
    
    //         case 'D':
    //             return "Kurang";
    //             break;
            
    //         case 'C':
    //             return "Cukup";
    //             break;
    
    //         case 'B':
    //             return "Memuaskan";
    //             break;
    
    //         case "A":
    //             return "Sangat Memuaskan";
    //             break;
    
    //         default:
    //             return "Error with your Inputs";
    //             break;
    //     }
    // }
}