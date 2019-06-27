<?php
$artilheiro = 'Ronaldo';
$gols = 19;

/** 
 * Dependendo do tipo de variável, especificamos a chave de substituição
 * %s = string
 * %f = float
 * %d = int
 *
 * */
$formato = 'O artilheiro do brasileirão, %s, tem %d gols.';
printf($formato, $artilheiro, $gols);

echo '<hr>';

echo sprintf($formato, $artilheiro, $gols);

echo '<hr>';

// Substitui %body% por black na string
$body_tag = str_replace('%body%', 'black', "<body text='%body%'>");
echo "<textarea>$body_tag</textarea>";
echo "<hr>";

$str = 'hello world';

echo ucfirst($str); // Coloca a primeira letra em maiúscula

echo "<hr>";

echo ucwords($str); // Coloca a primeira letra de cada palavra em maiúscula

echo "<hr>";

echo strlen($str); // Retorna a quantidade de caracteres
