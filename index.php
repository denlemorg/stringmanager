<?php
require_once 'autoloader.php';

use Checkers\EmptyChecker;
use Checkers\DigitChecker;
use StrChangers\Reverse;
use StrChangers\Trimmer;

$string = '   Здравствуйте друзья и товарищи! ';

$checker = new CheckChain($string);

$checker->add(new EmptyChecker());
$checker->add(new DigitChecker());
$checker->add(new Reverse());
$checker->add(new Trimmer());

$checker->run();

print "<b>Start sring: </b>'".$string."'<br />";
print "<b>Result sring: </b>'".$checker->getString()."'";

