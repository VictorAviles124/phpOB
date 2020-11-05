<?php
//Funciones estrcutura de php dentro de una clase 
//manda a llamar un proceso (no accede a propiedades y a metodos)\
    class miclase{
        public $mensaje = "Hola";
        public function hola(){
            return "Hola";
        }
        public static function metodo(){
            return self::hola();
        
     

        }
    }
    echo miclase::metodo();
?>