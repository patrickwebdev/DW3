<?php   
    //exercise11b.php
    //Create the class Teachers
    class Teachers{
      private $first_name;
      private $last_name;
      private $birthdayYear; 
      private $email;
      private $phoneNumber;
      private $age;

      public function __construct($fName, $lName, $bYear, $eMail, $pNumber){
        $this->first_name = $fName;
        $this->last_name = $lName;
        $this->birthdayYear = $bYear;
        $this->email = $eMail;
        $this->phoneNumber = $pNumber;
      }    
 
      private function setAge(){
        $this->age = (getdate()['year']-$this->birthdayYear); 
      }
      private function getAge(){
        $this->setAge();
        return $this->age;
      }

      private function getFirstName(){
        return $this->first_name;
      }

      private function getLastName(){
        return $this->last_name;
      }

      private function getEmail(){
        return $this->email;
      }

      private function getPhone(){
        return $this->phoneNumber;
      }

      public function profile(){
        echo"<pre>";
            echo"<p>First Name:".$this->getFirstName()."</p>";
            echo"<p>Last Name :".$this->getLastName()."</p>";
            echo"<p>Email     :".$this->getEmail()."</p>";
            echo"<p>Phone     :".$this->getPhone()."</p>";
            echo"<p>Age       :".$this->getAge()."</p>";
        echo"</pre>";
      }

      public function __destruct() { 
        unset($this->first_name); 
        unset($this->last_name); 
        unset($this->birthdayYear); 
        unset($this->phoneNumber);
        unset($this->email);
        unset($this->age);
      }
    
    }
