<?php
function status($total){
    if($total > 55){
        return 'Lulus';
    } else {
        return 'Tidak Lulus';
    }
}

function grade($total){
    if($total > 100){
        return "I";
    } elseif ($total > 84) {
        return "A";
    } elseif ($total > 69) {
        return "B";
    } elseif ($total > 55) {
        return "C";
    } elseif ($total > 35) {
        return "D";
    } elseif ($total > 0) {
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

function hello($a) {
    return "Hello $a!";
}
?>