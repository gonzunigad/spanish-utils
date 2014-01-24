<?php
namespace SpanishUtils\Components;

abstract class Utils {

    /**
     * Used to calculate the sum of the CIF, DNI and NIE
     * @param $cif
     * @return mixed
     */
    static public function getCifSum ($cif) {
        $sum = $cif[2] + $cif[4] + $cif[6];

        for ($i = 1; $i<8; $i += 2) {
            $tmp = (string) (2 * $cif[$i]);
            $tmp = $tmp[0] + ((strlen ($tmp) == 2) ?  $tmp[1] : 0);
            $sum += $tmp;
        }

        return $sum;
    }
} 