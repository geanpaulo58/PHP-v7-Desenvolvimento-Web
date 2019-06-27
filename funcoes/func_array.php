<?php

$pessoas = [
	[                                                                                                                             'nome' => 'Jeane Martins',                                                                                               'dtNascimento' => '1982-10-21',                                                                                         'email' => 'jeanemartins@gmail.com'                                                                              ], 
	[
		'nome' => 'Gean Martins',
		'dtNascimento' => '1980-10-18',
		'email' => 'geanpaulo58@gmail.com'
	],
	[
                'nome' => 'Uillian Martins',
                 'dtNascimento' => '1986-05-14',
                 'email' => 'uillianmarins@gmail.com'
        ],
];

echo '<pre>';
print_r($pessoas);

echo '<hr>';

/** Ordena o array em ordem crescente */
array_multisort($pessoas);

print_r($pessoas);

echo '<hr>';
/** Ordena em ordem decrescente */
array_multisort($pessoas. SORT_DESC);
print_r($pessoas);

echo '<hr>';
$a = [1, 2, 3, 4, 5];
$cubo = array_map(function ($n) {
	return $n ** 3;
}, $a);

print_r($a);

echo '<hr>';
print_r($cubo);

echo '<hr>';
$c = [1.2, 2.3, 3.4];

print_r($c);
echo 'Soma de $c ' . array_sum($c) . '<br />';

echo '<hr>';
$cores = ['verde', 'vermelho', 'verde', 'azul', 'vermelho'];
$result = array_unique($cores);
print_r($result);

echo '<hr>';

var_dump(in_array('azul', $cores));

echo '<hr>';

print_r($pessoas);

echo 'Existem '. count($pessoas) . ' pessoas em $pessoas', '<br>';

// Contando os elementos do array recursivamente
echo 'Total de elementos em $pessoas: '. count($pessoas, COUNT_RECURSIVE);
