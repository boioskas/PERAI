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
                </div>
            </div>

            <div class="channel-container">

                <div class="channel-lesson">
                    <div class="channel-content">
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mus lacus, ex risus cras quisque
                                mattis vivamus porttitor libero, torquent placerat imperdiet nibh varius congue tempor
                                cubilia. Felis accumsan molestie ultrices class et dui eros turpis nibh etiam, fusce
                                sagittis nam tincidunt efficitur duis ante cursus eget, justo pellentesque elit
                                elementum
                                dis consectetur dolor condimentum netus. Litora penatibus orci platea morbi laoreet
                                pharetra
                                per duis, egestas gravida quisque conubia ridiculus dolor porta, curae euismod
                                suspendisse
                                placerat felis donec iaculis. Commodo suspendisse odio penatibus eros tristique torquent
                                gravida bibendum sem, euismod enim dictum nunc nisi risus dictumst aenean, accumsan dui
                                sociosqu eleifend primis est vivamus himenaeos. Neque pretium porta senectus maximus
                                magna
                                pulvinar aenean parturient tristique, tellus molestie accumsan vel at velit curae.
                                Ullamcorper quisque nisl justo sed dolor eros quam tellus, eleifend mi vel sagittis
                                pharetra
                                montes cursus efficitur, inceptos cubilia rhoncus et eget lectus fermentum. Odio
                                suscipit
                                accumsan proin eros erat sit rhoncus suspendisse, eleifend ridiculus consequat quam
                                rutrum
                                conubia est tempor posuere, etiam faucibus tortor class ultricies turpis habitasse.</p>
                        </div>
                        <button onclick="joinServer()">Entrar</button>

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
    <?php?>
</body>

</html>