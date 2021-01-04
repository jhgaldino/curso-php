<?php
//usamos a palavra reservada define para declarar constantes
define("min",17);
define("max",45);

$idade = 25;
//----------------------------
echo "MIN" . min. "<br>";
echo "MAX" . max. "<br>";
echo"Idade: " . $idade . "<br><br>"
//----------------------------
if{$idade>= min && idade <= max}{
    echo "acesso liberado";
}else{
    echo "acesso negado";
}
?>