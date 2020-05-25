<?php
namespace StrChangers;

use CheckUpdateInterface;

class Reverse implements CheckUpdateInterface
{
    public function checkUpdateString(string $string): string
    {
//        print '-StringReverse-<br />';
        $stringArray = explode(" ", $string);
        $stringReversed = array_reverse($stringArray);
        $string = implode(" ", $stringReversed);
        return $string;
    }
}
