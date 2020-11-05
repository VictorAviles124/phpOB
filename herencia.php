<?php

//Diferenmcia parent metodo de la clase heredada 
//Selft metodo de la clase hijo 
    class clasePadre{
        public function metodoPadre(){
            return "hola desde el padre";
        }
        public function metodo1(){
            return "este es metodo padre"; 
    }
}

    class claseHijo extends clasePadre{
        //LA erencia es obetener todas las propiedades de umna clase a otra \\

        //Medoanmte ;a la palabra servesada extendes 
        public function metodoHijo(){
            return parent::metodoPadre();
        }
        public function metodo1(){
            return "este es metodo hijo"; 
        }
    }
        $obj = new claseHijo();
        echo $obj ->metodoPadre();
    //instancia rapida o de doble puntuacion 
    echo claseHijo::metodoPadre();

?>