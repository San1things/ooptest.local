<?php

class NewClass {

    public $data = "This is a property";

    public function __construct(){
        echo "This class has been initiated! <br>";
    }

    public function setNewProperty($newdata){
        $this->data = $newdata;
    }

    public function getProperty(){
        return $this->data;
    }

    public function __destruct(){
        echo"<br> This is the end of the class!";
    }
}
