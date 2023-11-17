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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lifespace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css"></head>

<body>

    <header class="bg-black w-100 pb-5 pt-3">
        <div class="container">
            <nav class="nav pb-1">
                <ul class="nav me-auto">
                    <li class="nav-item"><span><a href="index.php"><img src="img/LIVESPACE.png" alt=""></a></span></li>
                    <!--<li class="nav-item"><a href="index.php" class="px-3 fw-bold" >Планеты </a></li>-->
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
            <a href="index.php">Главная </a> - <a href="">История</a>
        </div>
    </header>


    <!-- возможно к переносу на основную странницу -->
    <section class="section-timer pb-5">
        <div class="container">
            <div class="launch__timer  center">
                <div class="timer">
                    <div class="timer__block">
                        <span id="days">12</span> дней
                    </div>
                    <div class="timer__block">
                        <span id="hours">20</span> часов
                    </div>
                    <div class="timer__block">
                        <span id="minutes">56</span> минут
                    </div>
                    <div class="timer__block">
                        <span id="seconds">20</span> секунд
                    </div>
                </div>
                <h4 class="">Столько времени осталось до взлёта ракеты SpaceX</h4>
            </div>
        </div>
    </section>

    <main class="container pb-5">
        <div class="w-75 mx-auto">
            <div class="pt-3 pb-3">
                Прототип Starship — ракеты Илона Маска для полетов на Марс и Луну — впервые успешно приземлился. Когда стихли аплодисменты, он взорвался
            </div>
            <div class="pt-3 pb-3">
                <img src="img/rocket.jpeg" alt="" width="100%">
            </div>

            <p class="pt-3 pb-3">
                Прототип космического корабля Starship, разработанного компанией SpaceX Илона Маска для полетов на Марс и Луну, впервые приземлился в ходе летных испытаний, прошедших в Бока-Чика в Техасе 3 марта (в ночь на 4 марта по Москве).
            </p>
            <div class="pt-3 pb-3">
                <iframe width="100%" height="420" src="https://www.youtube.com/embed/ODY6JWzS8WU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="pt-3 pb-3">
                Десятый серийный испытательный аппарат Starship SN10 в этот день пытались запустить дважды. Но первый пуск остановили меньше чем за одну секунду до старта из-за слишком большой тяги одного из двигателей. Старт отложили, когда двигатели уже запустились.
            </p>
            <p class="pt-3 pb-3">
                После второго пуска испытательный аппарат успешно поднялся на высоту около 10 тысяч метров, после чего двигатели один за другим выключились, Starship перевернулся в горизонтальное положение и начал контролируемое падение. Затем ракета снова запустила
                двигатели, вернулась в вертикальное положение и в отличие от двух предыдущих испытаний, когда восьмой и девятый прототипы взорвались при ударе о землю, в этот раз Starship целым опустился на посадочную стойку и остался стоять, слегка накренившись.
            </p>
            <div class="pt-3 pb-3">
                <img src="img/tragectory.png" alt="" width="100%">
            </div>
            <p class="fw-light">
                Траекторию полета ракеты хорошо видно в коллаже фотографа Джека Бейера. Чтобы лучше увидеть снимок, нажмите на твит.
            </p>
            <p class="">
                Спустя восемь минут после посадки, когда специалисты SpaceX уже выключили прямую видеотрансляцию запуска, ракета взорвалась. Этот момент попал на запись камеры новостного проекта NASASpaceflight. Как пишет The New York Times, предполагается, что взрыв
                произошел из-за утечки топлива.
            </p>
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

    <script src="js/news.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>