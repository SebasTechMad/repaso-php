<!-- 1. Realizar y probar una función en PHP  llamada elMayor  que reciba 
tres números: A,B y C. La función almacenará en C el valor que sea 
mayor A o B. En el caso sean iguales almacenará el valor 0 en C 
¿Qué parámetros se deberían pasar por valor o copia y cuales por referencia? -->

<?php

    function main()
    {
        $a = 0;
        $b = 0;
        $c = 0;

        esMayor($a, $b, $c);
    }


    function esMayor($a, $b, &$c)
    {
        if($a > $b){
            $c = $a;
        }else{
            if($b > $a){
                $c = $b;
            }else{
                $c = 0;
            }
        }
    }

?>