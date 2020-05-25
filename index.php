<?php
/**
 * Docuementation
 * php version 7.2
 *
 * @category Category
 * @package  Package_Test
 * @author   Author <author@name.com>
 * @license  License http://link.com
 * @link     http://link.com
 */

require_once 'autoloader.php';

use Checkers\EmptyChecker;
use Checkers\DigitChecker;
use StrChangers\Reverse;
use StrChangers\Trimmer;

$string = '   Здравствуйте друзья и товарищи! ';

$stringHandler = new CheckUpdateChain($string);

$stringHandler->add(new EmptyChecker());
$stringHandler->add(new DigitChecker());
$stringHandler->add(new Reverse());
$stringHandler->add(new Trimmer());

$stringHandler->run();

print "<b>Start sring: </b>'".$string."'<br />";
print "<b>Result sring: </b>'".$checker->getString()."'";
