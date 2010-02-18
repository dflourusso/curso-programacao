<?

/*@

@Titulo: Desconto Percentual

@Enunciado: Calcular o valor de desconto e o valor final,
dado o pre�o do produto e a porcentagem de desconto.

@Objetivo: Aprender a utilizar a fun��o printf para formatar casas decimais de mo�da.

@Entrada: Pre�o do produto e porcentagem de desconto

@Sa�da:
Pre�o: R$ 240,00
Desconto: 15% (R$ -36,00)
Pre�o com Desconto: R$ 204,00

@Dica: Utilizar a fun��o printf para escrever os dados formatados.
Para escrever valores monet�rios use a m�scara: "%01.2f" e para escrever o 
caracter % use: "%%".
Usar tamb�m setlocale(LC_NUMERIC, "ptb"); para usar v�rgula no lugar de ponto
como separador das casas decimais.

@Dificuldade: 2

@Categoria: String

@Aula: 1

@ordem: 25

@*/

// .............................. ENTRADA ..............................

$preco = 240;
$porcentagem = 15;

/*/
$preco = $argv[1];
$porcentagem = $argv[2];
//*/

// .............................. L�GICA ..............................

$desconto = $preco * $porcentagem / 100;
$precoFinal = $preco - $desconto;

// .............................. SA�DA ..............................

$saida =
"
Pre�o: R$ %01.2f
Desconto: %d%% (R$ -%01.2f)
Pre�o com Desconto: R$ %01.2f
";

// para formata��o utilizar v�rgula ao inv�s de ponto para separador de casas decimais
// "portuguese-brazil" ou "ptb" 
setlocale(LC_NUMERIC, "ptb");

printf($saida, $preco, $porcentagem, $desconto, $precoFinal);

?>