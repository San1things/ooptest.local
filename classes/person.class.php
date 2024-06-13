<?php

class Person
{
    //Properties
    public $name;
    public $gender;
    public $age;

    //Methods
    public function setName(string $newName)
    {
        $this->name = $newName;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getName(){
        return $this->name;
    }
}
