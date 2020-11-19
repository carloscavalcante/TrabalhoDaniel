<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="votacaostyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <title>Site de Votação</title>
</head>

<body>

    <form class="box" action="gravauservoto.php" method="GET">
        <h1>Escolha seu carro preferido:</h1>

        <div id="carros">
            <div id="civic">
                <label for="civic1" class="seletor">
                    <img src="imagens/civic.jpg" alt="Civic 2020" for="civic">
                    <p><input type="radio" name="radio" id="civic1" value="civic"> Civic 2020</p>
                    
                </label>
                </div>

                <div id="urus">
                    <label for="mustang1" class="seletor">
                        <img src="imagens/mustang.jpg" alt="Mustang GT">
                        <p><input type="radio" name="radio" id="mustang1" value="mustang" > Mustang GT</p>
                    </label>
                    
                </div>

            <div id="urus">
                <label for="urus1"
                class="seletor">
                    <img src="imagens/urus.jpg" alt="Urus">
                    <p><input type="radio" name="radio" id="urus1" value="urus"> Lamborghini Urus</p>
                </label>
                
            </div>

        </div>

        <input type="submit" value="Votar">


    </form>

    <script src="mask.js"></script>
</body>

</html>