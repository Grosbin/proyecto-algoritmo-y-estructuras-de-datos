<?php

require_once '..\php\simple_html_dom.php';

$doc = '<!DOCTYPE html>
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

/***************************** code *******************************************/

$html = str_get_html($doc);
$body = $html->find('body', 0);
$table = $html->createElement('table');

// Header row
$tr = $html->createElement('tr');
foreach ($header as $entry) {
    $th = $html->createElement('th', $entry);
    $tr->appendChild($th);
}
$table->appendChild($tr);

// Table data
foreach ($data as $row) {
    $tr = $html->createElement('tr');
    foreach ($row as $entry) {

        // (optional) Add info to the volume column
        if (is_numeric($entry)) {
            $value = number_format($entry);
            $td = $html->createElement('td', $value);
            $td->setAttribute('volume', $entry);
        } else {
            $td = $html->createElement('td', $entry);
        }

        $tr->appendChild($td);
    }
    $table->appendChild($tr);
}

$body->appendChild($table);

echo $html . PHP_EOL;

