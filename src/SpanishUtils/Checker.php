<?php
namespace SpanishUtils;

class Checker {

    static public function check(Document $document)
    {
        return $document->checkData();
    }

}