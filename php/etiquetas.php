<?php 


class Etiquetas{
    private $valor=195;

    public function set_valor($contador){
        $this->valor=$contador;
    }
    public function get_valor(){
        return $this->valor;
    }
    function evaluacionEtiquetas($x){
       
        $contador=$this->get_valor();
        $newString='';
        $continuar=true;
    
        for ($i=$contador; $i < strlen($x); $i++) {
            if ($x[$i]!='<'&&$x[$i]!='>'){
                $newString.=$x[$i];
                //echo 'si funciona la funcion';
                $contador++;
            }
            if($x[$i]=='>'){
                echo $contador.'<br>';
                $this->set_valor($contador);
            return $newString;
            }
           
        }
       // echo '<br>';
       // var_dump($newString);
       // echo 'valor ->'>$x[$valor].'<br>';
        //echo 'Este es el valor del contador ->'.$valor.'<br>';
        //echo 'si funciona la funcion';
    return $newString;
    }






}















