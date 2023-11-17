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
                    <li class="nav-item"><a href="" class="px-3 fw-bold">Перелёты</a></li>
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
            <a href="index.php">Главная -</a><a href=""> Перелёты</a>
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
                </div>
                <div class="carousel-inner  bg-black it" bis_skin_checked="1">
                    <div class="carousel-item active it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="font.svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                            <div class="carousel-caption text-start" bis_skin_checked="1">
                                <p><h1 class="opacity-100">Эконом перелёты.</h1></p>
                                <p class="opacity-75">
                                    Это наиболее доступный вариант перелета на ракете, обычно предлагающий минимальные услуги и комфорт.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Чартерные перелёты.</h1></p>
                            <p>Это специфический тип перелета, в котором пассажиры берут билеты на определенные даты и рейсы.</p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption text-end" bis_skin_checked="1">
                            <p><h1>Бизнес перелёты.</h1></p>
                            <p>Это класс, предназначенный для бизнес-путешественников, которые ищут комфорт и удобства, такие как дополнительное пространство и связь для работы и доступ к бизнес-классу на космодроме.</p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption" bis_skin_checked="1">
                            <p><h1>Люкс перелёты.</h1></p>
                            <p>Этот класс предлагает наиболее роскошные услуги и комфорт, включая большие и удобные кресла, дополнительное пространство для работы, доступ к бизнес-классу, более быстрой связи и другие дополнительные услуги.</p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item it" bis_skin_checked="1">
                        <svg class="bd-placeholder-img" width="100%" height="100%" ulr="img/Venera-e1543347318996 1 (1).png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-main-color)"></rect></svg>
                        <div class="container" bis_skin_checked="1">
                        <div class="carousel-caption text-start" bis_skin_checked="1">
                            <p><h1>Перелёты первого класса.</h1></p>
                            <p>Этот класс предлагает самый высокий уровень комфорта и услуг, включая наиболее роскошные кресла и отдельные каюты, дополнительное пространство для работы, максимальная скорость связи, доступ к бизнес-классу и другие дополнительные услуги.</p>
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
                <h2>Как же попасть на желаемую планету?</h2>
                <div class="earchimg">
                    <p class="w-50">
                        В первую очередь нужно определиться с желаемой планетой: изучить нынешнее предложения и станции на данной планете ну и куда без нынешенго процента тероформации. 
                        А так же стоит выбрать желаемый тариф от которого зависит ваше удобство во время полёта и до его начала. 
                    </p>
                    
                    <img src="img/MarsTransitionV.jpg" alt="" class="pb-3 w-50">
                </div>
            </div>

            <div class="how textA pb-5">
                <h2>Как проходит полёт?</h2>
                <p class="">
                    Для начала все пасажиры прибывают на лунную станцию, где ждут время своего вылета. А далее все зависит от рассотояния до выбранной вами планеты. До ближайших планет полёт проходит без криогенного стазиса, а в случае полета на отдаленные планеты нашей солнечной системы первые дни проходят без криогенного сна, а далее всех пасажиров помещают в криогенный сон и пробуждают за неделю до прибытия.
                </p>
            </div>

            <div class="stroenie textA pb-5">
                <h2>Внештатные ситуации</h2>
                <p class="w-50 pb-3">
                        Как и во время других полётов существуют риски, но все они максимально предусмотрены и в случае внештатных ситуаций существуют протоколы действий которые сохранят вас в безопасности, а в случае получения травм во время внештатных ситуаций предусмотрены компенсации которые вы сможете получить в ближейшем офисе "LIVESPACE" на вашей планете.
                </p>
                <img src="img/avrora.png" alt="">
            </div>

            <div class="earchh textA pb-5">
                <h2>Спутником земли является луна</h2>
                <div class="earchimg">
                    <p class="pb-3">Луна́ — единственный естественный спутник Земли. Самый близкий к Солнцу спутник планеты, так как у ближайших к Солнцу планет (Меркурия и Венеры) их нет. Второй по яркости[комм. 1] объект на земном небосводе после Солнца и пятый по величине
                        естественный спутник планеты Солнечной системы. Среднее расстояние между центрами Земли и Луны — 384 467 км (0,00257 а.е., ~30 диаметров Земли).
                    </p>
                    <img src="img/631px-FullMoon2010 1.png" alt="" width="100%">
                </div>
            </div>
        </div>

        <!-- ФОРМА ЗАКАЗА -->
        <div class="container pb-3">
            <div class="box text-white">
            <div class="form-del">
                <h2>Форма заказа перелёта</h2>

                <div class="w-75">
                <?php flash(); ?> 
                </div> 

                <form id="deliveryForm" action='do_delivery.php' method='post'>
                <?php if (!isset($_SESSION['user_id'])): ?>
                    <h3 class="alarm w-50 reds">Для заказа необходимо войти в учётную запись!</h3>
                <?php else: ?>
                    <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['user_id']; ?>">
                <?php endif; ?>

                <label for="tarif" class="fs-4 pt-2">Выберите тип перелета:</label><br>
                <select id="tarif" name="tarif" class="w-25">
                    <option value="эконом">Эконом класс</option>
                    <option value="чартер">Чартерный перелёт</option>
                    <option value="бизнес">Бизнес класс</option>
                    <option value="люкс">Люкс</option>
                    <option value="первый класс">Первый класс</option>
                </select><br>

                <label for="tarif" class="fs-4 pt-2">Выберите планету вылета:</label><br>
                <select id="planetL" name="planetL" class="w-25">
                    <option value="Меркурий">Меркурий</option>
                    <option value="Венера">Венера</option>
                    <option value="Земля">Земля</option>
                    <option value="Марс">Марс</option>
                    <option value="Калисто">Юпитер (калисто)</option>
                    <option value="Титан">Сатурн (Титан)</option>
                    <option value="Уран">Уран</option>
                    <option value="Нептун">Нептун</option>
                </select><br>

                <label for="tarif" class="fs-4 pt-2">Выберите планету для полёта:</label><br>
                <select id="planet" name="planet" class="w-25">
                    <option value="Меркурий">Меркурий</option>
                    <option value="Венера">Венера</option>
                    <option value="Земля">Земля</option>
                    <option value="Марс">Марс</option>
                    <option value="Калисто">Юпитер (калисто)</option>
                    <option value="Титан">Сатурн (Титан)</option>
                    <option value="Уран">Уран</option>
                    <option value="Нептун">Нептун</option>
                </select><br>

                <label for="deliveryAddress" class="fs-4 pt-2">Дата вылета:</label><br>
                <input type="date" id="date" name="date" class="w-25"><br>
                
                <?php if (!isset($_SESSION['user_id'])):?>
                    <p class="pt-2 pb-3"><a class="btn btn-lg btn-warning" href="#">Подтвердить</a></p>
                <?php else: ?>
                    <p class="pt-2 pb-3"><button type="submit" class="btn btn-lg btn-warning" href="#">Подтвердить</button></p>
                <?php endif; ?>
                </form>
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