<?php

namespace Comethalley\CalculatorPackage;

class Calculator
{
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function add($value1, $value2)
    {
        if ($this->checkIfNumber($value1, $value2)) {
            $this->result = $value1 + $value2;
            return $this;
        } else {
            return "The values must be numbers";
        }
    }

    public function subtract($value1, $value2)
    {
        if ($this->checkIfNumber($value1, $value2)) {
            $this->result = $value1 - $value2;
            return $this;
        } else {
            return "The value must be a number";
        }
    }

    public function multiplication($value1, $value2)
    {
        if ($this->checkIfNumber($value1, $value2)) {
            $this->result = $value1 * $value2;
            return $this;
        } else {
            return "The value must be a number";
        }
    }

    public function division($value1, $value2)
    {
        if ($this->checkIfNumber($value1, $value2)) {
            $this->result = $value1 / $value2;
            return $this;
        } else {
            return "The value must be a number";
        }
    }

    public function clear()
    {
        $this->result = 0;
        return $this;
    }

    public function getResult()
    {
        return $this->result;
    }

    private function checkIfNumber(...$values)
    {
        foreach ($values as $value) {
            if (!is_numeric($value)) {
                return false;
            }
        }
        return true;
    }
}
