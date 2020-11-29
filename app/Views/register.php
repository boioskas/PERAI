<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1e40cacd1c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Registre-se</title>
</head>

<body>
    <div class="login">
        <div class="form">
            <form action="/register" class="signup-form" method="POST">
                <i class=" fas fa-user-plus"></i>

                <input type="text" class="user-input" placeholder="Nome de usuário" name="nome_usuario" id="nome_usuario" value="<?= set_value('nome_usuario') ?>">
                <input type="text" class="user-input" placeholder="E-mail" name="email_usuario" id="email_usuario" value="<?= set_value('email_usuario') ?>">
                <input type="password" class="user-input" placeholder="Senha" name="senha_usuario" id="senha_usuario" value="<?= set_value('senha_usuario') ?>">
                <input type="password" class="user-input" placeholder="Confirmar Senha" name="confirmarsenha" id="confirmarsenha"  value="">
                
                <button type="submit" class="btn">Cadastrar</button>
                <div class="options-02">
                    <p>Já possui conta?</p> <a href="/">Entrar</a>
                </div>
                <?php if (isset($validation)): ?>
                <div class="">
                    <p>
                        <?= $validation->listErrors() ?>
                    </p>
                </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
    <?php?>
</body>

</html>