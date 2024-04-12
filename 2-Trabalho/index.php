<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/0e0ac8af13.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Formulário de Login</title>
    </head>

    <body>

    <?php
        if(!empty($_GET['msg'])) {
            if ($_GET['msg'] == "OK") {
    ?>

                <div class="msg-alertas">

                    <span class="ms ok"><i class="fa-solid fa-check"></i> Cadastro realizado com sucesso!</span>

                </div>

    <?php
            } else if($_GET['msg'] == "LOGIN_ERROR") {
    ?>

                <div class="msg-alertas">

                    <span class="ms erro"><i class="fa-solid fa-xmark"></i> Nome, e-mail ou senha incorreto!</span>

                </div>

    <?php
            } else if($_GET['msg'] == "LOGIN_NULL"){
    ?>

                <div class="msg-alertas">

                    <span class="ms alerta"><i class="fa-solid fa-triangle-exclamation"></i> Preencha todos os campos!</span>

                </div>

    <?php
            } else {
    ?>

                <div class="msg-alertas">

                    <span class="ms info"><i class="fa-solid fa-circle-info"></i> Não foi possível se conectar no banco.</span>

                </div>

    <?php
            }
            unset($_GET['msg']);
        }  
    ?>

        <div class="conteudo">
            <h1>Entre na sua conta!</h3>

            <form action="verify_login.php" method="post">
                <div class="form">

                    <div class="div-input">
                        <label for="nome-email">Usuário:</label>
                        <input class="input" type="text" name="nome-email" id="nome-email" placeholder="Seu nome ou e-mail">
                    </div>

                    <div class="div-input">
                        <label for="senha">Senha:</label>
                        <input class="input" type="password" name="senha" id="senha" placeholder="Digite sua senha">
                    </div>

                    <input class="botao" type="submit" name="submit" value="Entrar">

                    <a href="cadastrar.php">Não possui ainda uma conta? Cadastre-se já!</a>
                </div>                
            </form>
        </div>
    </body>
</html>