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
    <body>
        <style>
            *{
                font-family: 'Ubuntu', sans-serif;
                margin-left: 10px;
                
            }

            .bloco{
                background: #add8e6;
                max-width: 1000px;
                margin-top: 5%;
                margin-left: auto;
                margin-right: auto;
                padding: 12px;
                border-radius: 6px;
            }

            h3{
                margin-left: 265px; 
            }

            #bt{
                background-color:#101652;
                height: 32px;
                border: none;
                color: white;
                border-radius: 5px;
                width:70px;
                margin-top: 10px;
            }
            li {
                list-style-type: none;
                }
        </style>
        <div class= "bloco">
        <h3>EXERCÍCIOS ANATOMIA: SISTEMA ESQUELÉTICO</h3>
        
        <form action="gabarito.php" method="get">
            <label for="p1">QUESTÃO 01 -Os ossos são órgãos do corpo humano responsáveis por diversas funções, EXCETO:</label>
    
            <ul>
                <li>
                    <input type="radio" name="pergunta1" id="a1" value="A"> a) Sustentação do corpo
                </li>
                <li>
                    <input type="radio" name="pergunta1" id="a2" value="B"> b) Reserva de vitaminas
                </li>
                <li>
                    <input type="radio" name="pergunta1" id="a3" value="C"> c) Proteção de órgãos internos
            </ul>
        

            <label for="p2">QUESTÃO 02 - O fêmur é um osso que possui como principal característica a resistência e o fato de ser um osso</label>
            <ul>
                <li>
                    <input type="radio" name="pergunta2" id="a1" value="A"> a) irregular
                </li>
                <li>
                    <input type="radio" name="pergunta2" id="a2" value="B"> b) sesamoide
                </li>
                <li>
                    <input type="radio" name="pergunta2" id="a3" value="C"> c) longo
                </li>
            </ul>

            <label for="p3">QUESTÃO 03 - O osso é uma estrutura viva e dinâmica capaz de se regenerar quando sofre uma fratura. Essa capacidade de regeneração está relacionada com</label>
            <ul>
                <li>
                    <input type="radio" name="pergunta3" id="a1" value="A"> a) A presença de medula óssea no interior no osso
                </li>
                <li>
                    <input type="radio" name="pergunta3" id="a2" value="B"> b) A disposição irregular das fibras de colágeno
                </li>
                <li>
                    <input type="radio" name="pergunta3" id="a3" value="C"> c) As atividades celulares no tecido ósseo


                </li>
            </ul>

            <label for="p4">QUESTÃO 04 - Os tendões apresentam as seguintes funções, EXCETO</label>
            <ul>
                <li>
                    <input type="radio" name="pergunta4" id="a1" value="A">a) Revestem as articulações ósseas
                </li>
                <li>
                    <input type="radio" name="pergunta4" id="a2" value="B">b) Amortecem o atrito entre ossos
                </li>
                <li>
                    <input type="radio" name="pergunta4" id="a3" value="C">c) Protegem algumas partes do corpo
                </li>
            </ul>

            <label for="p5">QUESTÃO 05 - De acordo com o seu formato, os ossos são comumente classificados em longos, curtos, planos, irregulares e sesamoides. Analisando as alternativas a seguir, marque aquela em que é citado um osso irregular.</label>
            <ul>
                <li>
                    <input type="radio" name="pergunta5" id="a1" value="A"> a) Vértebras.
                </li>
                <li>
                    <input type="radio" name="pergunta5" id="a2" value="B"> b) Tarso.
                </li>
                <li>
                    <input type="radio" name="pergunta5" id="a3" value="C"> c) Patela.
                </li>
            </ul>

            <input type="submit" value="Enviar" id="bt">
        </form>
        </div>
    </body>
</html>