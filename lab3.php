<?php
require_once('config.php');

$tpl_vars=array(
'a' => $a = 10,
'b' => $b = 5,

'S' =>  $S = $a * $b,
'P' => $P = 2 * ($a + $b),

// координати точок A, B, C
'xA' => $xA = 2, 
'xB' => $xB = 5, 
'xC' => $xC = -3,

// довжини відрізків AC і BC
'AC' => $AC = abs($xC - $xA),
'BC' => $BC = abs($xC - $xB),

// сума довжин відрізків AC і BC
'sum' => $sum = $AC + $BC,
);
$tpl_file='lab1-3.tmpl';
require_once('tpl_config.php');
?>