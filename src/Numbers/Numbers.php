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
    public function __construct($first, $last)
    {
        for ($i = $first; $i <= $last; $i++) {
            $index = 0;
            $this->messages[0] = $i;
            foreach ([3, 5] as $multiple) {
                if (0 == $i % $multiple) {
                    $index += $multiple;
                }
            }

            $number = $this->messages[$index];
            $this->list[] = $number;
        }
    }

    public function getList()
    {
        return $this->list;
    }

    public function toString()
    {
        $result = '';
        for ($i = 0, $count = count($this->getList()); $i < $count; $i++) {
            $result .= $this->list[$i] . "\n";
        }
        return $result;
    }

    public function print()
    {
        echo $this->toString();
    }
}
