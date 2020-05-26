<?php
namespace App\StrChangers;

use App\UpdateInterface;

class Reverse implements UpdateInterface
{
    public function updateString(string $string): string
    {
//        print '-StringReverse-<br />';
        $stringArray = explode(" ", $string);
        $stringReversed = array_reverse($stringArray);
        $string = implode(" ", $stringReversed);
        return $string;
    }
}
