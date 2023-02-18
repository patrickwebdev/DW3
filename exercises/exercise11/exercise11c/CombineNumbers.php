<?php
/**
*exercise11c.php
*/
class CombineNumbers extends CountNumbers
{
    protected function theSum()
    {
        $sum = 0;
        foreach ($this->numbers as $index) {
            $sum = $sum + $index;
        }
        return $sum;
    }

    protected function theProduct()
    {
        return array_product($this->numbers);
    }

    public function displayOutputs2()
    {
        echo "<p>Sum of numbers: " . $this->theSum() . "</p>";
        echo "<p>Product of numbers: " . $this->theProduct() . "</p>";
    }

}