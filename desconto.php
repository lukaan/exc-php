<?php
    $valorProduto = 14500.00;
    $desconto = (5/100); // 5% de desconto em programação é * 0.05, para isso divida esse valor por 100.

    if ($valorProduto >= 10000) {
        $valorDescontado = $valorProduto - ($valorProduto * $desconto);
        echo ("O preço final será: R$ ".$valorDescontado.",00");
    }
?>
