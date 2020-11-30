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
                    <p>Introdução</p>
                    <input type="text">
                    <a onclick="HandleArchiveDisplay()"><i class="far fa-file-archive"></i></a>

                </div>
            </div>

            <div class="channel-container">

                <div class="channel-lesson">
                    <div class="channel-content">
                        <div>
                            <p>Ao longo do curso desenvolvemos uma lista de pedidos para um website chamado Hello Pizza.
                                Nesta lista será possível escolher as quantidades de cada sabor de pizza a serem
                                compradas.</p>
                            <br />
                            <p>JavaScript e Java são similares em algumas coisas, mas são diferentes em outras. O
                                JavaScript assemelha-se ao Java, porém não possui tipagem estática e checagem rigída de
                                tipos como o Java. JavaScript segue a sintaxe básica do Java, convenções de nomenclatura
                                e construções de controle de fluxo, razões pelas quais esta linguagem foi renomeada de
                                LiveScript para JavaScript.
                            </p>
                            <br />
                            <p>
                                Em contraste com o sistema em tempo de compilação das classes construídas por
                                declarações no Java, JavaScript suporta um sistema em tempo de execução com base em um
                                pequeno número de tipos de dados representando valores numéricos, booleanos, e strings.
                                JavaScript tem um modelo de objeto baseado em protótipo em vez do modelo, mais comum, de
                                objeto baseado em classes. O modelo baseado em protótipo fornece herança dinâmica; isto
                                é, o que é herdado pode variar para objetos individuais. JavaScript também suporta
                                funções sem quaisquer requisitos especiais declarativos. As funções podem ser
                                propriedades de objetos, executando como métodos.
                            </p>
                            <br />
                            <p>
                                JavaScript é uma linguagem mais livre em comparação a Java. Você não tem de declarar
                                todas
                                as variáveis, classes e métodos. Você não tem que se preocupar com o fato dos métodos
                                serem
                                públicos, privados ou protegidos, e você não tem que implementar interfaces. Variáveis,
                                parâmetros e tipo de retorno da função não são explicitamente tipados.
                            </p>
                            <p>Java é uma linguagem de programação baseada em classes, projetada para execução rápida e
                                segurança de tipos. Segurança de tipo significa que, por exemplo, você não pode
                                converter um
                                número inteiro em Java para uma referência de objeto ou acessar a memória privada
                                corrompendo bytecodes Java. O modelo baseado em classes do Java significa que os
                                programas
                                são exclusivamente constituídos por classes e seus métodos. Herança de classe do Java e
                                tipagem forte geralmente requerem hierarquias de objetos fortemente acoplados. Esses
                                requisitos tornam a programação em Java mais complexa do que a programação em
                                JavaScript.</p>

                            <br />
                            <p>
                                Em contraste, JavaScript descende em espírito de uma linhagem de linguagens menores com
                                tipagem dinâmica, como HyperTalk e dBASE. Essas linguagens de script oferecem
                                ferramentas de
                                programação para um público muito mais amplo por causa de sua sintaxe mais fácil,
                                funções
                                especializadas embutidas e requisitos mínimos para a criação de objetos.
                            </p>


                        </div>

                    </div>
                    <div class="archive-container">
                        <div class="archive"></div>
                        <div class="archive"></div>
                        <div class="archive"></div>
                        <div class="archive"></div>
                        <div class="archive"></div>
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