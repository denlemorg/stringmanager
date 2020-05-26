<?php
namespace App\Checkers;

use App\CheckInterface;

class EmptyChecker implements CheckInterface
{
    /**
     * @param str $string
     * @return string
     */
    public function checkString(string $string): string
    {
//        print '-EmptyChecker-<br />';
        if (!$string || $string == '') {
            throw new Exception('Ошибка: Пуста строка');
        }
        return $string;
    }
}
