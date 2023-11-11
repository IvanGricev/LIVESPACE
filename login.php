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
    <link rel="stylesheet" href="css/index.css">
</head>

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
    
    

    <div>

        <div class="w-25">
            <?php flash(); ?> 
        </div> 

        <form method="post" action="do_login.php" id="loginForm" class="w-50">
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Войти</button>
                <a class="btn btn-outline-primary" href="registration.php">Зарегистрироваться</a>
            </div>
        </form>

    </div>




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