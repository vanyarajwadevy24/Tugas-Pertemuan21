<?php
class Animal {
    public $nama;
    public $jenis;

    function getInfo(){
        return " Hewan ini adalah $this->nama dan Jenisnya $this->jenis";
    }
}

class Cat extends Animal {
        function __construct($nama)
    {   
        $this->nama = $nama;
    }
        function getInfo(){
        return " Hewan ini adalah " . $this->nama . " , jenis " . $this->jenis = "kucing" . " . Kucing merupakan salah satu hewan kesayangan yang perlu mendapat perhatian untuk dipelihara dan dikembangbiakkan, sebagai hewan kesayangan";
    }
}
class dog extends Animal {
    function getInfo(){
        return " Hewan ini adalah " . $this->nama . " , jenis " . $this->jenis = "anjing" . " . Anjing merupakan hewan peliharaan yang memiliki hubungan paling dekat dengan manusia.";
    }
}

$animal = new Animal();
$animal->nama = " Kura - Kura ";
$animal->jenis = " Omnivora";
echo $animal->getInfo();
echo "</br>";
$cat = new Cat("Mine");
echo $cat->getInfo();
echo "</br>";
$dog = new Dog();
$dog->nama = "Milo";
echo $dog->getInfo();
?>