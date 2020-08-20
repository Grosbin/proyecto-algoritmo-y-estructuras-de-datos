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
    public function body($paginaWeb)
    {
        $html= file_get_html($paginaWeb);

    foreach($html->find('body') as $article) {
         $article->children();
        //$html->children();
        //$body[] = $item;
    }
    $html->clear();
    unset($html);
    return $body;
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















