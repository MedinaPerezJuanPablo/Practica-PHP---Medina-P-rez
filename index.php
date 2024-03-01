<?php
$age=null;
$age=20;
$name = "Pablo";
$lastName='Medina Pérez';
$size=1.75;
$boolean=true;
//comentario de linea
/*
comentario multilinea
*/
$array = [];
$array2= array();
$array3=[10,"hola",1.5];
const CONSTANTE = 3.1416;
$object=new stdClass();

class Auto{
    var $color="azul";
    var $marca="nissan";

    int $nODoors=0;
    public function__constructor (public int $doors){
        $this->nODoors=$doors;
    }

}

public function getDetails(string $time){
    echo "Hola mundo a las: ".$time;
}

$autoInstance = new Auto(4);

for($i=0,$i<10,i++){
    echo $i."\n"
}

?>