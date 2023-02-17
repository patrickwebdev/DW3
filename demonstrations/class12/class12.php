<?php 
//1-CONSTRUCTOR & DESCTUCTOR METHOD
//Create a Class
class Students
{
    //Declare Properties
    private $firstName;
    private $lastName;
    private $age;
    
    //Create the Constructor Method
    /*This Method is automatically called when a new object is created
    ... Now you can pass arguments to the Constructor when creating a new object
    ... For example $student1 = new Students('Ralph', 'Shah', 24);*/
    public function __construct($name1, $name2, $old){
        $this->firstName = $name1;
        $this->lastName = $name2;
        $this->age = $old;
    }
 
    //Create a Method
    private function getFirstName()
    {
        return $this->firstName;
    }

    //Create a Method
    private function getLastName()
    {
        return $this->lastName;
    }

    //Create a Method
    private function getAge()
    {
        return $this->age;
    }

    //Create a Method
    public function display_outputs(){
        echo "<p>First Name:".$this->getFirstName()."</p>";
        echo "<p>Last Name:".$this->getLastName()."</p>";
        echo "<p>Age:".$this->getAge()."</p>";
    }

    //Create a Destructor Method
    //This Method is automatically called at the end of the script
    public function __destruct() { 
        echo "<hr/>";
        echo "<p>Thank you for your registration ".$this->firstName."</p>"; 
    }
}
//Create an Object and assign value to the Constructor Method as arguments
$student1 = new Students('Ralph', 'Shah', 24);
$student2 = new Students('Cheng', 'Jacky', 24); 
$student3 = new Students('Hello', 'World', 28); 

//Invoke a Method
$student1->display_outputs(); 
$student2->display_outputs(); 
$student3->display_outputs(); 


//2-INHERITANCE: CHILD AND PARENTS CLASSES
//Create a Class
class User
{
    //Declare Properties 
    public $name, $password;

    //Create a Method
    public function save_user()
    {
        echo "<p>Your account is successfully registered:".$this->name."</p>";
    }
}
//Create a Child Class of the parent Class User
class Subscriber extends User
{
    //Declare Properties
    public $phone, $email;

    //Create a Method that access Properties of the parent class
    public function display()
    {
        echo "Account Information -  </p>";
        echo "Name: " . $this->name . "</p>";
        echo "Password: " . $this->password . "</p>";
        echo "Phone: " . $this->phone . "</p>";
        echo "Email: " . $this->email . "</p>";
    }
}

echo"<br/><br/>";

//Instantiate Objects
$objectUser1 = new Subscriber;
//Assign value to Properties
$objectUser1->name = "Fred";
$objectUser1->password = "pword";
//Display outputs from Methods
$objectUser1->save_user();

echo"<br/><br/>";

//Instantiate Objects
$objectSubscriber1 = new Subscriber;
//Assign value to Properties
$objectSubscriber1->name = "Fred";
$objectSubscriber1->password = "pword";
$objectSubscriber1->phone = "012 345 6789";
$objectSubscriber1->email = "fred@bloggs.com";
//Display outputs from Methods
$objectSubscriber1->display();
