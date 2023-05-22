<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "icon" href = "./favicon2.png" type = "image/png">
</head>
<body>
    <?php
    //Obtencion de datos
            $palabras  = (isset($_POST["palabras"]) && $_POST["palabras"] != NULL) ? $_POST["palabras"]: false;
            $modo = (isset($_POST["modo"]) && $_POST["modo"] != NULL) ? $_POST["modo"]: false;
            $zona_horaria = (isset($_POST["zona_horaria"]) && $_POST["zona_horaria"] != NULL) ? $_POST["zona_horaria"]: false;

   //Comprobando
       /*
        echo $palabras."<br>";
        echo $modo."<br>";
        echo $zona_horaria."<br>";

     */

  //   /*
     echo "<table border = '1' style = 'border-collapse:separate' cellpadding = '30px' cellspacing = '1px' align = 'center'>
                <thead>
                    <tr>
                        <th><div align = 'center'>Libro número: ";
                $longitud_del_numero = rand(8,15);

                for($i = 1; $i <= $longitud_del_numero; $i++){

                    if(rand(0,1) == 0){

                    echo rand(0,9);

                    }else{

                    
                        printf("%c", rand(97,122));


                    }

                }
                unset($longitud_del_numero);
        
                     echo  " </div></th>
    
                        
                    </tr>
                </thead>
                <tbody>
                    <td><div align = 'center'>";


            if($modo == "Normal"){
                

                $posicion_de_palabras = rand(1,2500-strlen($palabras));

                for($i = 1; $i <= 2500 - strlen($palabras);$i++){
                    $palabra_longitud =  rand(3, 12);

                    for($o = 1; $o <= $palabra_longitud; $o++){
                        if($o + $i != $posicion_de_palabras){
                            if(rand(0,1) == 0){

                            echo rand(0,9);

                             }else{

                                if(rand(0,1) == 0){
                                
                                    printf("%c", rand(65,90));

                                }else{

                                    printf("%c", rand(97,122));

                                }
                            }
                        
                            if($o == $palabra_longitud){
                                echo " ";

                             }
                        }else{
                            echo "<strong style = 'color:#0356CE'><u>".$palabras."</u></strong>";
                        }

                    }

                    $i+=$palabra_longitud-1;
                    

                }
            }else if($modo == "Palabras")
            {
                $arreglo_de_palabras = explode(" ",$palabras);
                $palabras_sin_espacios = implode($arreglo_de_palabras);
                $arreglo_de_posiciones = array(rand(1,2500-strlen($palabras_sin_espacios)));
                $numero_de_entradas_a_las_posiciones = 1;
                $condicion_de_si_pasada = true;

                for($i = 1; $i <= count($arreglo_de_palabras)-1;$i++){
                    $posicion = rand(1,2500-strlen($palabras_sin_espacios)-$numero_de_entradas_a_las_posiciones);
                    for($o = 1;$o <= $numero_de_entradas_a_las_posiciones;$o++){
                       
                        if($arreglo_de_posiciones[$o-1] == $posicion){
                            
                            $i--;
                            $condicion_de_si_pasada = false;

                        }
                        if($o == count($arreglo_de_posiciones) && $condicion_de_si_pasada == true){
                            array_push($arreglo_de_posiciones,$posicion);
                            

                        }
                        $condicion_de_si_pasada = true;


                    }
                    $numero_de_entradas_a_las_posiciones++;
                   
                    

                }
                

                for($i = 1; $i <= 2500-strlen($palabras_sin_espacios);$i++){
                    $palabra_longitud =  rand(3, 12);

                    for($o = 1; $o <= $palabra_longitud; $o++){

                        for($u = 1; $u <= $numero_de_entradas_a_las_posiciones; $u++){

                        if($i+$o == $arreglo_de_posiciones[$u-1]){
                            echo "<strong style = 'color:#0356CE'><u>".$arreglo_de_palabras[$u-1]."</u></strong>";

                        }else if($condicion_de_si_pasada == true){

                        if(rand(0,1) == 0){

                            echo rand(0,9);

                        }else{

                            if(rand(0,1) == 0){
                                
                                printf("%c", rand(65,90));

                            }else{

                                printf("%c", rand(97,122));

                            }
                        }

                            if($o == $palabra_longitud){
                            echo " ";

                            }
                            $condicion_de_si_pasada = false;
                        }
                            }
                            $condicion_de_si_pasada = true;
                    }

                    $i+=$palabra_longitud-1;
                    

                }

                


            }else if($modo == "Orden"){

                $arreglo_de_palabras = explode(" ",$palabras);
                $palabras_sin_espacios = implode($arreglo_de_palabras);
                $arreglo_de_posiciones = array(rand(1,2500-strlen($palabras_sin_espacios)));
                $numero_de_entradas_a_las_posiciones = 1;
                $condicion_de_si_pasada = true;
                

                for($i = 1; $i <= count($arreglo_de_palabras)-1;$i++){
                    $posicion = rand(1,2500-strlen($palabras_sin_espacios)-$numero_de_entradas_a_las_posiciones);
                    for($o = 1;$o <= $numero_de_entradas_a_las_posiciones;$o++){
                       
                        if($arreglo_de_posiciones[$o-1] == $posicion){
                            
                            $i--;
                            $condicion_de_si_pasada = false;

                        }
                        if($o == count($arreglo_de_posiciones) && $condicion_de_si_pasada == true){
                            array_push($arreglo_de_posiciones,$posicion);
                            

                        }
                        $condicion_de_si_pasada = true;


                    }
                    $numero_de_entradas_a_las_posiciones++;
                   
                    

                }

                sort($arreglo_de_posiciones);

                for($p = 0; $p < count($arreglo_de_palabras); $p++){

                    echo $arreglo_de_posiciones[$p]."   ";


                }
                

                for($i = 1; $i <= 2500-strlen($palabras_sin_espacios);$i++){
                    $palabra_longitud =  rand(3, 12); 

                    for($o = 1; $o <= $palabra_longitud; $o++){

                        for($u = 1; $u <= $numero_de_entradas_a_las_posiciones; $u++){

                        if($i+$o-1 == $arreglo_de_posiciones[$u-1]){
                            echo "<strong style = 'color:#0356CE'><u>".$arreglo_de_palabras[$u-1]."</u></strong>";

                        }else if($condicion_de_si_pasada == true){

                        if(rand(0,1) == 0){

                            echo rand(0,9);

                        }else{

                            if(rand(0,1) == 0){
                                
                                printf("%c", rand(65,90));

                            }else{

                                printf("%c", rand(97,122));

                            }
                        }

                            if($o == $palabra_longitud){
                            echo " ";
                                
                            }
                            $condicion_de_si_pasada = false;
                        }
                            }
                            $condicion_de_si_pasada = true;
                            
                    }

                    $i+=$palabra_longitud-1;
                    

                }

                


            }else if($modo == "Inverso"){

                
                $array_inverso = array(substr($palabras,-1,1));

                for($i = 1; $i<=strlen($palabras);$i++){

                    
                    array_push($array_inverso, substr($palabras,-($i+1),1));
                    

                }
                $palabra_inverso ="";
                for($u = 1; $u<=strlen($palabras);$u++){
                 $palabra_inverso = $palabra_inverso.$array_inverso[$u-1];
                    
                }

                $posicion_de_palabras = rand(1,2500-strlen($palabras));

                for($i = 1; $i <= 2500 - strlen($palabras);$i++){
                    $palabra_longitud =  rand(3, 12);

                    for($o = 1; $o <= $palabra_longitud; $o++){
                        if($o + $i != $posicion_de_palabras){
                            if(rand(0,1) == 0){

                            echo rand(0,9);

                             }else{

                                if(rand(0,1) == 0){
                                
                                    printf("%c", rand(65,90));

                                }else{

                                    printf("%c", rand(97,122));

                                }
                            }
                        
                            if($o == $palabra_longitud){
                                echo " ";

                             }
                        }else{
                            echo "<strong style = 'color:#0356CE'><u>".$palabra_inverso."</u></strong>";
                        }

                    }

                    $i+=$palabra_longitud-1;
                    

                }


               

            }    
                    echo"
                   </div> </td>
                </tbody>
                
            </table>
            
            <p>
            <strong>La fecha de consulta fue: </strong>";
            if($zona_horaria == "newYork"){
                date_default_timezone_set("America/New_York");
            }else if($zona_horaria == "mexico"){
                date_default_timezone_set("America/Mexico_City");
            }else if($zona_horaria == "berlin"){
                date_default_timezone_set("Europe/Berlin");
            }

            echo date("d/F/Y")."<strong> a las: </strong>".date("g:i:s a")."<strong> en </strong>".date_default_timezone_get()."<br><br>";

            echo "Fecha de creacion de este libro: ";

           
            $year = rand(1000,2023);
            if($year == 2023){
                $mes = rand(1,5);
            }else{
                $mes = rand(1,12);
            } 
           

           if($mes == 1 ||$mes == 3||$mes == 5||$mes == 7||$mes == 8||$mes == 10||$mes == 12){
            if($mes == 5 && $year == 2023){
                $dia = rand(1,21);
            }else{
                $dia = rand(1,31);
            }
           

           }else if($mes == 2){
            
            if($year % 4 == 0){
                $dia = rand(1,29);
            }else{
                $dia = rand(1,28);
            }
            
           }else{

            $dia = rand(1,30);
           }
           switch($mes){

            case 1: $mes_str = "Enero";
                break;
            case 2: $mes_str = "Febrero";
                break;
            case 3: $mes_str = "Marzo";
                break;
            case 4: $mes_str = "Abril";
                break;
            case 5: $mes_str = "Mayo";
                break;
            case 6: $mes_str = "Junio";
                break;
            case 7: $mes_str = "Julio";
                break;
            case 8: $mes_str = "Agosto";
                break;
            case 9: $mes_str = "Septiembre";
                break;
            case 10: $mes_str = "Octubre";
                break;
            case 11: $mes_str = "Noviembre";
                break;
            case 12: $mes_str = "Diciembre";
                break;
           }

           echo $dia." de ".$mes_str." de ".$year;

           echo "</p>
           </body>
           </html>";


            
            

    // */
    ?>
</body>
</html>