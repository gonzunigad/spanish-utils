<?php

namespace SpanishUtils\Components;

use SpanishUtils\Interfaces\UtilityInterface;
use SpanishUtils\Utility;

class NIF extends Utility implements UtilityInterface{

    public function checkData()
    {
        $this->data = strtoupper($this->data);
        return $this->validateNif($this->data);
    }

    /**
     * NIF and DNI validation
     * @param $nif string The NIF or NIE
     * @return bool
     */
    protected function validateNif ($nif) {
        $nif_codes = 'TRWAGMYFPDXBNJZSQVHLCKE';

        $sum = (string) Utils::getCifSum ($nif);
        $n = 10 - substr($sum, -1);

        if (preg_match ('/^[0-9]{8}[A-Z]{1}$/', $nif)) {
            // DNIs
            $num = substr($nif, 0, 8);

            return ($nif[8] == $nif_codes[$num % 23]);
        } elseif (preg_match ('/^[XYZ][0-9]{7}[A-Z]{1}$/', $nif)) {
            // NIEs normales
            $tmp = substr ($nif, 1, 7);
            $tmp = strtr(substr ($nif, 0, 1), 'XYZ', '012') . $tmp;

            return ($nif[8] == $nif_codes[$tmp % 23]);
        } elseif (preg_match ('/^[KLM]{1}/', $nif)) {
            // NIFs especiales
            return ($nif[8] == chr($n + 64));
        } elseif (preg_match ('/^[T]{1}[A-Z0-9]{8}$/', $nif)) {
            // NIE extraño
            return true;
        }

        return false;
    }
}