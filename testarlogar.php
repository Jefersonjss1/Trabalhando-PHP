<?php
session_start();
if(isset($_POST['submit'])) {
    include_once("config.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('E-mail: ' . $email);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "select * from tbformulariocadastro where email = '$email' and senha = '$senha'";
    $result = $con->query($sql);

    // print_r($sql);
    // print_r($result);

    if(mysqli_num_rows($result) < 1) {
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('Location: login.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: homedosistema.php');
    }
}
else {
    header('Location: login.php');
}

?>