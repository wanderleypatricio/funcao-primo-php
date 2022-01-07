<?php

function primo($inicio, $fim){
    $primos = array();
    $cont_div = 0;
    for($i = $inicio + 1; $i < $fim; $i++){
        for($div = 1; $div <= $i; $div++){
            if($i % $div == 0){
                
                $cont_div++;
            }
        }
        
        if($cont_div == 2){
            //echo $i;
            array_push($primos, $i);
        }
        
        $cont_div = 0;
    }
    
    echo json_encode($primos);
}

$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

primo($inicio, $fim);