# Proyecto-Algoritmo-y-Estructuras-de-Datos



//Integrantes:
===============
 /** 
 * Cyntia Melissa Reyes Coot 
 * 20171003604
 * 
 * Marisa Elizabeth Pineda Pavon 
 * 20161004945
 * 
 * Luis Daniel Mejía Valladares
 * 20181006117
 * 
 * Grosbin Roberto Rivera Betancourth
 * 20181006140
 */

//Instrucciones necesarias para instalar y utilizar la aplicación.
==================================================================

1) Debe crear el entorno php  "ejecutar el comando php -S localhost:8080 en la ubicación donde se encuentra este archivo.md" el puerto 8080 puede cambiarlo si gusta

2) Ejecutar el archivo index.html

//Análisis de Big-O
====================

1) F(N)=1+N
Respuesta O(N)

  public function head ($paginaWeb) {
        $html= file_get_html($paginaWeb);                                   1
        foreach($html->find('head') as $article) {                          N
            $item['title']  = $article->find('title', 0)->plaintext;
            $item['link'] = $article->find('link', 0)->href;
            $articles[] = $item;
        }
        return $articles;
    }

2) F(N)=1+1+N^2
Respuesta=O(N^2)

function searchTag ($node, $tag) {
    if ($node->tag == $tag) {                            1
        return $node;
    }
    $arr = $node->children();                            1
    
    foreach ($arr as $child) {                           N
        if (searchTag ($child, $tag) !== null) {         N
            return $child;
        }
    }
}

3) F(N)=1+1+N*(4+3+1)+1
Respuesta=O(N)

 function evaluacionEtiquetas($x){
        $stringPagina=file_get_contents($x);                                    1
        $contador=$this->get_valor();                                           1

        for ($i=$contador; $i < strlen($stringPagina); $i++) {                  N
            if ($stringPagina[$i]!= chr(60) &&$stringPagina[$i]!=chr(62)){      4
                $newString='';
                $newString.=$stringPagina[$i];
                $contador++;
                $this->set_valor($contador);
            break;
            
            }
            if($stringPagina[$i]=='>'){                                         3
                echo '<br>';
                echo $contador.'<br>';
                $this->set_valor($contador)
            }
            $this->set_valor($contador);                                        1
            break;
        }
        $this->set_valor($contador);                                            1
    return $newString;
    }
