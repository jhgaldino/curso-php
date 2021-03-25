<?php
// laços de repetição
/* while se sai melhor quando não sabemos
quantas vezes a instrução será repetida*/
$i = 0;
while($i < 10){
    echo "contagem :($i)";
    $i++;
}
/** for*/
//para tabuada
for($i = 0;i<=10;i++){
    echo (2*$i=(2*$i));
}
//podemos colocar um for dentro de outro for
for ($i=1;$i<=10;$i++){
    for($j=0;$j<=10;$j++){
        echo($i,"*",$j,"=",($i*$j) )
    }
}
/**dowhile  executa o cmando primeiro para perguntar depois*/
$i=1;
do{
    echo "numero ($i)";
    $i++;
}while($i<=10);
?>