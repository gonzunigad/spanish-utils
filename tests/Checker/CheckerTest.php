<?php

class CheckerTest extends PHPUnit_Framework_TestCase {

    public function testDNI()
    {
        $dni = \SpanishUtils\Documents\NIF::setUp('04381012H');
        $result = \SpanishUtils\Checker::check($dni);
        $this->assertTrue($result);

        $dni = \SpanishUtils\Documents\NIF::setUp('Z6171167L');
        $result = \SpanishUtils\Checker::check($dni);
        $this->assertTrue($result);
    }

    public function testCIF()
    {
        $cif = \SpanishUtils\Documents\CIF::setUp('N99461501');
        $result = \SpanishUtils\Checker::check($cif);
        $this->assertTrue($result);

        $cif = \SpanishUtils\Documents\CIF::setUp('G61685095');
        $result = \SpanishUtils\Checker::check($cif);
        $this->assertTrue($result);
    }
}
 