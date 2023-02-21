<?php 
    //POLYMORPHISM
    class CountNumbers{
        protected $numbers;

        public function __construct($setOfNumbers){
            $this->numbers=$setOfNumbers;
        }
        protected function theCount(){
            return count($this->numbers);
        }

        protected function theMax(){
            return max($this->numbers);
        }

        protected function theMin(){
            return min($this->numbers);
        }

        public function displayOutputs(){
            echo"<p>Numbers entered: ";
            echo"<table><tr>";
            foreach ($this->numbers as $index){
                echo"<td>$index</td>";
            }
            echo"</tr></table>";
            echo"</p>";
            echo"<p>Number of numbers: ". $this->theCount()."</p>";
            echo"<p>Maximum number: ". $this->theMax()."</p>";
            echo"<p>Minimum number: ". $this->theMin()."</p>";
        }

    }

    class CombineNumbers extends CountNumbers{
        protected function theSum(){
            $sum = 0;
            foreach ($this->numbers as $index){
                $sum= $sum + $index;
            }
            return $sum;
        }

        protected function theProduct(){
            return array_product($this->numbers);
        }

        public function displayOutputs(){
            echo "<p>Sum of numbers: ".$this->theSum()."</p>";
            echo "<p>Product of numbers: ".$this->theProduct()."</p>";
        }

    }


    class CompareNumbers extends CombineNumbers{

        private function theAverage(){
            return $this->theSum()/$this->theCount();
        }

        public function displayOutputs(){
            echo "<p>Average of numbers: ".$this->theAverage()."</p>";
        }

    }


    $userNumbers = array(1,2,3,4,5);
    $currentCount = new CountNumbers($userNumbers);
    $currentCount->displayOutputs();
    $currentCombine = new CombineNumbers($userNumbers);
    $currentCombine->displayOutputs();
    $currentCompare = new CompareNumbers($userNumbers);
    $currentCompare->displayOutputs();  

