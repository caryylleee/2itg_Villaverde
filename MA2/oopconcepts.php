<?php

class Cake    
{
    // Member Variables
    private $orderType;
    private $cakeType;
    private $cakePrice; 

    // Customized setters and getters
    public function setorderType($orderType)
    {
        $this->orderType = $orderType;
    }

    public function getorderType($orderType)
    {
        return $this->orderType;
    }

    public function setcakeType($cakeType)
    {
        $this->cakeType = $cakeType;
    }

    public function getcakeType($cakeType)
    {
        return $this->cakeType;
    }

    public function setcakePrice($cakePrice)
    {
        $this->cakePrice = $cakePrice;
    }

    public function getcakePrice($cakePrice)
    {
        return $this->cakePrice;
    }

    // Methods
    public function displayInfo()
    {
        echo "Your order type is: $this->orderType <br>";
        echo "The cake that you ordered is: $this->cakeType <br>";
        echo "Your cake costs: $this->cakePrice <br>";
    }
}

// Creating a new object
$cake1 = new Cake();
$cake1->setorderType("Takeout");
$cake1->setcakeType("Choco Mousse");
$cake1->setcakePrice(649);
$cake1->displayInfo();

?>