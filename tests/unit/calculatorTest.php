<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase {

    public function testAddsGivenOperands() {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([5, 10]);
        $this->assertEquals($addition->calculate(), 15);
    }
}