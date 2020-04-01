<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {

    public function testTrueAssertsToTrue() {
        $this->assertTrue(true);
    }

    public function testSumAddsToTwo() {
        $this->assertEquals(1+1, 2);
    }

}