<?php

class BMI{
    public $tinggi;
    public $berat;

    function nilai(){
        $tb = $this -> tinggi / 100;
        $hasil = $this -> berat / ($tb * $tb);

        return number_format($hasil, 2);
    }

    function status(){
        if ($this -> nilai() < 18.5){
            return "Kekurangan Berat Badan";
        } elseif ($this -> nilai() >= 18.5 && $this -> nilai() < 25) {
            return "Normal (Ideal)";
        } elseif ($this -> nilai() >= 25 && $this -> nilai() < 30) {
            return "Kelebihan Berat Badan";
        } elseif ($this -> nilai() >= 30) {
            return "Obesitas";
        }
    }
}