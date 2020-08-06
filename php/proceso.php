<?php

include 'validacion.php';

$stringPaginadePrueba='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>
<body>
    <div>
        <p class="parrafo">Hola mundo <a href="proceso.php"></a></p>
    </div>
    <img src="../img/php-illustration.png" alt="">
    <table class="tabla">Esta es una tabla <ul>Lista sin orden <ol>Lista ordenada</ol></ul></table>
    <li class="ele-lista">Elemento de una lista</li>
    
</body>
</html>';

//$pagina_validacion=$pagina_inicio;
//$arrayHtml1= htmlspecialchars_decode($pagina_inicio);
//$arrayHtml= htmlspecialchars($pagina_inicio);
//$newArray=[];
for ($i=0; $i < strlen($pagina_inicio) ; $i++) { 
    if ($pagina_inicio[$i]=='<'){
        echo $i.') '.$pagina_inicio[$i].'<br>';
    }
}
//var_dump($arrayHtml1);
//echo htmlspecialchars_decode($pagina_validacion);

//echo html_entity_decode($pagina_validacion);
//$newArray= explode(" <",$arrayHtml);


//echo strlen($arrayHtml).'<br>';
//print_r($newArray);
//echo $arrayHtml;
/*

$cadena="la web del programador";
// Recorremos cada carácter de la cadena

for($i=0;$i<strlen($cadena);$i++){

	// Mostramos cada uno de los caracteres...

	// con $cadena[0] se muestra el primera caracter, [1], el segundo, etc...

	echo "<br>".$cadena[$i];

}*/