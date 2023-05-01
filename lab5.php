<?php
require_once('config.php');

$month = 7;

if ($month >= 3 && $month <= 5) {
  $season = 'весна';
} elseif ($month >= 6 && $month <= 8) {
  $season = 'літо';
} elseif ($month >= 9 && $month <= 11) {
  $season = 'осінь';
} else {
  $season = 'зима';
}

$elementNumber = 1;
$elementValue = 5;
$resalt;

switch ($elementNumber) {
    case 1:
        $a = $elementValue;
        $c = $a ** 2;
        $h = $c / 2;
        $S = $c * $h / 2;
        $resalt = "a = $a, c = $c, h = $h, S = $S";
        break;
    case 2:
        $c = $elementValue;
        $a = sqrt($c);
        $h = $c / 2;
        $S = $c * $h / 2;
        $resalt = "a = $a, c = $c, h = $h, S = $S";
        break;
    case 3:
        $h = $elementValue;
        $c = $h * 2;
        $a = sqrt($c);
        $S = $c * $h / 2;
        $resalt =  "a = $a, c = $c, h = $h, S = $S";
        break;
    case 4:
        $S = $elementValue;
        $h = sqrt($S);
        $c = $h * 2;
        $a = sqrt($c);
        $resalt =  "a = $a, c = $c, h = $h, S = $S";
        break;
}
$tpl_vars=array(
'month' => $month,
'season' => $season,

'elementNumber' => $elementNumber,
'elementValue' => $elementValue,
'resalt' => $elementValue,
'a' => $a,
'c' => $c,
'h' => $h,
'S' => $S,
);
$tpl_file='lab1-5.tmpl';
require_once('tpl_config.php');
?>