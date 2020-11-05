<?php

    class  retornoDatos{
        //tipos String
        //tipo Enteros
        //tipo arreglos
        //tipo Json

        public function retornaString($edad){
            if($edad > 18){
                return "Es mayor de edad";

            }else{
                return "No es mayor de edad";

            }
        }
        public function retornaEntero($valor){
            if($valor > 0){
                return 1;


            }else{
                return 0;

            }

        }
        public function retornaArreglos($ciclos){
            $datos = array();

            for ($i=0; $i < $ciclos; $i++) { 
                # code...
                $datos[$i]=$i;
            }
            return $datos;

        }
        public function retornaJson(){
            $arr = array(
               "hdd" => 500,
               "pantalla" =>21,
               "ram" => 8 
            );
            return json_encode($arr); 
        }
    }
    $cadena = new retornoDatos();
    var_dump($cadena -> retornaString(20));
    echo "<br>";
    var_dump($cadena ->retornaEntero(1));
    echo "<br>";
    var_dump($cadena->retornaArreglos(10));
    echo "<br>";
    var_dump($cadena->retornaJson());
    
?>