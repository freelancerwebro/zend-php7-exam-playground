<?php

// 1) array type hinting: available starting with PHP 5
// 

function displayColors(array $colors)
{
	foreach($colors as $color)
	{
		echo $color."\r\n";
	}
}

//displayColors("white");

// result:
//    Fatal error: Uncaught TypeError: Argument 1 passed to displayColors() must be of the type array, string given

$colors = array("green", "yellow", "blue");
displayColors($colors);

//result:
//   green
//   yellow
//   blue






// 2) object type hinting - available starting with PHP 5
//

class Model{

	protected $database;


	public function __construct(Database $database)
	{
		$this->database = $database;
	}
}

class Database{

}

$database = new Database();
$model = new Model($database);






// 3) scalar type hinting - available starting with PHP 7
//

class Product{

	protected $name;
	protected $price;
	protected $code;
	protected $active;

	// string type hinting
	public function setName(string $name)
	{
		$this->name = $name;
	}

	// float type hinting
	public function setPrice(float $price)
	{
		$this->price = $price;
	}

	// integer type hinting
	public function setCode(int $code)
	{
		$this->code = $code;
	}

	// boolean type hinting
	public function setActive(bool $active)
	{
		$this->active = $active;
	}

}




// 4) interface type hinting
//

interface AnimalInterface{
	public function speak();
}

class Dog implements AnimalInterface{
	public function speak()
	{
		return "woof";
	}
}

class Cat implements AnimalInterface{
	public function speak()
	{
		return "meow";
	}
}






