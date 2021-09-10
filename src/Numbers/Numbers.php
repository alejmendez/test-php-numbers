<?php

namespace app\Numbers;

class Numbers
{
    protected $list = [];
    protected $messages = [
        0 => 1,
        3 => 'home',
        5 => 'IT',
        8 => 'Integraciones',
    ];
    protected $numbersToEvaluate = [3, 5];

    public function __construct($first, $last)
    {
        $this->initNumbers($first, $last);
    }

    public function initNumbers($first, $last)
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
        foreach ($this->numbersToEvaluate as $multiplier) {
            if ($number % $multiplier === 0) {
                $index += $multiplier;
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
