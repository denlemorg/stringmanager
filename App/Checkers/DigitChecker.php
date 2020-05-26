<?php
namespace App\Checkers;

use App\CheckInterface;

class DigitChecker implements CheckInterface
{
    /**
     * @param str $string
     * @return string
     */
    public function checkString(string $string): string
    {
//        print "-DigitChecker-<br />";
        if (preg_match('/\d/', $string)) {
            throw new Exception('Ошибка: Строка имеет числа');
        }
        return $string;
    }
}
