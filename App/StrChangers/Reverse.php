<?php
namespace App\StrChangers;

use App\UpdateInterface;

class Reverse implements UpdateInterface
{
    public function updateString(string $string): string
    {
        $stringArray = explode(" ", $string);
        $stringReversed = array_reverse($stringArray);
        $string = implode(" ", $stringReversed);
        return $string;
    }
}
