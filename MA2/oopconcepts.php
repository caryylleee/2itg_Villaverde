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
        echo "ORDER DETAILS <br>";
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

    public function getcustomerName()
    {
        return $this->customerName;
    }

    // Additional Method
    function printInfo()
    {
        echo "ORDER DETAILS <br>";
        echo "Your name is: $this->customerName <br>";
        echo "Your order type is: $this->orderType <br>";
        echo "The cake that you ordered is: $this->cakeType <br>";
        echo "Your cake costs: $this->cakePrice <br>";
    }
}

// Multilevel
class CakePops extends KalleCafe
{

}

// Hierarchical
class SpongeCake extends Cake 
{
    public function displayInfo()
    {
        parent::displayInfo();
        echo "We hope you enjoyed your order here at Kalle Cafe! See you soon again. :)";
    }
}

// Creating a new object
$cake1 = new Cake();
$cake1->setorderType("Take-out");
$cake1->setcakeType("Choco Mousse");
$cake1->setcakePrice(649);
$cake1->displayInfo();

echo "<br/>";

$cake2 = new KalleCafe("Dine-in", "A slice of Blueberry Cheesecake", 139, "Ms. Micole");
$cake2->printInfo();

echo "<br/>";

$cake3 = new SpongeCake();
$cake3->setorderType("Dine-in");
$cake3->setcakeType("Salted Caramel");
$cake3->setcakePrice(1649);
$cake3->displayInfo();

?>