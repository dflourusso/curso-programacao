<?

/*@

@Titulo: Diferen�a Entre N�meros

@Enunciado: Calcular a diferen�a entre dois n�meros.

@Objetivo: if utilizado no processamento e n�o direto na sa�da.

@Entrada: Dois N�meros

@Sa�da:
A diferen�a entre 7  e 12  = 5
A diferen�a entre 12  e 7  = 5

@Dica: Verificar quem � o maior, para subtrair sempre o menor do maior

@Dificuldade: 1

@Categoria: if

@Aula: 2

@ordem 5

@*/

// .............................. INICIALIZA��O ..............................

$n1 = 12;
$n2 = 7;

// .............................. ENTRADA ..............................

/*
$n1 = $argv[1];
$n2 = $argv[2];
//*/

// .............................. PROCESSAMENTO ..............................

if ($n1 > $n2)
	$diferenca = $n1 - $n2;
else
	$diferenca = $n2 - $n1;

// .............................. SA�DA ..............................

echo "A diferen�a entre $n1 e $n2 = $diferenca";

?>