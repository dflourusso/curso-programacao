<?

/*@

@Titulo: Ordenar 2 n�meros

@Enunciado: Dado dois n�mero, orden�-los em ordem crescente

@Objetivo: Testar m�todo da bolha

@Entrada: Dois N�meros

@Sa�da:
148
327

@Dica: Fazer a troca, caso os n�meros n�o estejam em ordem

@Dificuldade: 1

@Categoria: if

@Aula: 2

@ordem 15

@*/

// .............................. INICIALIZA��O ..............................

$n1 = 327;
$n2 = 148;

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

// .............................. SA�DA ..............................

echo "$n1, $n2";

?>