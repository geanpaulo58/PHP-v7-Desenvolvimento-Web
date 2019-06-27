<?php
/**
 * nl2br = Interpreta o caractere de controle <br/> não leitura do testo - se houver.
 */

$txt = nl2br(file_get_contents('freud.txt'));

echo $txt;

echo '<hr>';
// Retorna parte do texto
$txt2 = file_get_contents('freud.txt', null, null, 6, 12);
echo $txt2;
