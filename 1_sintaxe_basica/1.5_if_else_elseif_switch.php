<?php
$idade = 17;
$senha = "1234";
$acesso = true;

if ($idade > 18){
    echo "Okay!"
}else{
    echo "Nay!"
}

if ($senha == "123"){
    echo "Acesso nivel 1 autorizado!"
}else if ($senha == "1234"){
    echo "Acesso nivel 2 autorizado!"
}else{
    echo "Acesso negado!"
}

if (($idade>=18)||($senha === "1234")){
    echo "Acesso autorizado nivel 1"}else{
        echo "Acesso negado!"
    }

if ($acesso && idade >=18){
    echo "Okay entra"
}else{
    echo "Nay! Sai!"
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<body>
    <?php
    if ($idade >=18 && $acesso){
    ?>
    <h1 style="colorgreen">autorizado</h1>
    <?php
    } else {
        
    <h1 style="colorred">desautorizado</h1>    
    switch($valor){
        case "1":
        echo "bom dia";
        break;
        case "2":
        echo "boa tarde";
        break;
        default
        case "3":
        echo "boa noite";
    }
    ?>
    
    }


</body>
</html>