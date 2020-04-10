<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase {

    public function testAddsGivenOperands() {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([5, 10]);
        $this->assertEquals($addition->calculate(), 15);
    }

    /** @test */
    public function no_operands_given_throws_an_error() {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

        $addition = new \App\Calculator\Addition;
        $addition->setOperands([]);
        $addition->calculate();
    }
}