<?php 

require_once '../php/simple_html_dom.php';
$html = file_get_html('../html/estructuraBasica.html');

// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';

// Dump contents (without tags) from HTML
echo file_get_html('../html/estructuraBasica.html')->plaintext;
echo '<br>';
$html = file_get_html('../html/estructuraBasica.html');

// Find all article blocks
foreach($html->find('body') as $article) {
    $item['body']     = $article->find('body.div', 0)->plaintext;
    $item['img']    = $article->find('body.img', 0)->plaintext;
    $item['a'] = $article->find('body.a', 0)->plaintext;
    $articles[] = $item;
}

print_r($articles);


?>