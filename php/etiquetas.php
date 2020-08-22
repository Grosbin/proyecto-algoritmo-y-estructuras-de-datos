<?php 
require_once 'simple_html_dom.php';

class Etiquetas{
    private $valor=0;

    public function set_valor($contador){
        $this->valor=$contador;
    }
    public function get_valor(){
        return $this->valor;
    }
    public function body ($paginaWeb) {
        $html= file_get_html($paginaWeb);
    
        foreach($html->find('body') as $article) {
            $item['div']     = $article->find('div', 0)->plaintext;
            $item['img']    = $article->find('img', 0)->src;
            $item['a'] = $article->find('a', 0)->href;
            $articles[] = $item;
        }

        return $articles;
    }
    public function head ($paginaWeb) {
        $html= file_get_html($paginaWeb);
        foreach($html->find('head') as $article) {
            $item['title']     = $article->find('title', 0)->plaintext;
            $item['link']    = $article->find('link', 0)->href;
            $articles[] = $item;
        }
        return $articles;
    }
    public function bodyArbol($paginaWeb)
    {
        $html= file_get_html($paginaWeb);
        $body=null;
    foreach($html->find('body') as $article) {
        $body=$article->children();
        //$body=$article->children(2)->attr;
        //$html->children();
        //$body[] = $item;
    }
    $html->clear();
    unset($html);
    return $body;
    }
    public function headArbol($paginaWeb)
    {
        $html= file_get_html($paginaWeb);
        $head=null;
    foreach($html->find('head') as $article) {
        $head=$article->children();
  
    }
    $html->clear();
    unset($html);
    return $head;
    }
    public function arbolHtml($paginaWeb){
        $arbolHtml=[$head=array($this->headArbol($paginaWeb)),$body=array($this->bodyArbol($paginaWeb))];
         return $arbolHtml;
    }
    
    function evaluacionEtiquetas($x){
        $stringPagina=file_get_contents($x);
        $contador=$this->get_valor();

        for ($i=$contador; $i < strlen($stringPagina); $i++) {
            if ($stringPagina[$i]!= chr(60) &&$stringPagina[$i]!=chr(62)){
                $newString='';
                $newString.=$stringPagina[$i];
                $contador++;
                $this->set_valor($contador);
                //echo 'si funciona la funcion';
            break;
            
            }
            if($stringPagina[$i]=='>'){
                echo '<br>';
                echo $contador.'<br>';
                $this->set_valor($contador);
                //$contador++;
            //return $newString;
            //break;
            }
            $this->set_valor($contador);
            break;
        }
       
       // var_dump($newString);
        $this->set_valor($contador);
        
        //$this->set_string($newString);
    return $newString;
    }
    public function organizacionEtiquetas($x){
     if ($this->evaluacionEtiquetas($x)=='hhead'){
         echo 'si encontro el head';
     }
        echo 'si entro a la funcion';
    }
    
    
}















