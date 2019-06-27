<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

/**
 * Sintaxe para definição de uma função
*/
function nomeDaFuncao($arg_1, $arg_2, /* ..., */ $arg_n)
{
	$mensagem = "Exemplo de função.\n";

	return $mensagem; // valor de retorno
}
/* ----------------------------------- */

/**
 * Função simples para teste
 */
function negrito($texto)
{
	$negrito = "<strong>$texto</strong>";

	return $negrito;
}

echo negrito('Olá, mundo');

echo '<hr>';

function imc($peso, $altura)
{
	return $peso / ($altura * $altura);
}

echo imc(70, 1.76);

echo '<hr>';

/**
 * Valor padrão de argumento
 * O valor padrão deve ir sempre ao final
 */

function iogurteira($sabor, $tipo = "azeda")
{
	return "Fazendo uma taça de $sabor $tipo";
}

echo iogurteira('framboesa'), '<br>';
echo iogurteira('morango', 'chantilly'), '<br>';

echo '<hr>';

/**
 * Declaração de tipo (type hinting)
 */
//declare(strict_types=1); /* Aumenta o rigor do php quanto ao tipo passado */
function imc_t(int $peso, float $altura)
{
	return $peso / ($altura * $altura);
}

echo imc_t(70, 1.76);

echo '<hr>';

/**
 * Retorno
 */
function imc_tr(int $peso, float $altura) : float
{
	        return $peso / ($altura * $altura);
}

echo imc_tr(70, 1.76);
