<?php

include 'validacion.php';
include 'etiquetas.php';
require_once '../listas/LinkedList.php';

$etiquetas = new etiquetas();

for ($i=$etiquetas->get_valor(); $i < strlen($pagina_inicio); $i++) { 
    echo $etiquetas->evaluacionEtiquetas($pagina_inicio).'<br>';

}



