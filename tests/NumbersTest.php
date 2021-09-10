<?php
namespace test;

use PHPUnit\Framework\TestCase;
use app\Numbers\Numbers;

class NumbersTest extends TestCase
{
    protected $resultOfTheNumbersFrom1To100InString = "1\n2\nhome\n4\nIT\nhome\n7\n8\nhome\nIT\n11\nhome\n13\n14\nIntegraciones\n16\n17\nhome\n19\nIT\nhome\n22\n23\nhome\nIT\n26\nhome\n28\n29\nIntegraciones\n31\n32\nhome\n34\nIT\nhome\n37\n38\nhome\nIT\n41\nhome\n43\n44\nIntegraciones\n46\n47\nhome\n49\nIT\nhome\n52\n53\nhome\nIT\n56\nhome\n58\n59\nIntegraciones\n61\n62\nhome\n64\nIT\nhome\n67\n68\nhome\nIT\n71\nhome\n73\n74\nIntegraciones\n76\n77\nhome\n79\nIT\nhome\n82\n83\nhome\nIT\n86\nhome\n88\n89\nIntegraciones\n91\n92\nhome\n94\nIT\nhome\n97\n98\nhome\nIT\n";
    protected $resultOfTheNumbersFrom1To100 = [
        1, 2, 'home', 4, 'IT', 'home', 7, 8, 'home', 'IT', 
        11, 'home', 13, 14, 'Integraciones', 16, 17, 'home', 19, 'IT', 
        'home', 22, 23, 'home', 'IT', 26, 'home', 28, 29, 'Integraciones', 
        31, 32, 'home', 34, 'IT', 'home', 37, 38, 'home', 'IT', 
        41, 'home', 43, 44, 'Integraciones', 46, 47, 'home', 49, 'IT', 
        'home', 52, 53, 'home', 'IT', 56, 'home', 58, 59, 'Integraciones', 
        61, 62, 'home', 64, 'IT', 'home', 67, 68, 'home', 'IT', 
        71, 'home', 73, 74, 'Integraciones', 76, 77, 'home', 79, 'IT', 
        'home', 82, 83, 'home', 'IT', 86, 'home', 88, 89, 'Integraciones', 
        91, 92, 'home', 94, 'IT', 'home', 97, 98, 'home', 'IT'
    ];
    /**
     * @test
     */
    public function it_can_return_correctly_the_list_of_numbers()
    {
        $numbers = new Numbers(1, 100);
        $this->assertEquals($this->resultOfTheNumbersFrom1To100, $numbers->getList());
    }

    /**
     * @test
     */
    public function it_can_return_correctly_the_list_of_numbers_in_string()
    {
        $numbers = new Numbers(1, 100);
        $this->assertEquals($this->resultOfTheNumbersFrom1To100InString, $numbers->toString());
    }

    /**
     * @test
     */
    public function it_can_correctly_evaluate_the_index_of_a_number()
    {
        $numbers = new Numbers(1, 100);
        $this->assertEquals(0, $numbers->getIndexMessage(1));
        $this->assertEquals(0, $numbers->getIndexMessage(2));
        $this->assertEquals(3, $numbers->getIndexMessage(3));
        $this->assertEquals(0, $numbers->getIndexMessage(4));
        $this->assertEquals(5, $numbers->getIndexMessage(5));
        $this->assertEquals(8, $numbers->getIndexMessage(15));
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

    /**
     * @test
     */
    public function it_can_correctly_return_the_list_of_printed_numbers()
    {
        $numbers = new Numbers(1, 100);
        ob_start();
        $numbers->print();
        $content = ob_get_contents();
        ob_end_clean();

        $this->assertEquals($this->resultOfTheNumbersFrom1To100InString, $content);
    }
}