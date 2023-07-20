<?php

final class Calculator 
{
    protected $value = 0;

    public function add($value) 
    {
        $this->value += $value;

        return $this;
    }

    public function subtract($value)
    {
        $this->value -= $value;

        return $this;
    }

    public function multiply($value)
    {
        $this->value *= $value;

        return $this;
    }

    public function value()
    {
        return $this->value;
    }
    
}

$calculator = new Calculator();
$calculator->add(5)->subtract(10)->multiply(2);
echo $calculator->value();

?>