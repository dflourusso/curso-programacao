<?

/*@

@Titulo: Par ou �mpar

@Enunciado: Dado um n�mero de entrada, dizer se � par ou �mpar.

@Objetivo: Testar condicional em que o valor testado � o resultado de outra opera��o.

@Entrada: Um n�mero inteiro.

@Sa�da:
8 � par
OU
13 � impar

@Dica: Se o resto da divis�o por 2 for zero, ent�o o n�mero � par

@Dificuldade: 1

@Categoria: if

@Aula: 2

@ordem 10

@*/

// .............................. INICIALIZA��O ..............................

$n = 6;

// .............................. ENTRADA ..............................

//$n = $argv[1];

// .............................. PROCESSAMENTO ..............................

$resto = $n % 2;
$isPar = $resto == 0;

// .............................. SA�DA ..............................

if ($isPar)
	echo "$n � par";
else
	echo "$n � impar";

?>