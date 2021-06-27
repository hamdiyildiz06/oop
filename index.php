<?php
class insan{
    public $boy;
    public $kilo;
    public $yas;
    public $isim    = "hamdi";


    function __construct()
    {

    }

    public function kosmak(){
        echo  $this->isim." koşar<br>";
    }

    public function yurumek(){
        echo "insan yurumek<br>";
    }

    public function uyumak(){
        echo "insan uyumak<br>";
    }
}

$mehmet = new insan();

$mehmet->kosmak();
$mehmet->yurumek();
$mehmet->uyumak();