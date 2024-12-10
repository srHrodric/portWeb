<?php
$valor = array();

echo '<h3>--Números da Sorte--</h3>'; 
echo '<br>';
    for($i = 1; $i <= 20; $i++){
        $rand = rand(1,99);
        echo "<input class='bubble1' readonly value='$rand'>";
        array_push($valor,$rand);
    };