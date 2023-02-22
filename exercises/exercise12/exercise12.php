<?php
/*
//exercise12a
//__set() and __get() SPECIAL METHODS
class Subscribers
{
    private $data = array();
    public function __set($dynamicProperty, $value)
    {
        $this->data[$dynamicProperty] = $value;
    }
    public function __get($dynamicProperty)
    {
        if (array_key_exists($dynamicProperty, $this->data)) {
            return "Your '$dynamicProperty' is: " . $this->data[$dynamicProperty];
        }
        else{
            return"Sorry, you didn't register your '$dynamicProperty' yet!";
        }
    }
}

//Instantiate an Object
$currentUser = new Subscribers();
//Create dynamic Properties and their values
$currentUser->firstName = "Jonathan";
$currentUser->lastName = "David";
//Invoke dynamic Properties  
echo "<p>".$currentUser->firstName."</p>"; 
echo "<p>".$currentUser->lastName."</p>"; 
echo "<p>".$currentUser->phone."</p>"; 

*/


//exercise12b
//__call() SPECIAL METHODS
class Arithmetic
{
    private $x, $y, $z;
    public function __construct($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function product()
    {
        return "$this->x x $this->y x $this->z = ".$this->x * $this->y * $this->z;
    }
    public function __call($name, $arguments)
    {
        return "<p>A Method with name: '$name' does not exist yet!</p>";
    }
}

//Create an Object
$test1 = new Arithmetic(1,2,3);
//Invoke Methods
echo $test1->product();
echo $test1->sum();
