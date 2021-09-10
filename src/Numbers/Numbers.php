<?php

namespace app\Numbers;

class Numbers
{
    protected $list = [];
    protected $messages = [
        3 => 'home',
        5 => 'IT',
        8 => 'Integraciones',
    ];
    protected $numbersToEvaluate = [3, 5];

    public function __construct($first, $last)
    {
        for ($i = $first; $i <= $last; $i++) {
            $number = $this->getNumber($i);
            $this->list[] = $number;
        }
    }

    public function getNumber($number)
    {
        $this->messages[0] = $number;
        $index = $this->getIndexMessage($number);
        return $this->messages[$index];
    }

    public function getIndexMessage($number)
    {
        $index = 0;
        foreach ($this->numbersToEvaluate as $multiple) {
            if ($number % $multiple === 0) {
                $index += $multiple;
            }
        }
        return $index;
    }

    public function getList()
    {
        return $this->list;
    }

    public function toString()
    {
        return implode("\n", $this->getList()) . "\n";
    }

    public function print()
    {
        echo $this->toString();
    }
}
