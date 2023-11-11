class inf {
    constructor(src, title, descr, parentSelector, ...classes) {
        this.src = src;
        this.title = title;
        this.descr = descr;
        this.classes = classes;
        this.parent = document.querySelector(parentSelector);

    }
    render() {
        const element = document.createElement('div');
        if (this.classes.length === 0) {
            this.classes = 'inf';
            element.classList.add(this.classes);
        } else {
            this.classes.forEach(className => element.classList.add(className));
        }
        element.innerHTML = `
    
            <div class="pic"><img src=${this.src} id='pict'></div>
            <div class="text">${this.title}</div>
            <div class="link"><a href="index_news.html">${this.descr}</a></div>

        `;
        this.parent.append(element);
    }
}

new inf(
    "img/pic3.png",
    'spacex starship',
    'о ракете',
    ".block2"
).render();

new inf(
    "img/pic2.png",
    'союз "у"',
    'о ракете',
    ".block2"
).render();

new inf(
    "img/pic1.png",
    'шатл "дискавери"',
    'о ракете',
    ".block2"
).render();


class info {
    constructor(src, title, descr, date, button, parentSelector, ...classes) {
        this.src = src;
        this.title = title;
        this.descr = descr;
        this.date = date;
        this.button = button;
        this.classes = classes;
        this.parent = document.querySelector(parentSelector);

    }
    render() {
        const element = document.createElement('div');
        if (this.classes.length === 0) {
            this.classes = 'inf5';
            element.classList.add(this.classes);
        } else {
            this.classes.forEach(className => element.classList.add(className));
        }
        element.innerHTML = `
        

        <div class="pic5"><img src="${this.src}" id="pict5"></div>
        <div class="text5">

            <div id="maint1">
            ${this.title}
            </div>
            <div id="sect1">${this.descr}
            </div>
            <div id="date1">${this.date}</div>
            <div id="button2">
                <button>${this.button}</button>
            </div>
        </div>

        `;
        this.parent.append(element);
    }
}


new info(
    "img/EvnZ5hsXAAAR8GA 1.png",
    ' Прототип Starship —<br>ракеты Илона Маска для<br>полетов на Марс и Луну —<br>впервые успешно<br>приземлился.',
    'Прототип космического корабля Starship,<br> разработанного компанией SpaceX Илона Маска для<br> полетов на Марс и Луну, впервые приземлился в<br> ходе летных испытаний, прошедших в Бока-Чика в<br> Техасе 3 марта (в ночь на 4 марта по Москве).',
    '04 марта 2021',
    'Читать полностью',
    " .block3 .infs",
    "inf5"
).render();

new info(
    "img/EvnZ5hsXAAAR8GA 2.png",
    'Россия отложила запуск<br>ракеты "Союз" с 38<br> спутниками',
    'В России отложен запуск ракеты-носителя "Союз-2.1а", которая должна вывести на околоземную орбиту 38 иностранных спутников. Решение о переносе запуска ракеты с космодрома Байконур было принято после скачка напряжения перед стартом, сообщил в субботу, 20 марта, глава "Роскосмоса" Дмитрий Рогозин.',
    '04 марта 2021<br><br>',
    'Читать полностью',
    " .block3 .infs",
    "inf5"
).render();

new info(
    "img/EvnZ5hsXAAAR8GA 3.png",
    ' минобороны США <br>признали, что не смогут <br>выводить спутники без российских двигателей.',
    'В России отложен запуск ракеты-носителя "Союз-2.1а", которая должна вывести на околоземную орбиту 38 иностранных спутников. Решение о переносе запуска ракеты с космодрома Байконур было принято после скачка напряжения перед стартом.',
    '20 марта 2021',
    'Читать полностью',
    ".block3 .infs",
    "inf5"
).render();

new info(
    "img/EvnZ5hsXAAAR8GA 4.png",
    ' Прототип Starship — <br>ракеты Илона Маска для <br>полетов на Марс и Луну — <br>впервые успешно <br> приземлился.',
    'Прототип космического корабля Starship, разработанного компанией SpaceX Илона Маска для полетов на Марс и Луну, впервые приземлился в ходе летных испытаний, прошедших в Бока-Чика в Техасе 3 марта (в ночь на 4 марта по Москве).',
    '04 марта 2021',
    'Читать полностью',
    " .block3 .infs",
    "inf5"
).render();


class infs {
    constructor(src, title, descr, link, parentSelector, ...classes) {
        this.src = src;
        this.title = title;
        this.descr = descr;
        this.link = link;
        this.classes = classes;
        this.parent = document.querySelector(parentSelector);

    }
    render() {
        const element = document.createElement('div');
        if (this.classes.length === 0) {
            this.classes = 'info1';
            element.classList.add(this.classes);
        } else {
            this.classes.forEach(className => element.classList.add(className));
        }
        element.innerHTML = `
   
        
        <div class="picc2"><img src="${this.src}" id="picct2"></div>
        <div class="textt2">${this.title}</div>
        <div class="stext2">
        ${this.descr}
        </div>
        <div class="linkk2"><a href="">${this.link}</a></div>                   
        `;
        this.parent.append(element);
    }
}


new infs(
    "img/0d39840997f54c64a02bae104f4bd9c9 1 (3).png",
    'ракеты носители',
    'ракета, предназначенная для выведения полезной нагрузки в космическое пространство.',
    'подробнее',
    ".block4 .infs2"
).render();

new infs(
    "img/0d39840997f54c64a02bae104f4bd9c9 2.png",
    'Космический<br> корабль',
    'космический аппарат, предназначенный для выполнения полётов людей в космосе',
    'подробнее',
    ".block4 .infs2"
).render();

new infs(
    "img/0d39840997f54c64a02bae104f4bd9c9 3.png",
    'Спутник',
    'космический летательный аппарат, вращающийся вокруг Земли по геоцентрической орбите.',
    'подробнее',
    ".block4 .infs2"
).render();