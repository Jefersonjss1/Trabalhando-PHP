<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="./telalogin.css">
</head>
<body>
    <div class="box">
        <h1>Login</h1>
        <form action="testarlogar.php" method="POST">
            <input type="text" name="email" placeholder="E-mail" class="inputUser">
            <br><br>
            <input type="password" name="senha" placeholder="Senha" class="inputUser">
            <br><br>
            <input class="btn" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>