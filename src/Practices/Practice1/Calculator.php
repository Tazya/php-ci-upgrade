<?php

namespace App\Practices\Practice1;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            return null;
        } else {
            return $a / $b;
        }

        // Напишите реализацию метода divide, который делит $a на $b. Если деление на $b невозможно, верните null
    }

    public function pow($a, $b)
    {
        return $a ** $b;
    }
    // Напишите новый метод pow. Он должен возводить $a в степень $b

    public function run($a, $b, $operator = '+')
    {
        switch ($operator) {
            case '+':
                return $this->add($a, $b);
            case '-':
                return $this->sub($a, $b);
            case '*':
                return $this->multiply($a, $b);
            case '/':
                if (is_null($this->divide($a, $b))) {
                    return "Divide by zero";
                } else {
                    return $this->divide($a, $b);
                }
            case '^':
                return $this->pow($a, $b);
            default:
                return 'Unknown operator: ' . $operator;
        }

        // Допишите реализацию метода run. Метод принимает два операнда и оператор
        // затем выбирает какой метод этого же класса нужно вызвать с этими операндами
        // Если невозможно делить, метод должен возвращать строку "Divide by zero"
        // Если передан неизвестный оператор, метод должен возвращать строку "Unknown operator: $operator"
    }
}
