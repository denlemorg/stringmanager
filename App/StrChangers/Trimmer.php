<?php
namespace App\StrChangers;

use App\UpdateInterface;

class Trimmer implements UpdateInterface
{
    public function updateString(string $string): string
    {
//        print '-Trimmer-<br />';
        $string = trim($string);
        return $string;
    }
}
