<?php
use \SpanishUtils\Components\NIF;
use \SpanishUtils\Components\CIF;

class CheckerTest extends PHPUnit_Framework_TestCase {

    public function testDNI()
    {
        $dni = NIF::setUp('04381012H');
        $result = $dni->checkData();
        $this->assertTrue($result);

        $dni = NIF::setUp('Z6171167L');
        $result = $dni->checkData();
        $this->assertTrue($result);
    }

    public function testCIF()
    {
        $cif = CIF::setUp('N99461501');
        $result = $cif->checkData();
        $this->assertTrue($result);

        $cif = CIF::setUp('G61685095');
        $result = $cif->checkData();
        $this->assertTrue($result);
    }
}
 