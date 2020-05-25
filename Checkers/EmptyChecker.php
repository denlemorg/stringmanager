<?php
namespace Checkers;

use CheckUpdateInterface;

class EmptyChecker implements CheckUpdateInterface
{
    /**
     * @param str $string
     * @return string
     */
    public function checkUpdateString(string $string): string
    {
//        print '-EmptyChecker-<br />';
        if (!$string || $string == '') {
            throw new Exception('Ошибка: Пуста строка');
        }
        return $string;
    }
}
