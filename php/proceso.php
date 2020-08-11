<?php

include 'validacion.php';
include 'etiquetas.php';
require_once '../listas/LinkedList.php';

$etiqutas = new Etiquetas();
for ($i=0; $i < strlen($pagina_inicio); $i++) { 
    echo $etiqutas->evaluacionEtiquetas($pagina_inicio);

}

