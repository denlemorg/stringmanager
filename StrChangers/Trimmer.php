<?php
namespace StrChangers;

use CheckUpdateInterface;

class Trimmer implements CheckUpdateInterface
{
    public function checkUpdateString(string $string): string
    {
//        print '-Trimmer-<br />';
        $string = trim($string);
        return $string;
    }
}