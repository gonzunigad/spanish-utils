<?php
use \SpanishUtils\Components\NIF;
use \SpanishUtils\Components\IBAN;
use \SpanishUtils\Components\CIF;

class CheckerTest extends PHPUnit_Framework_TestCase {

    public function testDNI()
    {
        $dni = NIF::setUp('04381012H');
        $result = $dni->checkData();
        $this->assertTrue($result);

        $dni = NIF::setUp('04381012h');
        $result = $dni->checkData();
        $this->assertTrue($result);

        $dni = NIF::setUp('Z6171167L');
        $result = $dni->checkData();
        $this->assertTrue($result);

        $dni = NIF::setUp('z6171167l');
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
    
    public function testIBAN()
    {
        $test_cases = array('AL47212110090000000235698741',
                            'AD1200012030200359100100',
                            'AT611904300234573201',
                            'AL89515635252277023782748302',
                            'AL39153296222641598198140883',
                            'AL47907501989147671525950076',
                            'AL55398719849655505231753964',
                            'AD2531377125214715353449',
                            'AD9764782778017799549345',
                            'AD4079739934060166934190',
                            'AD3210446914824799260335',
                            'AD1781438353588817727122',
                            'AT582774098454337653',
                            'AT220332087576467472',
                            'AT328650112318219886',
                            'AT193357281080332578',
                            'AT535755326448639816',
                            'BE16517682243567',
                            'BE46943937718104',
                            'BE75270187592710',
                            'BE58465045170210',
                            'BE49149522496291',
                            'BA534130469841865537',
                            'BA515388988295860588',
                            'BA182655808222815318',
                            'BA105531662061034080',
                            'BA198940842595891985',
                            'BG08NXYF73308507056085',
                            'BG22OOPG05631394112384',
                            'BG30XCMJ43923350257238',
                            'BG66ZKSV96204746173581',
                            'BG62TOZJ59790808155256',
                            'HR9118658081801951861',
                            'HR7093391174762888131',
                            'HR6824554207539191367',
                            'HR7069604594001692768',
                            'HR4270163171014341308',
                            'CY48590776872388131193566182',
                            'CY57511427289148815512463528',
                            'CY10469623011747193079305488',
                            'CY86826022479357551507194222',
                            'CY65139035183710553510799793',
                            'CZ3740083988228867633610',
                            'CZ4923390395798905071131',);
        
        foreach($test_cases as $test_case){
            $iban = IBAN::setUp($test_case);
            $result = $iban->checkData();
            $this->assertTrue($result);
        }
        
    }

    public function separatedIBAN()
    {
        $iban = IBAN::setUp('CZ49 2339 0395 7989 0507 1131');
        $result = $iban->checkData();
        $this->assertTrue($result);
    }
}
 
