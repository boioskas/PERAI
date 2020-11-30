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
                    <a href="/server"><i class="fas fa-arrow-left"></i></a>
                    <p>Javascript</p>
                    <input type="text">
                    <a onclick="handleTitleSearchButton()"><i class="fas fa-search search"></i></a>
                </div>
            </div>

            <div class="channel-container-home">
                <a href="/iniciante">
                    <div class="channel">
                        <p>Introdução</p>
                        <div class="line"></div>
                        <div class="description">
                            <p>Ao longo do curso desenvolvemos uma lista de pedidos para um website chamado Hello Pizza.
                                Nesta lista será possível escolher as quantidades de cada sabor de pizza a serem
                                compradas.
                            </p>
                        </div>
                    </div>
                </a>
                <div class="channel">
                    <p>Manipulando Elementos</p>
                    <div class="line"></div>
                    <div class="description">
                        <p>Um desenvolvedor JavaScript precisa entender como manipular elementos do HTML para tornar as
                            páginas mais dinâmicas e interativas para o usuário. Nesta aula será dado o passo inicial
                            para a manipulação desses elementos.
                        </p>
                    </div>
                </div>
                <div class="channel">
                    <p>Executando o código</p>
                    <div class="line"></div>
                    <div class="description">
                        <p>Até agora testamos o código JavaScript no console. Em um ambiente real devemos salvar este
                            código em um arquivo e hospedá-lo em um servidor, assim o navegador do cliente poderá fazer
                            o download destes arquivos possibilitando a visualização da página.
                        </p>
                    </div>
                </div>
                <div class="channel">
                    <p>Tipos de dados</p>
                    <div class="line"></div>
                    <div class="description">
                        <p>A nossa aplicação depende da realização de cálculos para exibir o total que o cliente irá
                            pagar pela compra, mas para aprender a calcular valores é necessário entender o tipo string
                            que representa um texto e o tipo number que representa um número.
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>