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
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/rockets.css">

    <script src="js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <a class="navbar-brand" href="index_up.html">LIVESPACE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">планеты</a></li>
                    <li class="nav-item active"><a class="nav-link" href="rockets.html">ракеты</a></li>
                    <li class="nav-item active"><a class="nav-link" href="news.html">Новости</a></li>
                </ul>
        </nav>

        <div class="block1">
            <div class="t1">
                главная → ракеты
            </div>
            <div class="inf1">
                <div class="pic1">
                    <img src="img/regnum_picture.png" id="pict1">
                </div>
                <div class="text1">
                    Все что ты хотел знать о космический кораблях.<br>Новости, открытия и много другого о космосе.
                </div>
                <div class="btn1">
                    <button> Подписаться на рассылку </button>
                </div>
            </div>
        </div>

        <div class="block2">


            <!-- <div class="inf">
                <div class="pic"><img src="pic3.png" id="pict"></div>
                <div class="text">spacex starship</div>
                <div class="link"><a href="">о ракете</a></div>
            </div>


            <div class="inf">
                <div class="pic"><img src="pic1.png" id="pict"></div>
                <div class="text">Союз “У”</div>
                <div class="link"><a href="">о ракете</a></div>
            </div>


            <div class="inf">
                <div class="pic"><img src="pic2.png" id="pict"></div>
                <div class="text">Шатл “дискавери”</div>
                <div class="link"><a href="">о ракете</a></div>
            </div> -->


        </div>
        <div class="block3">
            <div class="title1">Новости о запусках</div>
            <div class="infs">
                <!-- <div class="inf5">

                <div class="pic5"><img src="EvnZ5hsXAAAR8GA 1.png" id="pict5"></div>
                <div class="text5">

                    <div id="maint1">
                        Прототип Starship —<br>ракеты Илона Маска для<br>полетов на Марс и Луну —<br>впервые успешно
                        <br>приземлился.
                    </div>
                    <div id="sect1">Прототип космического корабля Starship,<br> разработанного компанией SpaceX Илона Маска для<br> полетов на Марс и Луну, впервые приземлился в<br> ходе летных испытаний, прошедших в Бока-Чика в<br> Техасе 3 марта (в ночь на 4 марта
                        по Москве).
                    </div>
                    <div id="date1">04 марта 2021</div>
                    <div id="button2">
                        <button>Читать полностью</button>
                    </div>
                </div>
            </div>
            <div class="inf6">
                <div class="pic6"><img src="EvnZ5hsXAAAR8GA 2.png" id="pict6"></div>
                <div class="text6">
                    <div id="maint2">
                        Россия отложила запуск<br>ракеты "Союз" с 38<br> спутниками

                    </div>
                    <div id="sect2">В России отложен запуск ракеты-носителя "Союз-2.1а", которая должна вывести на околоземную орбиту 38 иностранных спутников. Решение о переносе запуска ракеты с космодрома Байконур было принято после скачка напряжения перед стартом,
                        сообщил в субботу, 20 марта, глава "Роскосмоса" Дмитрий Рогозин.</div>
                    <div id="date2">04 марта 2021</div>
                    <div id="button3">
                        <button>Читать полностью</button>
                    </div>
                </div>
            </div>
            <div class="inf7">
                <div class="pic7"><img src="EvnZ5hsXAAAR8GA 3.png" id="pict7"></div>
                <div class="text7">
                    <div id="maint3">
                        минобороны США <br>признали, что не смогут <br>выводить спутники без российских двигателей.
                    </div>
                    <div id="sect3">В России отложен запуск ракеты-носителя "Союз-2.1а", которая должна вывести на околоземную орбиту 38 иностранных спутников. Решение о переносе запуска ракеты с космодрома Байконур было принято после скачка напряжения перед стартом.</div>
                    <div id="date3">20 марта 2021</div>
                    <div id="button4">
                        <button>Читать полностью</button>
                    </div>
                </div>
            </div>
            <div class="inf8">
                <div class="pic8"><img src="EvnZ5hsXAAAR8GA 4.png" id="pict8"></div>
                <div class="text8">
                    <div id="maint4">
                        Прототип Starship — <br>ракеты Илона Маска для <br>полетов на Марс и Луну — <br>впервые успешно
                        <br> приземлился.
                    </div>
                    <div id="sect4">Прототип космического корабля Starship, разработанного компанией SpaceX Илона Маска для полетов на Марс и Луну, впервые приземлился в ходе летных испытаний, прошедших в Бока-Чика в Техасе 3 марта (в ночь на 4 марта по Москве).</div>
                    <div id="date4">04 марта 2021</div>
                    <div id="button5">
                        <button>Читать полностью</button>
                    </div>
                </div>
            </div></div> -->
            </div>

            <div class="block4">
                <div class="title2">
                    Виды ракет
                </div>
                <div class="stitle2">
                    В отличие от некоторых горизонтально-стартующих авиационно-космических систем (АКС),
                    <br>ракеты-носители используют вертикальный тип старта и (много реже) воздушный старт.
                </div>


                <div class="infs2">
                    <!-- <div class="info1">
                    <div class="picc2"><img src="0d39840997f54c64a02bae104f4bd9c9 1 (3).png" id="picct2"></div>
                    <div class="textt2">ракеты носители</div>
                    <div class="stext2">
                        ракета, предназначенная для выведения полезной нагрузки в космическое пространство.
                    </div>
                    <div class="linkk2"><a href="">подробнее</a></div>
                </div>
                <div class="info2">
                    <div class="picc2"><img src="0d39840997f54c64a02bae104f4bd9c9 2.png" id="picct2"></div>
                    <div class="textt3">Космический<br> корабль</div>
                    <div class="stext2">
                        космический аппарат, предназначенный для выполнения полётов людей в космосе
                    </div>
                    <div class="linkk2"><a href="">подробнее</a></div>
                </div>
                <div class="info3">
                    <div class="picc2"><img src="0d39840997f54c64a02bae104f4bd9c9 3.png" id="picct2"></div>
                    <div class="textt2">Спутник</div>
                    <div class="stext2">
                        космический летательный аппарат, вращающийся вокруг Земли по геоцентрической орбите.
                    </div>
                    <div class="linkk2"><a href="">подробнее</a></div>
                </div> -->
                </div>





            </div>
            <div class="block5">
                <div class="row">
                    <div id="mt1"><a class="mt1" href="index_up.html">LIVESPACE</a></div>
                    <div id="st1"> <a class="st1" href="">планеты</a>&ensp;&ensp;<a class="st1" href="">ракеты</a>&ensp;&ensp;<a class="st1" href="">новости</a></div>
                    <div id="icons"><img src="img/insta.png" width="20px">&ensp;<img src="img/email.png" width="23px">&ensp;<img src="img/twitter.png" width="24px">&ensp;<img src="img/telegram.png" width="24px"></div>
                </div>

                <div class="row">
                    <div id="st2"><a class="st1" href="">Обратная связь</a>&ensp;&ensp;<a class="st1" href="">Предложить статью</a></div>
                </div>
            </div>
        </div>
        <script src="js/rockets.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>