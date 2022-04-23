<?php
class persegipanjang{
    private $panjang;
    private $lebar;

    function __construct($l, $p){
        $this -> lebar = $l;
        $this -> panjang = $p;
    }

    function getKeliling(){
        return 2 * ($this -> panjang + $this -> lebar);
    }

    function getLuas(){
        return $this -> panjang * $this -> lebar;
    }
}