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
    <header class="">
        <div class="bg-black w-100">
            <nav class="nav">
                <ul class="nav me-auto">
                    <li class="nav-item"><span><a href="index.php"><img src="img/LIVESPACE.png" alt=""></a></span></li>
                    <li class="nav-item"><a href="index.php">Планеты </a></li>
                    <li class="nav-item"><a href="">Ракеты</a></li>
                    <li class="nav-item"><a href="news.php">новости</a></li>
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
    <main class="container">
        <div class="land">
            <a href="">Главная - Земля</a>
        </div>
        <div class="container">
            <!--Переделать слайдер (взять с гитхаба или бутстрапа)-->


        </div>
        <div>
            <div class="earch textA">
                <h2>Земля</h2>
                <div class="earchimg">
                    <img src="img/EF0D0797-AF75-43E5-9357-D9327915E56D_w1023_s 2.png" alt="">
                    <p class="w-50">Земля́ — третья по удалённости от Солнца планета Солнечной системы. Самая плотная, пятая по диаметру и массе среди всех планет и крупнейшая среди планет земной группы, в которую входят также Меркурий, Венера и Марс. Единственное известное
                        человеку в настоящее время тело Солнечной системы в частности и Вселенной вообще, населённое живыми организмами.</p>

                </div>

            </div>
            <div class="how textA">
                <h2>Как земля образовалась?</h2>
                <p class="w-75">Современной научной гипотезой формирования Земли и других планет Солнечной системы является гипотеза солнечной туманности, по которой Солнечная система образовалась из большого облака межзвёздной пыли и газа. Облако состояло главным образом
                    из водорода и гелия, которые образовались после Большого взрыва, и более тяжёлых элементов, оставленных взрывами сверхновых. Примерно 4,5 млрд лет назад облако стало сжиматься, что, вероятно, произошло из-за воздействия ударной волны от
                    вспыхнувшей на расстоянии нескольких световых лет сверхновой. Когда облако начало сокращаться, его угловой момент, гравитация и инерция сплюснули его в протопланетный диск перпендикулярно к его оси вращения. После этого обломки в протопланетном
                    диске под действием силы притяжения стали сталкиваться, и, сливаясь, образовывали первые планетоиды.</p>
            </div>

            <div class="stroenie textA">
                <p class="w-50">
                    <span>Cтроение Земли<br></span> Земля относится к планетам земной группы, и в отличие от газовых гигантов, таких как Юпитер, имеет твёрдую поверхность. Это крупнейшая из четырёх планет земной группы в Солнечной системе, как по размеру, так
                    и по массе. Кроме того, Земля среди этих четырёх планет имеет наибольшие плотность, поверхностную гравитацию и магнитное поле[83]. Это единственная известная планета с активной тектоникой плит.
                </p>
                <img src="img/shear_properties_of_inner_core_by_j_waves_1_703 2.png" alt="">
            </div>

            <div class="earchh textA">
                <h2>Спутником земли является луна</h2>
                <div class="earchimg">
                    <p>Луна́ — единственный естественный спутник Земли. Самый близкий к Солнцу спутник планеты, так как у ближайших к Солнцу планет (Меркурия и Венеры) их нет. Второй по яркости[комм. 1] объект на земном небосводе после Солнца и пятый по величине
                        естественный спутник планеты Солнечной системы. Среднее расстояние между центрами Земли и Луны — 384 467 км (0,00257 а.е., ~30 диаметров Земли).</p>
                    <img src="img/631px-FullMoon2010 1.png" alt="">
                </div>
        </div>
    </main>
    


    <footer>
        <ul>
            <li><span><a href="index_up.php"><img src="img/LIVESPACE.png" alt=""></a></span></li>
            <li><a href="index_planets.php">Планеты </a></li>
            <li><a href="index_rockets.php">Ракеты</a></li>
            <li><a href="index_news.php">новости</a></li>

            <div class="das">
                <a href=""><img src="img/Vector (1).png" alt=""></a>
                <a href=""><img src="img/telegram.png" alt=""></a>
                <a href=""><img src="img/twitter.png" alt=""></a>
                <a href=""><img src="img/email.png" alt=""></a>
            </div>


        </ul>





    </footer>






    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>