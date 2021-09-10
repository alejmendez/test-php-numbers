<?php
namespace test;

use PHPUnit\Framework\TestCase;
use app\Numbers\Numbers;

class NumbersTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_set_and_return_value()
    {
        $simple = new Numbers();
        // $simple->set("I'm a simple class");
        // $this->assertEquals("I'm a simple class", $simple->get());
    }
}
//vendor/bin/phpunit