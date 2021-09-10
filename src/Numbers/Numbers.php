<?php

namespace app\Numbers;

class Numbers
{
    protected $list = [];
    public function __construct($first, $last)
    {
        for ($i = $first; $i <= $last; $i++) {
            $number = $i;
            /*
            Write a program that prints all the numbers from 1 to 100. However, 
            for multiples of 3, instead of the number, print "home". For multiples 
            of 5 print "IT". For numbers which are multiples of both 3 and 5, 
            print "Integraciones"

            But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.
            */
            if ($i % 3 === 0 && $i % 5 === 0) {
                $number = 'Integraciones [' . ($i % 2) . ']';
            } elseif ($i % 3 === 0) {
                $number = 'home [' . ($i % 2) . ']';
            } elseif ($i % 5 === 0) {
                $number = 'IT [' . ($i % 2) . ']';
            }
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
