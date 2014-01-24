<?php

namespace SpanishUtils\Documents;

use SpanishUtils\Document;

class CIF extends Document implements DocumentInterface {

    public function checkData()
    {
        return $this->validateCif($this->data);
    }

    // Valida CIFs
    // El código comentado es para usar en modelos de CakePHP
    protected function validateCif ($cif /*$check*/) {
        $cif_codes = 'JABCDEFGHI';

        // $cif = array_pop ($check);

        $sum = (string) $this->getCifSum ($cif);
        $n = (10 - substr ($sum, -1)) % 10;

        if (preg_match ('/^[ABCDEFGHJNPQRSUVW]{1}/', $cif)) {
            if (in_array ($cif[0], array ('A', 'B', 'E', 'H'))) {
                // Numerico
                return ($cif[8] == $n);
            } elseif (in_array ($cif[0], array ('K', 'P', 'Q', 'S'))) {
                // Letras
                return ($cif[8] == $cif_codes[$n]);
            } else {
                // Alfanumérico
                if (is_numeric ($cif[8])) {
                    return ($cif[8] == $n);
                } else {
                    return ($cif[8] == $cif_codes[$n]);
                }
            }
        }

        return false;
    }

}