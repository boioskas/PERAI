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
                    <p>Servidores</p>
                    <input type="text">
                    <a onclick="handleTitleSearchButton()"><i class="fas fa-search search"></i></a>
                </div>
            </div>

            <div class="channel-container-home">
                <a href="/serverdescription">
                    <div class="channel">
                        <p>JavaScript</p>
                        <div class="line"></div>
                        <div class="description">
                            <p>Vem ca amiguinho, vamo te ensinar uns javascript bolado aqui, pode ter certeza, você vai
                                sair daqui sabendo tudo do ES7 e mais um pouco, pode vir hheheheheehehehehehe
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </main>
    </div>
    <script src="./assets/js/script.js"></script>
    <?php?>
</body>

</html>