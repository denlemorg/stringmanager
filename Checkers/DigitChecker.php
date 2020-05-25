<?php
namespace Checkers;

use CheckUpdateInterface;

class DigitChecker implements CheckUpdateInterface
{
    /**
     * @param str $string
     * @return string
     */
    public function checkUpdateString(string $string): string
    {
//        print "-DigitChecker-<br />";
        if ( preg_match('/\d/', $string) ) {
            throw new Exception('Ошибка: Строка имеет числа');
        }
        return $string;
    }
}