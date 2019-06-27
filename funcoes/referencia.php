<?php

function adicionar(&$fruta)
{
	return ++$fruta;
}

$laranjas = 5;
echo $laranjas;

adicionar($laranjas);
echo "<hr>";
echo $laranjas;
