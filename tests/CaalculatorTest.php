<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';
class CalculatorTest extends TestCase
{
    private $calculator;
    protected function setUp()
    {
        $this->calculator=new Calculator();
    }
    protected function tearDown()
    {
       $this-> calculator=NULL;
    }
    protected function testAdd()
    {
        $result=$this->calculator->add(1,2);
        $this->assertEquals(3,$result);
    }
}