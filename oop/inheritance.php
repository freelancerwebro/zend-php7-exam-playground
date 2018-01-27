<?php

class Car {

	public $color;

	public function ride(){
		echo "Ride";
	}

	public function horn(){
		echo "Horn!!!";
	}

}

class Volkswagen extends Car {
			
}

class Bmw extends Car {

}

class Passat extends Volkswagen {
	
}


$bmw = new Bmw;
$bmw->ride();