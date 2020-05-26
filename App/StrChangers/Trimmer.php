<?php
namespace App\StrChangers;

use App\UpdateInterface;

class Trimmer implements UpdateInterface
{
    public function updateString(string $string): string
    {
        $string = trim($string);
        return $string;
    }
}
