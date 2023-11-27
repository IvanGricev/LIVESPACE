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
                    <!--<li class="nav-item"><a href="index.php" class="px-3 fw-bold" >Земля</a></li>-->
                    <li class="nav-item"><a href="flight_fares.php" class="px-3 fw-bold">Перелёты</a></li>
                    <li class="nav-item"><a href="news.php" class="px-3 fw-bold">История</a></li>
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
            <a href="index.php">Главная</a>
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
                                <p><a class="btn btn-lg btn-warning" href="https://en.wikipedia.org/wiki/Mercury_(planet)">Больше</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Венера.</h1></p>
                            <p>Вторая по удалённости от Солнца и шестая по размеру планета Солнечной системы.</p>
                            <p><a class="btn btn-lg btn-warning" href="https://en.wikipedia.org/wiki/Venus">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption text-end" bis_skin_checked="1">
                            <p><h1>Земля.</h1></p>
                            <p>Третья по удалённости от Солнца планета Солнечной системы.</p>
                            <p><a class="btn btn-lg btn-warning" href="https://en.wikipedia.org/wiki/Earth">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Марс.</h1></p>
                            <p>Четвёртая по удалённости от Солнца и седьмая по размеру планета Солнечной системы.</p>
                            <p><a class="btn btn-lg btn-warning" href="https://en.wikipedia.org/wiki/Mars">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption text-start" bis_skin_checked="1">
                            <p><h1>Юпитер.</h1></p>
                            <p>Пятая планета от Солнца и самая большая в Солнечной системе.</p>
                            <p><a class="btn btn-lg btn-warning" href="https://en.wikipedia.org/wiki/Jupiter">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Сатурн.</h1></p>
                            <p>Шестая планета от Солнца и вторая по размерам планета в Солнечной системе после Юпитера.</p>
                            <p><a class="btn btn-lg btn-warning" href="https://en.wikipedia.org/wiki/Saturn">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption  text-end" bis_skin_checked="1">
                            <p><h1>Уран.</h1></p>
                            <p>Седьмая планета Солнечной системы, третья по диаметру и четвёртая по массе.</p>
                            <p><a class="btn btn-lg btn-warning" href="https://en.wikipedia.org/wiki/Uranus">Больше</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Нептун.</h1></p>
                            <p>Восьмая и самая дальняя от Солнца и Земли планета Солнечной системы.</p>
                            <p><a class="btn btn-lg btn-warning" href="https://en.wikipedia.org/wiki/Neptune">Больше</a></p>
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
                <h2>Земля - домашний мир</h2>
                <div class="earchimg">
                    <img src="img/EF0D0797-AF75-43E5-9357-D9327915E56D_w1023_s 2.png" alt="" class="pb-3">
                    <p class="w-50">Земля́ — третья по удалённости от Солнца планета Солнечной системы. Самая плотная, пятая по диаметру и массе среди всех планет и крупнейшая среди планет земной группы, в которую входят также Меркурий, Венера и Марс. Единственное известное
                        человеку в настоящее время тело Солнечной системы в частности и Вселенной вообще, населённое живыми организмами.</p>
                </div>
            </div>

            <div class="how textA pb-5">
                <h2>Хотите улететь с земли?</h2>
                <p class="">Человечество в давних времен хочер бороздить космическое пространство и колонизировать планеты. И у нас наконец-то появилась такая возможность!
                Наша компания готова предложить большой выбор перелетов и планет, которые вы можете посетить. У нас есть множество опций по удобствам которые мы уже готовы вам предложить. 
                Наши корабли доставят вас до желаемой планеты в кротчайшие сроки и в комфортных условиях.   
                </p>
            </div>
        <!--
            <div class="stroenie textA pb-5">
                <h2> Cтроение Земли</h2>
                <p class="w-50 pb-3">
                    Земля относится к планетам земной группы, и в отличие от газовых гигантов, таких как Юпитер, имеет твёрдую поверхность. Это крупнейшая из четырёх планет земной группы в Солнечной системе, как по размеру, так
                    и по массе. Кроме того, Земля среди этих четырёх планет имеет наибольшие плотность, поверхностную гравитацию и магнитное поле[83]. Это единственная известная планета с активной тектоникой плит.
                </p>
                <img src="img/shear_properties_of_inner_core_by_j_waves_1_703 2.png" alt="">
            </div>
        -->
            <div class="earchh textA pb-5">
                <h2>Перевалочный пункт</h2>
                <div class="earchimg" width="50%">
                    <p>Луна́ — единственный естественный спутник Земли. Среднее расстояние между центрами Земли и Луны — 384 467 км (0,00257 а.е., ~30 диаметров Земли).                    </p> 
                    <p class="pb-3"> Именно здесь происходят пересадки с шатлов на более крупные корабли для межпланетных перелётов.</p>

                    <img src="img/631px-FullMoon2010 1.png" alt="" >
                </div>
            </div>
        </div>

    </main>

    <footer class="container pb-3">
        <div class="nav">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="index.php"><img src="img/LIVESPACE.png" alt=""></a></li>
                <!--<li class="nav-item pl-3"><a href="planets.php" class="px-2">Планеты </a></li>-->
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