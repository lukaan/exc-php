<?php
$n1 = 10;
$n2 = 5;
$operador = "divisao";


switch ($operador){
    case "adicao":
        $resultado = $n1 + $n2;
        echo ("O resultado é: ".$resultado);        
        break;
    
    case "subtracao":
        $resultado = $n1 - $n2;
        echo ("O resultado é: ".$resultado);        
        break;
    
    case "multiplicacao":
        $resultado = $n1 * $n2;
        echo ("O resultado é: ".$resultado);
        break;
    
    case "divisao":
        $resultado = ($n1 / $n2);
        echo ("O resultado é: ".$resultado);
        break;
    
    default: 
        echo "Error pi pi pi";
       
}
?>