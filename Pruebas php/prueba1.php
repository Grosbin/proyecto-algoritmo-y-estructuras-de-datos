<?php
$strig='<!DOCTYPE html>
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

function evaluacionEtiquetas($x){
    static $valor=195;
    $newarreglo='';
    for ($i=$valor; $i < strlen($x); $i++) {
        if ($x[$i]!='<'&&$x[$i]!='>'){
            $newarreglo.=$x[$i];
            //echo 'si funciona la funcion';

        }
        if($x[$i]=='>'){
            echo '<br>';
            echo 'valor ->'>$x[$i].'<br>';
            echo 'Este es el valor del contador ->'.$valor.'<br>';
            return $newarreglo;
        }
        $valor++;
    }
    echo '<br>';
    echo 'valor ->'>$x[$i].'<br>';
    echo 'Este es el valor del contador ->'.$valor.'<br>';
    //echo 'si funciona la funcion';
return $newarreglo;
}