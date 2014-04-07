<?php

namespace SpanishUtils\Components;

use SpanishUtils\Interfaces\UtilityInterface;
use SpanishUtils\Utility;
use IBAN\Validation\IBANValidator;

class IBAN extends Utility implements UtilityInterface{

    public function checkData()
    {
        $ibanValidator = \IsoCodes\Iban::validate($this->data);
        return $ibanValidator;
    }

}
