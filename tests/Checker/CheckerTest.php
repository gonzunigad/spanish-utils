<?php

class CheckerTest extends PHPUnit_Framework_TestCase {

    public function testCif()
    {
        $dni = \SpanishUtils\Documents\NIF::setUp('04381012H');
        $result = \SpanishUtils\Checker::check($dni);
        $this->assertTrue($result);
    }
}
 