<?php 
//Create a Class
class Students
{
  //Declare Properties
  public $first_name;
  public $last_name;
  private $id;
  
  //Create a Method
  public function getFirstName()
  {
    return $this->first_name;
  }
 
  //Create a Method
  public function getLastName()
  {
    return $this->last_name;
  }

  //Create a Method
  private function setId()
  {
    $this->id=rand();
  }
 
  //Create a Method
  public function getId()
  {
    $this->setId();
    return $this->id; 
  }
}

//Instantiate Objects
$student1 = new Students;
$student2 = new Students;
$student3 = new Students;

//Assign value to Properties
$student1->first_name = 'Patrick';
$student1->last_name = 'Saint-Louis';

$student2->first_name = 'Rasmus';
$student2->last_name = 'Lerdor'; 

$student3->first_name = 'Albert';
$student3->last_name = 'Einstein'; 

 
//Display outputs from Methods
echo"<pre>";

echo"<p>First Name:".$student1->getFirstName()."</p>";
echo"<p>Last Name :".$student1->getLastName()."</p>";
echo"<p>ID        :".$student1->getId()."</p>";

echo"<hr/>";

echo"<p>First Name:".$student2->getFirstName()."</p>";
echo"<p>Last Name :".$student2->getLastName()."</p>";
echo"<p>ID        :".$student2->getId()."</p>";

echo"<hr/>";

echo"<p>First Name: ".$student3->getFirstName()."</p>";
echo"<p>Last Name : ".$student3->getLastName()."</p>";
echo"<p>ID        : ".$student3->getId()."</p>";

echo"</pre>";
