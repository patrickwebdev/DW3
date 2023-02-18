<?php
/**
*exercise11c.php
*/
class CountNumbers
{
    protected $numbers;

    public function __construct($setOfNumbers)
    {
        $this->numbers = $setOfNumbers;
    }
    protected function theCount()
    {
        return count($this->numbers);
    }

    protected function theMax()
    {
        return max($this->numbers);
    }

    protected function theMin()
    {
        return min($this->numbers);
    }

    public function displayOutputs1()
    {
        echo "<p>Numbers entered: ";
        echo "<table><tr>";
        foreach ($this->numbers as $index) {
            echo "<td>$index</td>";
        }
        echo "</tr></table>";
        echo "</p>";
        echo "<p>Number of numbers: " . $this->theCount() . "</p>";
        echo "<p>Maximum number: " . $this->theMax() . "</p>";
        echo "<p>Minimum number: " . $this->theMin() . "</p>";
    }

}