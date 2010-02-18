<?

/*@

@Titulo: Maioridade

@Enunciado: Permitir o acesso apenas para maiores de idade.

@Objetivo: Primeiro exemplo de condicional.

@Entrada: Um n�mero inteiro correspondente a idade do visitante.

@Sa�da:
Acesso Permitido. Bem Vindo!
ou
Acesso Negado, voc� precisa ser maior de idade para entrar neste site.

@Dica: Verificar se a idade informada � maior ou igual a 18 anos

@Dificuldade: 1

@Categoria: if

@Aula: 2

@ordem 1

@*/

// .............................. INICIALIZA��O ..............................

$idade = 18;

// .............................. ENTRADA ..............................

//$idade = $argv[1];

// .............................. PROCESSAMENTO ..............................

$adulto = $idade >= 18;

// .............................. SA�DA ..............................

if ($adulto)
	echo "Acesso Permitido. Bem Vindo!";
else
	echo "Acesso Negado,
voc� possui $idade anos e precisa ser maior de idade para entrar neste site.";

?>