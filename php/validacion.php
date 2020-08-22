<?php
    //require 'proceso

    $url = $_POST['url'];
    $opcion = $_POST['opcion'];

    switch ($opcion) {
        case 'ninguna':
            $pagina_inicio = $url;
            if($url==NULL) header("Location:".$_SERVER['HTTP_REFERER']);
        break;
        case 'estructura_basica':
            $pagina_inicio ='../html/estructuraBasica.html';
        break;
        case 'blog_ing':
            $pagina_inicio = '../html/blog_ing.html';
        break;
        case 'campus_virtual_unah':
            $pagina_inicio = '../html/Campus Virtual UNAH.html';
        break;
        default:
            $pagina_inicio = file_get_contents($url);
        break;
    }
    
