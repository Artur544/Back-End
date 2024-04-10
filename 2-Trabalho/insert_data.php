<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$varsenha  = password_hash($_POST['senha'],PASSWORD_DEFAULT);
 
$conexao = mysqli_connect("localhost","root","mysqluser","loginbd") or print (mysqli_error());

$query = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome', '$email','$varsenha')";

if (mysqli_query($conexao, $query)) {  
    header("Location: index.php?msg=OK");
} else {
    header("Location: index.php?msg=ERRO");
}

?>
