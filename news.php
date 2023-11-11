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

    <header>
        <div class="containerr">
            <nav>
                <ul class="nav">
                    <li><span><a href="index.php"><img src="img/LIVESPACE.png" alt=""></a></span></li>
                    <li><a href="index.php">Планеты </a></li>
                    <li><a href="rockets.php">Ракеты</a></li>
                    <li><a href="news.php">новости</a></li>
                </ul>
                <ul class="nav">
                    <?php if (!isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link link-body-emphasis px-2 text-white fw-bold">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a href="registration.php" class="nav-link link-body-emphasis px-2 text-white fw-bold">Регистрация</a>
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
        </div>
    </header>

    <SECTION class="container">
        <div class="main_lt">
            Прототип Starship — ракеты Илона Маска для полетов на Марс и Луну — впервые успешно приземлился. Когда стихли аплодисменты, он взорвался
        </div>
        <div class="mimage_1">
            <img src="img/rocket.jpeg" alt="">
        </div>

        <p class="main_tc">
            Прототип космического корабля Starship, разработанного компанией SpaceX Илона Маска для полетов на Марс и Луну, впервые приземлился в ходе летных испытаний, прошедших в Бока-Чика в Техасе 3 марта (в ночь на 4 марта по Москве).
        </p>
        <div class="mvid">
            <iframe width="875" height="520" src="https://www.youtube.com/embed/ODY6JWzS8WU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p class="main_t">
            Десятый серийный испытательный аппарат Starship SN10 в этот день пытались запустить дважды. Но первый пуск остановили меньше чем за одну секунду до старта из-за слишком большой тяги одного из двигателей. Старт отложили, когда двигатели уже запустились.
        </p>
        <p class="main_t">
            После второго пуска испытательный аппарат успешно поднялся на высоту около 10 тысяч метров, после чего двигатели один за другим выключились, Starship перевернулся в горизонтальное положение и начал контролируемое падение. Затем ракета снова запустила
            двигатели, вернулась в вертикальное положение и в отличие от двух предыдущих испытаний, когда восьмой и девятый прототипы взорвались при ударе о землю, в этот раз Starship целым опустился на посадочную стойку и остался стоять, слегка накренившись.
        </p>
        <div class="mimage_2">
            <img src="img/tragectory.png" alt="">
        </div>


        <p class="main_t">
            Траекторию полета ракеты хорошо видно в коллаже фотографа Джека Бейера. Чтобы лучше увидеть снимок, нажмите на твит.
        </p>
        <p class="main_t">
            Спустя восемь минут после посадки, когда специалисты SpaceX уже выключили прямую видеотрансляцию запуска, ракета взорвалась. Этот момент попал на запись камеры новостного проекта NASASpaceflight. Как пишет The New York Times, предполагается, что взрыв
            произошел из-за утечки топлива.
        </p>


    </SECTION>
    <section class="footer">
        <div class="row">
            <ul>
                <span><a href="index_up.php"><img src="img/LIVESPACE.png" alt=""></a></span>

                <li><a href="index_planets.php">Планеты </a></li>
                <li><a href="index_rockets.php">Ракеты</a></li>
                <li><a href="index_news.php">Новости</a></li>

                <div class="das">
                    <a href=""><img src="img/Vector (1).png" alt=""></a>
                    <a href=""><img src="img/telegram.png" alt=""></a>
                    <a href=""><img src="img/twitter.png" alt=""></a>
                    <a href=""><img src="img/email.png" alt=""></a>
                </div>
            </ul>
        </div>
    </section>

    <script src="js/news.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>