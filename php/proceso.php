<?php

include 'validacion.php';
include 'etiquetas.php';
require_once '../listas/LinkedList.php';
require_once "simple_html_dom.php";

$etiquetas = new etiquetas();
//$etiquetas->evaluacionEtiquetas($pagina_inicio);
for ($i=$etiquetas->get_valor(); $i < strlen(file_get_contents($pagina_inicio)); $i++) {
    echo $etiquetas->evaluacionEtiquetas($pagina_inicio);

}

    echo '<br>';
$etiquetas->organizacionEtiquetas($pagina_inicio);

    echo '<br>';
print_r($etiquetas->body($pagina_inicio));






