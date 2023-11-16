<?php
require_once __DIR__.'/config.php';

$user = null;

    if (check_auth()) {
        // Получим данные пользователя по сохранённому идентификатору
        $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $stmt->execute(['email' => $_SESSION['user_id']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <header class="bg-black w-100 pb-5 pt-3">
        <div class="container">
            <nav class="nav pb-1">
                <ul class="nav me-auto">
                    <li class="nav-item"><span><a href="index.php"><img src="img/LIVESPACE.png" alt=""></a></span></li>
                    <li class="nav-item"><a href="index.php" class="px-3 fw-bold" >Планеты </a></li>
                    <li class="nav-item"><a href="flight_fares.php" class="px-3 fw-bold">Перелёты</a></li>
                    <li class="nav-item"><a href="news.php" class="px-3 fw-bold">новости</a></li>
                </ul>
                <ul class="nav">
                    <?php if (!isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link px-2 text-white fw-bold">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a href="registration.php" class="nav-link px-2 text-white fw-bold">Регистрация</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <div class="userID pt-2 "><?php echo $_SESSION['user_id'] ?></divs>
                    </li>
                    <li class="nav-item">
                        <a href="do_logout.php" class="nav-link link-body-emphasis px-2 text-white fw-bold">Выход</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <a href="index.php">Главная </a>-<a href="mercury.php"> Меркурий</a>
        </div>
    </header>
    
    <main class="container">

        <div class="container  bg-black">
            <div id="myCarousel" class="carousel slide mb-6  bg-black pt-5 pb-5" data-bs-ride="carousel" bis_skin_checked="1">
                <div class="carousel-indicators  bg-black" bis_skin_checked="1">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
                </div>
                <div class="carousel-inner  bg-black it" bis_skin_checked="1">
                    <div class="carousel-item active it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="font.svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                            <div class="carousel-caption text-start" bis_skin_checked="1">
                                <p><h1 class="opacity-100">Меркурий.</h1></p>
                                <p class="opacity-75">Ближайшая к солнцу планета в солнечной системы наименьшая из планет земной группы.</p>
                                <p><a class="btn btn-lg btn-warning" href="mercury.php">Больше</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Венера.</h1></p>
                            <p>Вторая по удалённости от Солнца и шестая по размеру планета Солнечной системы.</p>
                            <p><a class="btn btn-lg btn-warning" href="venuce.php">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption text-end" bis_skin_checked="1">
                            <p><h1>Земля.</h1></p>
                            <p>Третья по удалённости от Солнца планета Солнечной системы.</p>
                            <p><a class="btn btn-lg btn-warning" href="index.php">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Марс.</h1></p>
                            <p>Четвёртая по удалённости от Солнца и седьмая по размеру планета Солнечной системы.</p>
                            <p><a class="btn btn-lg btn-warning" href="mars.php">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption text-start" bis_skin_checked="1">
                            <p><h1>Юпитер.</h1></p>
                            <p>Пятая планета от Солнца и самая большая в Солнечной системе.</p>
                            <p><a class="btn btn-lg btn-warning" href="jupiter.php">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Сатурн.</h1></p>
                            <p>Шестая планета от Солнца и вторая по размерам планета в Солнечной системе после Юпитера.</p>
                            <p><a class="btn btn-lg btn-warning" href="saturn.php">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption  text-end" bis_skin_checked="1">
                            <p><h1>Уран.</h1></p>
                            <p>Седьмая планета Солнечной системы, третья по диаметру и четвёртая по массе.</p>
                            <p><a class="btn btn-lg btn-warning" href="uran.php">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Нептун.</h1></p>
                            <p>Восьмая и самая дальняя от Солнца и Земли планета Солнечной системы.</p>
                            <p><a class="btn btn-lg btn-warning" href="neptune.php">Больше</a></p>
                        </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущая</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующая</span>
                </button>
            </div>

        </div>
        <div>
            <div class="earch textA">
                <h2>Меркурий</h2>
                <div class="earchimg">
                    <img src="img/mercury.jpg" alt="" class="pb-3 w-50">
                    <p class="w-50">
                        Меркурий — это вторая по удалённости от Солнца планета Солнечной системы. Самая маленькая по диаметру и массе среди всех планет и наименее плотная, вторым по величине телом в земной группе планет, после Земли. В эту группу также входят Венера и Марс. Меркурий не имеет атмосферы, вместо этого он обладает тонкой экзосферой, состоящей из атомов, выброшенных на поверхность солнечным ветром и ударяющихся метеороидов. Экзосфера Меркурия в основном состоит из кислорода, натрия, водорода, гелия и калия.
                    </p>
                </div>
            </div>

            <div class="how textA pb-5">
                <h2>Как Меркурий образовался?</h2>
                <p class="">Меркурий, как и другие планеты Солнечной системы, образовался из большого облака межзвёздной пыли и газа, известного как солнечная туманность. Это облако состояло главным образом из водорода и гелия, которые образовались после Большого взрыва, и более тяжёлых элементов, оставленных взрывами сверхновых.</p>
            </div>

            <div class="stroenie textA pb-5">
                <h2> Cтроение Меркурия</h2>
                <p class="w-50 pb-3">
                Меркурий относится к планетам земной группы, и, как и Земля, имеет твердую поверхность. Это вторая по размеру и массе планета в Солнечной системе, уступая только Земле. Меркурий, как и Земля, имеет активную тектонику плит, хотя и не так активную, как у Земли.
                </p>
                <img src="img/mercuryCon.png" alt="">
            </div>

            <div class="earchh textA pb-5">
                <h2>Меркурий - планета без спутников</h2>
                <div class="earchimg">
                    <p class="pb-3">Меркурий не имеет естественных спутников из-за своего маленького размера, слабой гравитации и близости к Солнцу                     </p>
                    <!--<img src="img/631px-FullMoon2010 1.png" alt="" width="100%">-->
                </div>
            </div>
        </div>
    </main>

    <footer class="container pb-3">
        <div class="nav">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="index.php"><img src="img/LIVESPACE.png" alt=""></a></li>
                <li class="nav-item pl-3"><a href="planets.php" class="px-2">Планеты </a></li>
                <li class="nav-item pl-3"><a href="flight_fares.php" class="px-2">Перелёты</a></li>
                <li class="nav-item pl-3"><a href="news.php" class="px-2">История</a></li>
            </ul>
            <ul class="nav ml-3">
                <li class="nav-item"><a href="" class="px-2"><img src="img/Vector (1).png" alt=""></a></li>    
                <li class="nav-item"><a href="" class="px-2"><img src="img/telegram.png" alt=""></a></li>    
                <li class="nav-item"><a href="" class="px-2"><img src="img/twitter.png" alt=""></a></li>    
                <li class="nav-item"><a href="" class="px-2"><img src="img/email.png" alt=""></a></li>    
            </ul>
        </div>
    </footer>

    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>