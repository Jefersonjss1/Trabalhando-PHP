<?php
    if(isset($_POST['submit'])) {
        print_r($_POST['nome']);
        print_r('<br');
        print_r($_POST['email']);
        print_r('<br');
        print_r($_POST['telefone']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="box">
        <form action="pagina.php" method="POST">
            <fieldset>
                <legend>
                    <strong>Realize o seu cadastro.</strong>
                </legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome Completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">E-mail</label>
                    <input type="text" name="email" id="email" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha</label>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>
                <br><br>
                <p>Gênero</p>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <br>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <br>
                <label for="outros">Outros</label>
                <input type="radio" name="genero" id="outros" value="outros" required>
                <br><br>
                <label for="data_nascimento"><strong>Data de Nascimento<strong></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <input type="text" id="cidade" name="cidade" class="inputUser" required>
                <div class="input-box">
                    <br><br>
                    <label for="cidade" class="labelInput">Cidade</label>
                    <div class="input-box">
                        <input type="text" id="cidade" name="cidade" class="inputUser" required>
                    </div>
                    <br>
                    <div class="input-box">
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <input type="text" id="estado" name="estado" class="inputUser" required>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>