<?php

interface Vehicle{

	public function moveForward();
	public function moveBackward();
	public function stop();
}


class Airplane implements Vehicle{

	public function moveForward()
	{
		echo "Move the Airplane forward";
	}

	public function moveBackward()
	{
		echo "Move the Airplane backward";
	}

	public function stop()
	{
		echo "Stop the Airplane";
	}
}

class Car implements Vehicle{

	public function moveForward()
	{
		echo "Move the Car forward";
	}

	public function moveBackward()
	{
		echo "Move the Car backward";
	}

	public function stop()
	{
		echo "Stop the Car";
	}

}