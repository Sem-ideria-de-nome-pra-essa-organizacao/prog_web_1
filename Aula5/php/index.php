<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
    <?php 
    $nome = "Lucas Mantelli";
    $idade = 18;
    echo "hello world! ".$nome ."<br> Idade: ".$idade;

    if($idade>=18){
        echo"<br> de maior <br>";
    }
    else{
        echo"<br> de menor";
    }

    $pessoas = [
        "Ana", "Chaves", "Kiko" ];

    for($i = 0; $i < count($pessoas); $i++){
        echo $pessoas[$i];
    }

    $idades = [
        12,18,76,43,43,221,12,12,3,1
    ];

    for ($i=0; $i < count($idades); $i++) { 
        if($i>=18){
            echo"<br> $idades[$i] de maior <br>";
        }
        else{
            echo"<br> $idades[$i] de menor";
        }
    }

    $opcao = "-";
    $num1 =21;
    $num2 =13;

    switch ($opcao) {
        case "/":
            $res = $num1 / $num2;
            echo "$num1 / $num2 = $res";
            break;
        
        case "*":
            $res = $num1 * $num2;
            echo "$num1 * $num2 = $res";
            break;

        case "+":
            $res = $num1 + $num2;
            echo "$num1 + $num2 = $res";
            break;

        case "-":
            $res = $num1 - $num2;
            echo "$num1 - $num2 = $res";
            break;
                
        default:
            echo "Nenhuma op selecionada";
            
            break;
    }

    ?>
</body>
</html>