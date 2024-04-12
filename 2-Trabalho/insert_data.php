<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$varsenha  = password_hash($_POST['senha'],PASSWORD_DEFAULT);

// Quando for no computador do IF
//$conexao = mysqli_connect("localhost","root","mysqluser","loginbd") or print (mysqli_error());

// Quando for no meu computador
$conexao = mysqli_connect("localhost","root","","loginbd") or print (mysqli_error());

if (!empty($nome) && !empty($email) && !empty($varsenha)) {
    $query = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome', '$email','$varsenha')";
    if (mysqli_query($conexao, $query)) {  
        header("Location: index.php?msg=OK");
    } else {
        header("Location: index.php?msg=ERRO");
    }
}
else {
    header("Location: cadastrar.php?msg=LOGIN_NULL");
}

?>
