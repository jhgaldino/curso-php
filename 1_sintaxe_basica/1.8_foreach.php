<?php
$arrayfrutas =["Abacaxi","Maça","Uva","Manga"];
$arrayfrutas2 =[
    1=>"Abacaxi",
    2=>"Abcate",
    3=>"Banana",
    4=>"Uva"];
]
$aluno=["João","José","Jonathan"];
foreach($arrayfrutas as $v){
echo $v "<br>";
}

foreach($arrayfrutas2 as => $v){
    echo "Key : ($key) => Value: ($v) <br>";
}
?>