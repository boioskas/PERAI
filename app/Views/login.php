<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1e40cacd1c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login</title>
</head>

<body>

    <?php if (session()->get('Sucesso')): ?>
        <div>
            <p><?= session()->get('Sucesso') ?></p>
        </div>
    <?php endif; ?>

    <div class="login">
        <div class="form">
            <form action="/" class="login-form" method="POST">
            
                <i class="fas fa-user-circle"></i>
                <input type="text" class="user-input" placeholder="Email" name="email_usuario" id="email_usuario" value="<?= set_value('email_usuario') ?>">
                <input type="password" class="user-input" placeholder="Senha" name="senha_usuario" id="senha_usuario">
                <div class="options-01">
                    <label for="" class="remember-me"><input type="checkbox">Lembrar de mim</label>
                    <a href="#">Esqueceu sua senha?</a>
                </div>

                <button type="submit" class="btn">ENTRAR</button>
                
                <?php if (isset($validation)): ?>
                <div style=""class="backgroundcc">
                        <?= $validation->listErrors() ?>
                </div>
                <?php endif; ?>

                <div class="options-02">
                    <p>Não possui conta?</p> <a href="/register" >Cadastre-se</a>
                </div>

            </form>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
    <?php?>
</body>

</html>