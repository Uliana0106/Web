<?php
require_once('config.php');
$num = -5;
if ($num > 0) {
  $result = $num + 1;
  $condition = "додати до нього 1";
} elseif ($num < 0) {
  $result = $num - 2;
  $condition = "відняти від нього 2";
} else {
  $result = 10;
  $condition = "замінити його на 10";
}

$A = 5;
$B = 7;

if ($A != $B) {
  if ($A > $B) {
    $B = $A;
  } else {
    $A = $B;
  }
} else {
  $A = 0;
  $B = 0;
}
$tpl_vars=array(
'num' => $num,
'result' => $result, 
'condition' => $condition,

'A' => $A,
'B' => $B,
);
$tpl_file='lab1-4.tmpl';
require_once('tpl_config.php');
?>