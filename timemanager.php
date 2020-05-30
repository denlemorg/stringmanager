<?php

require_once 'autoloader.php';

use TimeManager\Time;
use TimeManager\TimePeriod;


$time = Time::createFromString('20:14');

print "<pre>";
var_dump($time);

$time2 = Time::createFromString('22:12');
$compareResult = $time->compareTo($time2);
var_dump($compareResult);

$minutesTo = $time->minutesTo($time2);
var_dump($minutesTo);

$secondsTo = $time->secondsTo($time2);
var_dump($secondsTo);

$timePeriod = new TimePeriod($time, $time2);
var_dump($timePeriod);

$time3 = Time::createFromString('22:10');
$timeHas = $timePeriod->has($time3);
var_dump($timeHas);

print  $timePeriod->lengthInMinutes();
print "<br />";
print  $timePeriod->lengthInSeconds();

