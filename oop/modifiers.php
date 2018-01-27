<?php

// public can be accessed everywhere
// protected can be accessed in the class or in child classes
// private can be accessed in the class itself only

class Base{

	public $name = "My name is public";
	protected $somePersonalInfo = "My personal info is protected";
	private $password = "My password is private";
}

$base = new Base;
echo $base->name."<br/>"; // it works
echo $base->somePersonalInfo; // PHP Fatal error:  Uncaught Error: Cannot access protected property Base::$somePersonalInfo
echo $base->password; // PHP Fatal error:  Uncaught Error: Cannot access private property Base::$password

class Child extends Base{


	public function getPersonalInfo()
	{
		return $this->somePersonalInfo;
	}

	public function getPassword()
	{
		return $this->password;
	}
}


$child = new Child;
echo $child->name."<br/>"; // it works
echo $child->somePersonalInfo; // PHP Fatal error:  Uncaught Error: Cannot access protected property Child::$somePersonalInfo
echo $child->getPersonalInfo(); // it works
echo $child->getPassword(); // PHP Notice:  Undefined property: Child::$password