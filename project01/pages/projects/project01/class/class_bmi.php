<?php

class BMI{
    public $tinggi;
    public $berat;

    function nilai(){
        $tb = $this -> tinggi / 100;
        $hasil = $this -> berat / ($tb * $tb);

        return number_format($hasil, 1);
    }

    function status(){
        if ($this -> nilai() < 18.5){
            return "Underweight";
        } elseif ($this -> nilai() >= 18.5 && $this -> nilai() < 25) {
            return "Normal";
        } elseif ($this -> nilai() >= 25 && $this -> nilai() < 30) {
            return "Overweight";
        } elseif ($this -> nilai() >= 30) {
            return "Obese";
        }
    }
}