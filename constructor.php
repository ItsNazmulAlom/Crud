<?php

class person 
{

	public $name;
	public $age;
	
	function __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
	}

	public function personDetails(){
		echo "person Name is($this->name) and person Age is($this->age)";
	}

	
}

    $personOne = new person("kausar","23");
	$personOne ->personDetails();

?>