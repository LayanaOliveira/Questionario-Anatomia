
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <style>
            *{
                font-family: 'Ubuntu', sans-serif;
                margin-left: 10px;
                
            }
            span.texto{
                color: red;
            }

            .bloco{
                background: #add8e6;
                max-width: 450px;
                margin-top: 10%;
                margin-left: auto;
                margin-right: auto;
                padding: 12px;
                border-radius: 6px;
}
        </style>
    <body>
        <div class="bloco">
        <h3>GABARITO DO EXERCÍCIO:</h3>
        <p>
            QUESTÃ0 01 - B <br/>
            QUESTÃO 02 - C <br/>
            QUESTÃ0 03 - C <br/>
            QUESTÃO 04 - B <br/>
            QUESTÃO 05 - A <br/>
        </p>
        <h3>SUAS RESPOSTAS:</h3>
        <?php
            $pergunta1 = isset($_GET["pergunta1"])?$_GET["pergunta1"]:0;
            $pergunta2 = isset($_GET["pergunta2"])?$_GET["pergunta2"]:0;
            $pergunta3 = isset($_GET["pergunta3"])?$_GET["pergunta3"]:0;
            $pergunta4 = isset($_GET["pergunta4"])?$_GET["pergunta4"]:0;
            $pergunta5 = isset($_GET["pergunta5"])?$_GET["pergunta5"]:0;

            
            if($pergunta1 == 'B') {
                echo 'QUESTÃO 01 - B <br/>';
            } else {
                echo "<span class='texto'>QUESTÃO 01 - $pergunta1</span> </br>";
            }

            if($pergunta2 == 'C') {
                echo 'QUESTÃO 02 - C <br/>';
            } else {
                echo "<span class='texto'>QUESTÃO 02 - $pergunta2</span> </br>";
            };

            if($pergunta3 == 'C') {
                echo 'QUESTÃO 03 - C <br/>';
            } else {
                echo "<span class='texto'>QUESTÃO 03 - $pergunta3</span> </br>";
            };

            if($pergunta4 == 'B') {
                echo 'QUESTÃO 04 - B <br/>';
            } else {
                echo "<span class='texto'>QUESTÃO 04 - $pergunta4</span> </br>";
            };

            if($pergunta5 == 'A') {
                echo "QUESTÃO 05 - A <br/>";
            } else {
                echo "<span class='texto'>QUESTÃO 05 - $pergunta5</span></br>";
            } 
        ?>
        <br/>
        <a href="index.php">Voltar</a>
        </div>
    </body>
</html>