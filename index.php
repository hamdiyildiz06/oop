<?php
class Varlik{
    public $boy;
    public $kilo;
    public $yas;
    public $isim    = "hamdi";
    public $hayvan_turu = "köpek";


    function __construct($isim)
    {
        echo "selamlar ". $isim . "<br>";
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

    function __destruct(){
        echo "Güle güle ";
    }
}

class Hayvanlar extends Varlik{

    public function yemekyeme(){
        echo "Hayvanlar yemek yer <br>";
    }
    public function kosmak()
    {
        echo $this->hayvan_turu . 'ler hızlı koşar <br>';
    }
}




$mehmet = new Hayvanlar("hamdi");

$mehmet->yemekyeme();
$mehmet->kosmak();

//$mehmet->kosmak();
//$mehmet->yurumek();
//$mehmet->uyumak();