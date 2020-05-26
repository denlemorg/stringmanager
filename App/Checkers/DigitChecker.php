<?php
namespace App\Checkers;

use App\CheckInterface;

class DigitChecker implements CheckInterface
{
    private $error = 'Ошибка: Строка имеет числа';
    /**
     * @param str $string
     * @return string
     */
    public function checkString(string $string): bool
    {
        if (preg_match('/\d/', $string)) {
            return false;
        }
        return true;
    }
    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
}
