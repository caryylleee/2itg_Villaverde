<?php

class Cake    
{
    // Member Variables
    private $orderType;
    private $string;
    private $int; 

    // Customized setters and getters
    public function setorderType($orderType)
    {
        $this->orderType = $orderType;
    }

    public function getorderType($orderType)
    {
        $this->orderType = $orderType;
    }

    public function setString($string)
    {
        $this->string = $string;
    }

    public function getString($string)
    {
        $this->string = $string;
    }

    public function setInt($int)
    {
        $this->int = $int;
    }

    public function getInt($int)
    {
        $this->int = $int;
    }
    
}

// Creating a new object
$cake1 = new Cake();

$cake 1->$orderType = 'Takeout';
$cake 1->$string = 'Choco Mousse';
$cake 1->$int = 649;

?>