<?php

include 'validacion.php';
include 'etiquetas.php';
require_once '../listas/LinkedList.php';
require_once "simple_html_dom.php";

$etiquetas = new etiquetas();
//$etiquetas->evaluacionEtiquetas($pagina_inicio);
/*for ($i=$etiquetas->get_valor(); $i < strlen(file_get_contents($pagina_inicio)); $i++) {
    echo $etiquetas->evaluacionEtiquetas($pagina_inicio);

}

    echo '<br>';
$etiquetas->organizacionEtiquetas($pagina_inicio);

    echo '<br>';
*/

//print_r($etiquetas->body($pagina_inicio));
//print_r($etiquetas->head($pagina_inicio));

echo '<br><br>';
//print_r ($etiquetas->bodyArbol($pagina_inicio));
echo '<br><br>';
var_dump($etiquetas->arbolHtml($pagina_inicio));

$root = $etiquetas->body($pagina_inicio);



//buscar img

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

//echo(searchTag ($root, 'img'));






