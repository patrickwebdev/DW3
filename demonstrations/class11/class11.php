<?php 
class Students
{
  public $first_name;
  public $last_name;
  public $id;
  
 
  public function getFirstName()
  {
    return $this->first_name;
  }
 
  public function getLastName()
  {
    return $this->last_name;
  }

  private function setId()
  {
    $id=rand();
    return $id; 
  }
 
  public function getId()
  {
    return $this->setId(); 
  }

  public function save_user(){
    echo "Your profile have been saved <br/>";
    echo "Fisrt Name : " . $this->getFirstName();
  }
}

//Instantiate objects
$student1 = new Students;
$student2 = new Students;
$student3 = new Students;

//Assign value to properties
$student1->first_name = 'Patrick';
$student1->last_name = 'Saint-Louis';

$student2->first_name = 'Rasmus';
$student2->last_name = 'Lerdor'; 

$student3->first_name = 'Albert';
$student3->last_name = 'Einstein'; 

 
//Display outputs from methods
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
