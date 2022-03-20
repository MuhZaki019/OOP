<?php

interface price{
	public function totalharga();
}

abstract class kayu{
	abstract public function jenis();
}

class jati extends kayu implements price{
	  private $panjang;
    private $harga;
    
    public function __construct($panjang,$harga){
    	$this->panjang = $panjang;
        $this->harga = $harga;
    }

	public function totalharga(){
    	return $this->panjang * $this->harga;
    }

    public function jenis(){
    	return 'Kayu Jati';
    }
}

class gaharu extends kayu implements price{
  	private $panjang;
    private $harga;
    
    public function __construct($panjang,$harga){
    	$this->panjang = $panjang;
        $this->harga = $harga;
    }
    
	public function totalharga(){
    	return $this->panjang * $this->harga;
    }
    
    public function jenis(){
    	return 'kayu gaharu';
    }
}

class mahoni extends kayu implements price{
	private $panjang;
    private $harga;
    
    public function __construct($panjang,$harga){
    	$this->panjang = $panjang;
        $this->harga = $harga;
    }
    
	public function totalharga(){
    	return $this->panjang * $this->harga;
    }
    
    public function jenis(){
    	return 'kayu mahoni';
    }  
}

$jati= new jati(4,1000000);
$gaharu = new gaharu (1,4000000);
$mahoni = new mahoni (1,250000);

echo "Jenis ".$jati->jenis()."\n";
echo "Total Harga kayu jati Rp".$jati->totalharga()."\n";

echo "\n";
echo "Jenis ". $gaharu->jenis()."\n";
echo "Total Harga kayu gaharu Rp". $gaharu->totalharga() . "\n";

echo "\n";
echo "Total Harga kayu mahoni Rp ".$mahoni->totalharga() . "\n";
echo "Jenis ".$mahoni->jenis()."\n";
