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

    function status($nilai){
        if($nilai > 55){
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
    }
    
    function grade($nilai){
        if($nilai > 100){
            return "I";
        } elseif ($nilai > 84) {
            return "A";
        } elseif ($nilai > 69) {
            return "B";
        } elseif ($nilai > 55) {
            return "C";
        } elseif ($nilai > 35) {
            return "D";
        } elseif ($nilai > 0) {
            return "E";
        } else{
            return "I";
        }
    }
    
    function predikat($grade){
        switch ($grade) {
            case "E":
                return "Sangat Kurang";
                break;
    
            case 'D':
                return "Kurang";
                break;
            
            case 'C':
                return "Cukup";
                break;
    
            case 'B':
                return "Memuaskan";
                break;
    
            case 'A':
                return "Sangat Memuaskan";
                break;
    
            default:
                return   "Error with your Inputs";
                break;
        }
    }
}