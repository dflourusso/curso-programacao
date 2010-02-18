<?

/*@

@Titulo: Resto da Divis�o

@Enunciado: Dado dois n�meros de entrada,
dizer se o primeiro � divisor exato do segundo.
Caso n�o for, mostrar o resto da divis�o, exemplo:
3 � divisor exato de 33 com resultado 11
3 n�o � divisor exato de 33, pois a divis�o � 11 e o resto � 2

@Objetivo: Aprender o operador para calcular o resto da divis�o

@Entrada: Dois N�meros

@Sa�da:
3 � divisor exato de 33 com resultado 11
OU
3 n�o � divisor exato de 33, pois a divis�o � 11 e o resto � 2


@Dica: Para verificar se um n�mero � divis�vel por outro,
basta divid�-lo usando o operador de resto e verificar se o resultado � zero.
Exemplo: 33 % 3 == 0 mas 35 % 3 == 2 o primeiro � divis�vel exato por 3, mas o segundo n�o, 
pois retornou resto 2.

@Dificuldade: 1

@Categoria: Operadores B�sicos, Aritim�tica

@Aula: 1

@ordem 25

@*/

// .............................. INICIALIZA��O ..............................

$x = 35;
$y = 3;

// .............................. ENTRADA ..............................

/*/ Descomentar para testar entrada de dados pelo DOS
$x = $argv[1];
$y = $argv[2];
//*/

// .............................. PROCESSAMENTO ..............................

$divisao = floor($x / $y);
$resto = $x % $y;
$isDivisorExato = $resto == 0;

// .............................. SA�DA ..............................

if ($isDivisorExato)
	echo "$y � divisor exato de $x com resultado $divisao";
else
	echo "$y n�o � divisor exato de $x, pois a divis�o � $divisao e o resto � $resto";

?>