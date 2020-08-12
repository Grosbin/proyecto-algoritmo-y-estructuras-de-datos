<?php 


class Etiquetas{
    private $valor=0;

    public function set_valor($contador){
        $this->valor=$contador;
    }
    public function get_valor(){
        return $this->valor;
    }
    function evaluacionEtiquetas($x){
       
        $contador=$this->get_valor();
       
        $continuar=true;
    
        for ($i=$contador; $i < strlen($x); $i++) {
            if ($x[$i]!='<'&&$x[$i]!='>'&&$x[$i+1]!='/'){
                $newString='';
                $newString.=$x[$i];
                $contador++;
                $this->set_valor($contador);
             
                //echo 'si funciona la funcion';
            break;
            
            }
            
            /*if($x[$i]=='>'){
                echo '<br>';
                echo $contador.'<br>';
                $this->set_valor($contador);
                //$contador++;
            //return $newString;
            //break;
            }*/
          
            $this->set_valor($contador);
        }
       
       // var_dump($newString);
        $this->set_valor($contador);
        
        //$this->set_string($newString);
    return $newString;
    }





}















