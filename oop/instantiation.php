<?php

class Person{

	public $name;

	public function walk()
	{
		echo $this->name." walks";
	}
}

$person = new Person; // instantiation

$person->name = "John Doe";

$person->walk();