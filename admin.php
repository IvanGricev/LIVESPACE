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
                    <!--<li class="nav-item"><a href="index.php" class="px-3 fw-bold" >Планеты </a></li>-->
                    <li class="nav-item"><a href="flight_fares.hph" class="px-3 fw-bold">Перелёты</a></li>
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
                        <div class="userID pt-2 "><?php echo $_SESSION['user_id'] ?></div>
                    </li>
                    <li class="nav-item">
                        <a href="do_logout.php" class="nav-link link-body-emphasis px-2 text-white fw-bold">Выход</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <a href="index.php">Главная </a> - <a href="">Войти</a>
        </div>
    </header>

<div class="d-inline-flex container">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white pt-3" style="width: 280px;" bis_skin_checked="1">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Панель рабочего</span>

        <!--<a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none"></a>-->
        <hr>
        
        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="https://app.jivo.ru/chat/inbox" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Поддрежка
                </a>
            </li>
            <li>
                <a href="?table=orders" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Заказы
                </a>
            </li>
            <li>
                <a href="?table=users" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Клиенты
                </a>
            </li>
        </ul>  
        <hr>
        <div class="dropdown" bis_skin_checked="1">
            <div>
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong><?php echo $_SESSION['user_id'] ?></strong>
            </div>
        </div>
    </div>
    <div class="container">
   <div class="h1 mt-3">Информация из базы данных</div>
       <?php flash(); ?> 
       <div class="dbase">
       <?php
           $table = isset($_GET['table']) ? $_GET['table'] : 'orders';
           $sortColumn = isset($_GET['sort']) ? $_GET['sort'] : 'id';
           $sortOrder = isset($_GET['order']) && $_GET['order'] === 'desc' ? 'DESC' : 'ASC';

           if ($table === 'users') {
               $sql = "SELECT email, admin, id FROM Users ORDER BY $sortColumn $sortOrder";
               if ($result = $pdo->query($sql)) {
                  echo "<table><tr>";
                  echo "<th><a href='?sort=id&order=" . ($sortColumn === 'id' && $sortOrder === 'ASC' ? 'desc' : 'asc') . "'>Id</a></th>";
                  echo "<th><a href='?sort=email&order=" . ($sortColumn === 'email' && $sortOrder === 'ASC' ? 'desc' : 'asc') . "'>Email</a></th>";
                  echo "<th><a href='?sort=admin&order=" . ($sortColumn === 'admin' && $sortOrder === 'ASC' ? 'desc' : 'asc') . "'>Admin</a></th>";
                  echo "</tr>";
                  foreach ($result as $row) {
                      echo "<tr>";
                      echo "<td>" . $row["id"] . "</td>";
                      echo "<td class='ml-1'>" . $row["email"] . "</td>";
                      echo "<td>" . $row["admin"] . "</td>";
                      echo "</tr>";
                  }
                  echo "</table>";
                  die;
               } else {
                  echo "Ошибка: ";
               }
           }
           elseif ($table === 'orders') {
               $sql = "SELECT email, planetL, planet, tarif, date, approved, id FROM orders ORDER BY $sortColumn $sortOrder";
               if ($result = $pdo->query($sql)) {
                  echo "<form method='post' action='do_changeProst.php'>";
                  echo "<table><tr>";
                  echo "<th><a href='?sort=email&order=" . ($sortColumn === 'email' && $sortOrder === 'ASC' ? 'desc' : 'asc') . "'>Email</a></th>";
                  echo "<th><a href='?sort=planetL&order=" . ($sortColumn === 'planetL' && $sortOrder === 'ASC' ? 'desc' : 'asc') . "'>Планета вылета</a></th>";
                  echo "<th><a href='?sort=planet&order=" . ($sortColumn === 'planet' && $sortOrder === 'ASC' ? 'desc' : 'asc') . "'>Планета прилета</a></th>";
                  echo "<th><a href='?sort=tarif&order=" . ($sortColumn === 'tarif' && $sortOrder === 'ASC' ? 'desc' : 'asc') . "'>Тариф</a></th>";
                  echo "<th>Дата</th>";
                  echo "<th>Взят</th>";
                  echo "<th><a href='?sort=id&order=" . ($sortColumn === 'id' && $sortOrder === 'ASC' ? 'desc' : 'asc') . "'>Id</a></th>";
                  echo "</tr>";
                  foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td><input type='hidden' name='id' value='" . $row["id"] . "'></td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["planetL"] . "</td>";
                    echo "<td>" . $row["planet"] . "</td>";
                    echo "<td>" . $row["tarif"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["id"] . "</td>";
                    //echo "<td><input type='checkbox' name='approved'" . ($row["approved"] ? " checked" : "") . "></td>";
                    //echo "<td><button type='submit' class='btn btn-outline-warning'>Обновить</button></td>";
                    echo "<td><input type='checkbox' name='approved'" . ($row["approved"] ? " checked" : "") . "></td>";
                    echo "<td><input type='submit' value='Обновить'></td>";
                    echo "</tr>";
                 }
                 echo "</table>";
                 echo "</form>";
                 die;
                } else {
                    echo "Ошибка: ";
                }
            }
        ?>
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