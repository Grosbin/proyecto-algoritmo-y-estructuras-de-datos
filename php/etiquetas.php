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
    public function evaluacionDeEtiqutas2($paginaWeb)
    {
        echo $paginaWeb;
        $html = file_get_html($paginaWeb);

        foreach ($html->find('html') as $e) {
            echo $e->src . '<br>';
        }

        /*$html = file_get_html('http://slashdot.org/');


        foreach($html->find('div.article') as $article) {
        $item['title']     = $article->find('div.title', 0)->plaintext; // extrae el título
        $item['intro']    = $article->find('div.intro', 0)->plaintext;  // extrae la intro
        $item['details'] = $article->find('div.details', 0)->plaintext; // extrae los detalles
        $articles[] =


        }*/
    }
    /*
    function evaluacionEtiquetas($x){
       
        $contador=$this->get_valor();
       
        $continuar=true;
    
        for ($i=$contador; $i < strlen($x); $i++) {
            if ($x[$i]!='<'&&$x[$i]!='>'){
                $newString='';
                $newString.=$x[$i];
                $contador++;
                $this->set_valor($contador);
             
                //echo 'si funciona la funcion';
            break;
            
            }
            
            if($x[$i]=='>'){
                echo '<br>';
                echo $contador.'<br>';
                $this->set_valor($contador);
                //$contador++;
            //return $newString;
            //break;
            }
          
            $this->set_valor($contador);
        }
       
       // var_dump($newString);
        $this->set_valor($contador);
        
        //$this->set_string($newString);
    return $newString;
    }   
    */
    
}















