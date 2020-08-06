<?php
    //require 'proceso

    $url = $_POST['url'];
    $opcion = $_POST['opcion'];

    switch ($opcion) {
        case 'ninguna':
            $pagina_inicio = file_get_contents($url);
            if($url==NULL) header("Location:".$_SERVER['HTTP_REFERER']);
        break;
        case 'estructura_basica':
            $pagina_inicio = file_get_contents('../html/estructuraBasica.html');
        break;
        case 'blog_ing':
            $pagina_inicio = file_get_contents('../html/blog_ing.html');
        break;
        case 'campus_virtual_unah':
            $pagina_inicio = file_get_contents('../html/Campus Virtual UNAH.html');
        break;
        default:
            $pagina_inicio = file_get_contents($url);
        break;
    }
    

//https://www.instagram.com/
//https://www.google.com/
