<?

// ENTRADA

$resultados = $argv[1];
$porPagina = $argv[2];

// LOGICA

$paginas = ceil($resultados / $porPagina);

// .............................. SA�DA ..............................

echo "
$resultados resultados exibidos em $paginas paginas

";

?>