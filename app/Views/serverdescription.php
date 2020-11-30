<!DOCTYPE html>
<html lang="en">

<!-- git push -u origin master -->

<head>
    <script src="https://kit.fontawesome.com/1e40cacd1c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Perai</title>
</head>

<body>
    <div class="container">
        <header>
            <a href="/homepage">
                <div>Perai</div>
            </a>
            <a class="sair" href="/logout">Sair</a>
        </header>
        <div class="nav">
            <nav>
                <ul class="servers">
                    <li>
                        <a href="/addserver">
                            <div class="circle add"><i></i></div>
                        </a>
                    </li>
                </ul>
            </nav>
            <hr />
        </div>
        <main>
            <div class="title-container">
                <div class="title-section">
                    <a href="/addserver"><i class="fas fa-arrow-left"></i></a>
                    <p>Javascript</p>
                    <input type="text">
                    <i></i>
                </div>
            </div>

            <div class="channel-container">

                <div class="channel-lesson">
                    <div class="channel-content">
                        <div>
                            <p>Veja na sala de aula Javascript todos os conceitos dessa linguagem de programação, para
                                que o
                                aluno tenho formação completa em nosso curso, revisando todas as partes que aprendeu na
                                aula. Neste curso de JavaScript aprenderemos conceitos básicos e as principais funções
                                dessa linguagem. Para isso usaremos um formulário de pedidos para uma pizzaria, no qual
                                será possível adicionar os sabores de pizza que desejamos comprar. Outra funcionalidade
                                que veremos é o envio do formulário, pois este pedido precisa ser encaminhado para o
                                servidor. Criaremos essa aplicação utilizando apenas JavaScript, sem nenhum framework.
                            </p>
                            <br />
                            <p>Neste curso de JavaScript aprenderemos conceitos básicos e as principais funções dessa
                                linguagem. Para isso usaremos um formulário de pedidos para uma pizzaria, no qual será
                                possível adicionar os sabores de pizza que desejamos comprar. Outra funcionalidade que
                                veremos é o envio do formulário, pois este pedido precisa ser encaminhado para o
                                servidor. Criaremos essa aplicação utilizando apenas JavaScript, sem nenhum framework.
                            </p>
                            <video controls>
                                <source src="https://youtu.be/q6ULdD4FeNk" type="video/mp4">
                            </video>

                        </div>
                        <button class="entrar" onclick="joinServer()">Entrar</button>

                    </div>
                </div>

                <div class="comment-section">
                    <form action="">
                        <label for="">Comentários</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </form>
                </div>
            </div>


        </main>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>