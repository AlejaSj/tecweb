<?php
    function numero(){
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
    }
    function repite(){
    if(isset($_POST["evalua"]))
        {
            $matriz = [[]];
            $indice = 0;
            $condicion = false;
            while($condicion == false){
                $arreglo = [];
                for ($i=0; $i < 3; $i++) { 
                    $arreglo[$i]=rand(100,999);
                    if ($i!=2) {
                        echo $arreglo[$i]. ", ";
                    }else{
                        echo $arreglo[$i];
                    }

                }   
                $matriz[$indice++] = $arreglo;
                

                echo "</br>";
                if($arreglo[0]%2!=0 && $arreglo[1]%2==0 && $arreglo[2]%2!=0){
                    $condicion=true;
                }
            }
            $numeros = $indice*3;
            echo "<p>". $numeros . " números obtenidos en " .$indice . " iteraciones"; 
        }
    }
?>