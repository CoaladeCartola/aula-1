<?php
    #criação de uma array
   $produtos =[
    "maça" => 1.99,
    "uva" => 7.99,
    "laranja" => 2.49,];
    #exibir os preços da lista
    echo "lista preços:<br>";
    foreach($produtos as $produtos => $preço)
    {
        echo $produto."custo R$" .$preco."<br>";
    }

    #calculo total
    $total = 0;
    foreach ($produtos as $preco)
    {
        $total += $preco;
        echo "total: R$" .$total. "<br>";
    }