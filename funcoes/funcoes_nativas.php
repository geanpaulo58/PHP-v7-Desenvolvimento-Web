<?php
$variavel = 0;

echo 'var_dump(empry($variavel));','<br>';
var_dump(empty($variavel));

echo '<hr>';

$variavel = '';
echo 'var_dump(isset($variavel));','<br>';
var_dump(isset($variavel));

echo '<hr>';

$sim = ['isto', 'é', 'um array'];
echo 'var_dump(is_array($um));','<br>';
var_dump(is_array($sim));

echo '<hr>';

$a = false;
echo 'var_dump(is_bool($a));','<br>';
var_dump(is_bool($a));

echo '<hr>';

$b = function () {};
echo 'var_dump(is_callable($b));','<br>';
var_dump(is_callable($b));

echo '<hr>';

$c = 13.33;
echo 'var_dump(is_float($c));','<br>';
var_dump(is_float($c));

echo '<hr>';

$d = 23;

echo 'var_dump(is_int($d))','<br>';
var_dump(is_int($d));

echo '<hr>';

$e = null;
echo 'var_dump(is_null))','<br>';
var_dump(is_null($e));

$f = 0x539;
echo 'var_dump(is_numeric($f))','<br>';
var_dump(is_numeric($f));

echo '<hr>';

$g = 'ox539';
echo 'var_dump(is_string($g))','<br>';
var_dump(is_string($g));

echo '<hr>';

$h = 0x539;
echo 'var_dump(gettype($h))','<br>';
var_dump(gettype($h));

echo '<hr>';

$v = 0x539;
$w = ['Sol', 'Marte', 'Jupiter'];
$x = 10;
$y = 'Abacate';
$z = [];

echo 'unset($v);', '<br>';
unset($v);
echo 'uset($w[0]);'. '<br>';
unset($w[0]);

echo 'unset($x, $y, $z);', '<br>';
unset($x, $y, $z);

var_dump($v);
echo '<br>';
var_dump($w[0]);
echo '<br>';
var_dump($x, $y, $z);
