<?php
include_once "class_bmi.php";
include_once "pasien.php";

class BMIPasien extends BMI{
    use Pasien;
    public $tanggal;

    function __construct($kode, $nama, $jk, $tanggal, $berat, $tinggi){
        $this -> kode = $kode;
        $this -> nama = $nama;
        $this -> jk = $jk;
        $this -> tanggal = $tanggal;
        $this -> berat = $berat;
        $this -> tinggi = $tinggi;
    }

    function GetKode(){
        return $this -> kode;
    }

    function GetNama(){
        return $this -> nama;
    }

    function GetJK(){
        return $this -> jk;
    }

    function GetTanggal(){
        return $this -> tanggal;
    }

    function GetBerat(){
        return $this -> berat;
    }

    function GetTinggi(){
        return $this -> tinggi;
    }
}