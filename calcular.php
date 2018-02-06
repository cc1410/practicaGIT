<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero[]=$_POST["numero1"];
        $numero[]=$_POST["numero2"];
        $numero[]=$_POST["numero3"];
        $numero[]=$_POST["numero4"];
        $numero[]=$_POST["numero5"];
        $numero[]=$_POST["numero6"];
    $numero[]=$_POST["numero7"];
        $sumar=0;
        foreach ($numero as $suma) {
            $sumar =$sumar+$suma;
          
        }  echo "la suma total es: $sumar<br>";
        
        $contar=count ($numero);
        
        
        $medias=$sumar/$contar;
        echo "la media total es: $medias<br>";
        echo "<br>";
        
        $cont=0;
        foreach ($numero as $par){
            if($par%2==0){
                $cont++;
                
                echo $par." es numero par<br>";
            }
        }echo "hay $cont numero pares<br>";
        
        
        ?>
    </body>
</html>