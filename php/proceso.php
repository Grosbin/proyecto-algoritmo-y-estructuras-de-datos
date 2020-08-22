<?php

include 'validacion.php';
include 'etiquetas.php';
require_once "simple_html_dom.php";

$etiquetas = new etiquetas();

echo '<br><br>';
print_r($etiquetas->arbolHtml($pagina_inicio));

$root = $etiquetas->bodyBusqueda($pagina_inicio);
$root2 = $etiquetas->headBusqueda($pagina_inicio);


//buscar 

$tag = 'img';

function searchTag ($node, $tag) {
    if ($node->tag == $tag) {
        return $node;
    }
    $arr = $node->children();
    
    foreach ($arr as $child) {
        if (searchTag ($child, $tag) !== null) {
            return $child;
        }
    }
}
echo '<br><br>';
echo '<h1>Resultados Busqueda</h1>';
echo(searchTag ($root, 'img'));






