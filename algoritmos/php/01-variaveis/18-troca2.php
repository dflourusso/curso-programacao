<?

// ENTRADA

$a = $argv[1];
$b = $argv[2];

// LOGICA

// utilizar uma vari�vel tempor�ria para fazer a troca
$temp = $a;
$a = $b;
$b = $temp;

// SAIDA

echo "
$a $b

"

?>