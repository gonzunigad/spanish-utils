<?php
use \SpanishUtils\Components\NIF;
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
                            'Z21NABZ00000000137010001944',
                            'BH67BMAG00001299123456',
                            'BE68539007547034',
                            'BA391290079401028494',
                            'BR7724891749412660603618210F3',
                            'BG80BNBG96611020345678',
                            'CR0515202001026284066',
                            'HR1210010051863000160',
                            'CY17002001280000001200527600',
                            'CZ6508000000192000145399',
                            'DK5000400440116243',
                            'DO28BAGR00000001212453611324',
                            'EE382200221020145685',
                            'FO6264600001631634',
                            'FI2112345600000785',
                            'FR1420041010050500013M02606',
                            'GE29NB0000000101904917',
                            'DE89370400440532013000',
                            'GI75NWBK000000007099453',
                            'GR1601101250000000012300695',
                            'GL8964710001000206',
                            'GT82TRAJ01020000001210029690',
                            'HU42117730161111101800000000',
                            'IS140159260076545510730339',
                            'IE29AIBK93115212345678',
                            'IL620108000000099999999',
                            'IT60X0542811101000000123456',
                            'KZ86125KZT5004100100',
                            'KW81CBKU0000000000001234560101',
                            'LV80BANK0000435195001',
                            'LB62099900000001001901229114',
                            'LI21088100002324013AA',
                            'LT121000011101001000',
                            'LU280019400644750000',
                            'MK07250120000058984',
                            'MT84MALT011000012345MTLCAST001S',
                            'MR1300020001010000123456753',
                            'MU17BOMM0101101030300200000MUR',
                            'MD24AG000225100013104168',
                            'MC5811222000010123456789030',
                            'ME25505000012345678951',
                            'NL91ABNA0417164300',
                            'NO9386011117947',
                            'PK36SCBL0000001123456702',
                            'PL61109010140000071219812874',
                            'PS92PALS000000000400123456702',
                            'PT50000201231234567890154',
                            'QA58DOHB00001234567890ABCDEFG',
                            'RO49AAAA1B31007593840000',
                            'SM86U0322509800000000270100',
                            'SA0380000000608010167519',
                            'RS35260005601001611379',
                            'SK3112000000198742637541',
                            'SI56263300012039086',
                            'ES9121000418450200051332',
                            'SE4550000000058398257466',
                            'CH9300762011623852957',
                            'TN5910006035183598478831',
                            'TR330006100519786457841326',
                            'AE070331234567890123456',
                            'GB29NWBK60161331926819',
                            'VG96VPVG0000012345678901',
                            'YY24KIHB12476423125915947930915268',
                            'ZZ25VLQT382332233206588011313776421');
        
        foreach($test_cases as $test_case){
            $iban = IBAN::setUp($test_case);
            $result = $iban->checkData();
            $this->assertTrue($result);
        }
        
    }
}
 
