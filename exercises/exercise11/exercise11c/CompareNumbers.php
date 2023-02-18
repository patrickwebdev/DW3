<?php
/**
*exercise11c.php
*/
class CompareNumbers extends CombineNumbers
{

    private function theAverage()
    {
        return $this->theSum() / $this->theCount();
    }

    public function displayOutputs3()
    {
        echo "<p>Average of numbers: " . $this->theAverage() . "</p>";
    }

}