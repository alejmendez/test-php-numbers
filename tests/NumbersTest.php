<?php
namespace test;

use PHPUnit\Framework\TestCase;
use app\Numbers\Numbers;

class NumbersTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_return_correctly_the_list_of_numbers()
    {
        $numbers = new Numbers(1, 100);
        $expect = "1\n2\nhome\n4\nIT\nhome\n7\n8\nhome\nIT\n11\nhome\n13\n14\nIntegraciones\n16\n17\nhome\n19\nIT\nhome\n22\n23\nhome\nIT\n26\nhome\n28\n29\nIntegraciones\n31\n32\nhome\n34\nIT\nhome\n37\n38\nhome\nIT\n41\nhome\n43\n44\nIntegraciones\n46\n47\nhome\n49\nIT\nhome\n52\n53\nhome\nIT\n56\nhome\n58\n59\nIntegraciones\n61\n62\nhome\n64\nIT\nhome\n67\n68\nhome\nIT\n71\nhome\n73\n74\nIntegraciones\n76\n77\nhome\n79\nIT\nhome\n82\n83\nhome\nIT\n86\nhome\n88\n89\nIntegraciones\n91\n92\nhome\n94\nIT\nhome\n97\n98\nhome\nIT\n";
        $this->assertEquals($expect, $numbers->toString());
    }

    /**
     * @test
     */
    public function it_can_evaluate_correctly_a_number()
    {
        $numbers = new Numbers(1, 100);
        $this->assertEquals(1, $numbers->getNumber(1));
        $this->assertEquals(2, $numbers->getNumber(2));
        $this->assertEquals('home', $numbers->getNumber(3));
        $this->assertEquals(4, $numbers->getNumber(4));
        $this->assertEquals('IT', $numbers->getNumber(5));
        $this->assertEquals('Integraciones', $numbers->getNumber(15));
    }
}