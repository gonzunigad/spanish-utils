<?php

namespace SpanishUtils;


abstract class Document {

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    static public function setUp($data)
    {
        $class = get_called_class();
        $object = new $class($data);
        return $object;
    }

    // Función auxiliar usada para CIFs y NIFs especiales
    public function getCifSum ($cif) {
        $sum = $cif[2] + $cif[4] + $cif[6];

        for ($i = 1; $i<8; $i += 2) {
            $tmp = (string) (2 * $cif[$i]);
            $tmp = $tmp[0] + ((strlen ($tmp) == 2) ?  $tmp[1] : 0);
            $sum += $tmp;
        }

        return $sum;
    }
} 