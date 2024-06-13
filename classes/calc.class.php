<?php

class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculator(): string
    {
        // switch ($this->operator) {
        //     case 'add':
        //         return (string)($this->num1 + $this->num2);
        //     case 'sub':
        //         return (string)($this->num1 - $this->num2);
        //     case 'div':
        //         if ($this->num2 === 0) {
        //             return "Error: Division by zero.";
        //         }
        //         return (string)($this->num1 / $this->num2);
        //     case 'mul':
        //         return (string)($this->num1 * $this->num2);
        //     default:
        //         return "Error: Invalid operator.";
        // }
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;

            default:
                echo "Error Message!";
                break;
        }
    }
}
