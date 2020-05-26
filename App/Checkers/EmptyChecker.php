<?php
namespace App\Checkers;

use App\CheckInterface;

class EmptyChecker implements CheckInterface
{

    private $error = 'Ошибка: Пуста строка';
    /**
     * @param str $string
     * @return string
     */
    public function checkString(string $string): bool
    {
        if (!$string || $string == '') {
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
