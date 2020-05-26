<?php
/**
 * Documentation
 * php version 7.2
 *
 * @category Category
 * @package  Package_Test
 * @author   Author <author@name.com>
 * @license  License http://link.com
 * @link     http://link.com
 */

require_once 'autoloader.php';

use App\Chainable;
use App\Checkers\EmptyChecker;
use App\Checkers\DigitChecker;
use App\StrChangers\Reverse;
use App\StrChangers\Trimmer;

$string = '   Здравствуйте друзья и товарищи! ';
// $string = '';

$stringHandler = new Chainable($string);

$stringHandler->addCheck(new EmptyChecker());
$stringHandler->addCheck(new DigitChecker());
$stringHandler->addUpdate(new Reverse());
$stringHandler->addUpdate(new Trimmer());

$stringHandler->run();

if (empty($stringHandler->getErrors())) {
    print "<b>Start sring: </b>'".$string."'<br />";
    print "<b>Result sring: </b>'".$stringHandler->getString()."'";
} else {
    print "<pre>";
    var_dump($stringHandler->getErrors());
}
