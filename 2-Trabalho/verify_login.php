<?php
session_start();

$nome_email = $_POST['nome-email'];
$varsenha  = $_POST['senha'];

// Quando for no computador do IF
//$conexao = mysqli_connect("localhost","root","mysqluser","loginbd") or print (mysqli_error());

// Quando for no meu computador
$conexao = mysqli_connect("localhost","root","","loginbd") or print (mysqli_error());

$query = "SELECT * FROM usuarios WHERE nome='$nome_email' or email='$nome_email'";

if ($result=mysqli_query($conexao, $query)) {

  $linha = mysqli_fetch_array($result);

  if(!empty($linha)){
    $hashed_senha = $linha['senha'];
    if(password_verify($varsenha, $hashed_senha)) {
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['code'] = $linha['code'];
        header("Location: home.php");
    }else{
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['code']);
        header("Location: index.php?msg=LOGIN_ERROR");

    }
  }else{
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['code']);
    echo "error  linha";
    header("Location: index.php?msg=LOGIN_NULL");
  }
    //header("Location: login.php?msg=OK");
} else {
    header("Location: index.php?msg=ERROR");
}
?>