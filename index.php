<?php
/**
*	@author Anthony Yolach S. Lloveras
*	Date: Feb. 1, 2015
*	this code is used for tutorial purposes only, It covers the basic of OOP using the object person
*	and uses of patters in terms of OOP.
*/


class Person 
{
	public $first_name;
	public $last_name;
	public $middle_initial;
	public $birth_year = 0;

	public function get_age() 
	{
		if(0 == $this->birth_year)
		{
			echo "please provide Year of birth <br/>";
		}
		else 
		{
			echo $this->first_name."'s age of this year is ".abs($this->birth_year - date("Y"));
		}
	}
	
	public function get_fullname() {
		echo "<p>".$this->last_name.", ".$this->first_name." ".$this->middle_initial."<br/>";
	}

}

$person1 = new Person;
// setting the person's details (aka naming the person)
$person1->first_name = "Juan";
$person1->last_name = "Dela Cruz";
$person1->middle_initial = "D.";

// call get the person's full name
$person1->get_fullname();
$person1->get_age(); // this will return "please provide Year of birth"

$person1->birth_year = 1990;
$person1->get_age();

// name another person
$person2 = new Person;

$person2->first_name = "Jose";
$person2->last_name = "Rizal";
$person2->middle_initial = "P.";
$person2->birth_year = 1863;

$person2->get_fullname();
$person2->get_age();