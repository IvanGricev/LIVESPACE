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

<header class="bg-black w-100 pb-5 pt-3">
        <div class="container">
            <nav class="nav pb-1">
                <ul class="nav me-auto">
                    <li class="nav-item"><span><a href="index.php"><img src="img/LIVESPACE.png" alt=""></a></span></li>
                    <!--<li class="nav-item"><a href="index.php" class="px-3 fw-bold" ></a></li>-->
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
            <a href="index.php">Главная </a> - <a href="">Регистрация</a>
        </div>
    </header>
    
    

    <div class="w-50 container pb-5 h-100">
        <h2 class="mb-3">Регистрация</h2>

        <div class="w-50">
            <?php flash(); ?> 
        </div> 

        <form method="post" action="do_register.php" id="signupForm">
            <div class="mb-3 w-50">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3 w-50">
            <label for="password" id="password1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 w-50">
            <label class="form-label">Повторите пароль</label>
            <input type="password" class="form-control" id="password2" name="password2" required>
            </div>

            <button type="submit" class="btn btn-warning">Зарегистрироваться</button>
        </form>
    </div>


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