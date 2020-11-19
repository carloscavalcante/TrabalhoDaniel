<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <title>Site de Votação</title>
</head>
<body>

    <form class="box" action="gravauser.php" method="POST">
        <h1>Insira seu CPF</h1>
        <input type="text" name="cpf" id="cpf" placeholder="111.111.111-11" onkeypress="formataCpf()"  maxlength="14" required autocomplete="off">

        <input type="submit" value="Entrar">
        

    </form>

    <script src="mask.js"></script>
</body>
</html>