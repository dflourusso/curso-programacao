<?

/*@

@Titulo: Ordenar 3 n�meros

@Enunciado: Dado 3 n�mero, orden�-los em ordem crescente

@Objetivo: Aprender m�todo da bolha

@Entrada: 3 N�meros

@Sa�da:
56
148
327

@Dica: Fazer a troca, caso os n�meros n�o estejam em ordem

@Dificuldade: 2

@Categoria: if

@Aula: 2

@ordem 50

@*/

// .............................. INICIALIZA��O ..............................

$n1 = 327;
$n2 = 148;
$n3 = 56;

// .............................. ENTRADA ..............................

/*
$n1 = $argv[1];
$n2 = $argv[2];
//*/

// .............................. PROCESSAMENTO ..............................

if ($n1 > $n2):
	$temp = $n1;
	$n1 = $n2;
	$n2 = $temp;
endif;

if ($n2 > $n3):
	$temp = $n2;
	$n2 = $n3;
	$n3 = $temp;
endif;

if ($n1 > $n2):
	$temp = $n1;
	$n1 = $n2;
	$n2 = $temp;
endif;

// .............................. SA�DA ..............................

echo "
$n1
$n2
$n3
";

?>