<?php

include 'validacion.php';
include 'etiquetas.php';
require_once '../listas/LinkedList.php';
require_once "simple_html_dom.php";

$etiquetas = new etiquetas();

/*for ($i=$etiquetas->get_valor(); $i < strlen($pagina_inicio); $i++) { 
    echo $etiquetas->evaluacionEtiquetas($pagina_inicio);
    //$etiquetas->evaluacionDeEtiquetas2($pagina_inicio).'<br>';
    
    
}*/

//$etiquetas->evaluacionDeEtiqutas2($pagina_inicio).'<br>';
//echo 'Estamos en proceso';
//$html = file_get_html('$pagina_inicio');

//$prueba= $html->__destruct();
$pagina='../html/estructuraBasica.html';
$html= file_get_html($pagina_inicio);
//$dom = str_get_html($pagina_inicio);
//echo $dom;
foreach($html->find('body') as $article) {
    $item['div'] = $article->find('div', 0)->plaintext;
    $item['img'] = $article->find('img', 0)->src;
    $item['a'] = $article->find('a', 0)->href;
    $articles[] = $item;
}

print_r($articles);

$html->clear();
unset($html);
//echo 'Este es el div: '.$div;
//$html2 = file_get_html('$pagina_inicio');
//echo $html2->find('div',0);



