<?php
Interface Hewan{
    public function makan();
    public function bergerak();
    public function berkembangbiak();
}

class kambing implements Hewan{
    public function makan(){
        return "Kambing makan rumput";
    }

    public function bergerak(){
        return "Bergerak dengan cara berjalan dan berlari";     
    }

    public function berkembangbiak(){
        return"berkembangbiak dengan cara melahirkan";     
    }
}

class sapi implements Hewan{
    public function makan(){
        return "Makan Rumput";
    }

    public function bergerak(){
        return "Bergerak dengan cara berjalan dan berlari";       
    }

    public function berkembangbiak(){
        return"berkembangbiak dengan cara melahirkan";       
    }
}

$kambing = new Kambing();
$sapi = new Sapi();

echo "============= Kambing ===========" . "\n";
echo $kambing -> makan() . "\n";
echo $kambing -> bergerak() . "\n";
echo $kambing -> berkembangbiak() . "\n";

echo "============= Sapi ============" . "\n";
echo $kambing -> makan() . "\n";
echo $kambing -> bergerak() . "\n";
echo $kambing -> berkembangbiak() . "\n";
