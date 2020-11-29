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
                <a class="sair" href="/logout">Sair</a>
            </a>
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
                        <p>Iniciantes</p>
                        <div class="line"></div>
                        <div class="description">
                            <p>Um texto ai bora escrever porque tudo que vai pro D&D nao volta po Cthulhu ele sai volta
                                bate fica volta vai e volta denovo mas isso tuo fica no DUngeons Worlds é , É ISSO AI
                            </p>
                        </div>
                    </div>
                </a>
                <div class="channel">
                    <p>Intermediarios</p>
                    <div class="line"></div>
                    <div class="description">
                        <p>Aqui você ja consegue fazer umas jogatinas de Magic boladas, abandonando os pokemons e os
                            deuses do egipcio para entrar nesse magnifico mundo magico de valorant
                        </p>
                    </div>
                </div>
                <div class="channel">
                    <p>Avançados</p>
                    <div class="line"></div>
                    <div class="description">
                        <p>Chegamos no nivel hard, se você conseguir sobrevier aqui pde ter certeza que platinar dark
                            souls vai ser izi izi para você, isso aqui é hardicori
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./assets/js/script.js"></script>
    <?php?>
</body>

</html>