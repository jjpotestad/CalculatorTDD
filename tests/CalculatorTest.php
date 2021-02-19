<?php

use PHPUnit\Framework\TestCase;
// Ejecutar en la raiz 
// php vendor/phpunit/phpunit/phpunit --testdox tests/CalculatorTest

class CalculatorTest extends TestCase{

    public function testAddWillReturnTheSumOfItsParameters(){
        $sut = new Calculator();

        $this->assertEquals(8, $sut->add(5,3));
        $this->assertEquals(5, $sut->add(2,3));
    }

    public function testSubWillReturnTheSubtractOfItsParameters(){
        $sut = new Calculator();

        $this->assertEquals(3, $sut->sub(8,5));
        $this->assertEquals(9, $sut->sub(21,12));
    }

    public function testMulWillReturnTheMultiplicationOfItsParameters(){
        $sut = new Calculator();

        $this->assertEquals(24, $sut->mul(6,4));
        $this->assertEquals(56, $sut->mul(8,7));
    }

    public function testDivWillReturnTheDivisionOfItsParameters(){
        $sut = new Calculator();

        $this->assertEquals(8, $sut->div(40,5));
        $this->assertEquals(5, $sut->div(25,5));
    }

}
