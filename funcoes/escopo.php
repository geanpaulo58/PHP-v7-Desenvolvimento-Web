<?php
// Variável global
$taxa_g = 1.09;

// Usa a variáel local
function taxar_vl($valor)
{
	$taxa_l = 2;

	return $valor = $valor * $taxa_l;
}

function taxar_vg($valor)
{
	global $taxa_g;
	
	return $valor = $valor * $taxa_g;
}

echo taxar_vl(25);
echo '<br>';
echo taxar_vg(25);
