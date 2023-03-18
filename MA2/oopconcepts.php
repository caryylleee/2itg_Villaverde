<?php

// Parent Class
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

// Child Class
class KalleCafe extends Cake
{
    // Additional Member Variable
    private $customerName;

    // Customized setters and getters
    public function __construct($orderType, $cakeType, $cakePrice, $customerName)
    {
        $this->orderType = $orderType;
        $this->cakeType = $cakeType;
        $this->cakePrice = $cakePrice;
        $this->customerName = $customerName;
    }

    // Additional Method
    function printInfo()
    {
        echo "<br> <br> Your name is: $this->customerName <br>";
        echo "Your order type is: $this->orderType <br>";
        echo "The cake that you ordered is: $this->cakeType <br>";
        echo "Your cake costs: $this->cakePrice <br>";
    }
}

// Multilevel Inheritance
class Multilevel extends CakePops
{

}

// Hierarchical Inheritance
class Hierarchical extends SpongeCake
{

}

// Creating a new object
$cake1 = new Cake();
$cake1->setorderType("Take-out");
$cake1->setcakeType("Choco Mousse");
$cake1->setcakePrice(649);
$cake1->displayInfo();

$cake2 = new KalleCafe("Dine-in", "A slice of Blueberry Cheesecake", 649, "Ms. Micole");
$cake2->printInfo();

?>