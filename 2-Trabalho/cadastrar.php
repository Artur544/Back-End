<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0e0ac8af13.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Cadastro</title>
</head>
    <body>

    <?php
        if(!empty($_GET['msg'])) {
            if($_GET['msg'] == "LOGIN_NULL") {
    ?>
        <div class="msg-alertas">

            <span class="ms alerta"><i class="fa-solid fa-triangle-exclamation"></i> Preencha todos os campos!</span>

        </div>

    <?php
            }
        } else {
            unset($_GET['msg']);
        }
    ?>

        <div class="conteudo">
            <h1>Faça seu cadastro!</h3>

            <form action="insert_data.php" method="post">
                <div class="form">

                    <div class="div-input">
                        <label for="cad-nome">Nome:</label>
                        <input class="input" type="text" name="nome" id="cad-nome" placeholder="Digite seu nome">
                    </div>

                    <div class="div-input">
                        <label for="cad-email">Email:</label>
                        <input class="input" type="text" name="email" id="cad-email" placeholder="Digite seu e-mail">
                    </div>

                    <div class="div-input">
                        <label for="cad-senha">Senha:</label>
                        <input class="input" type="password" name="senha" id="cad-senha" placeholder="Digite sua senha">
                    </div>

                    <input class="botao" type="submit" name="submit" value="Cadastrar">

                    <a href="index.php">Já possui uma conta? Entre agora!</a>
                </div>                
            </form>
        </div>
    </body>
</html>