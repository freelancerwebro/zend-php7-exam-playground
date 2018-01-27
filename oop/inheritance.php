<?php

class Car {

	public $color;

	protected function ride(){
		
	}

	protected function horn(){
		
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