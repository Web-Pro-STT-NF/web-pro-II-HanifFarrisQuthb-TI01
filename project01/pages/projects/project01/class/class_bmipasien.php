<?php
include_once "class_bmi.php";
include_once "pasien.php";

class BMIPasien extends BMI{
    use Pasien;
    public $tanggal;

    function __construct($tanggal, $kode, $nama, $jk, $berat, $tinggi){
        $this -> kode = $kode;
        $this -> nama = $nama;
        $this -> jk = $jk;
        $this -> tanggal = $tanggal;
        $this -> berat = $berat;
        $this -> tinggi = $tinggi;
    }

    function kode(){
        return $this -> kode;
    }

    function nama(){
        return $this -> nama;
    }

    function jk(){
        return $this -> jk;
    }

    function tanggal(){
        return $this -> tanggal;
    }

    function berat(){
        return $this -> berat;
    }

    function tinggi(){
        return $this -> tinggi;
    }
}