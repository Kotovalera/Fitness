<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <title>Фитнес</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: "Lato";
  }
  
  .header-fon {
    background: black;
  }
  
  .container {
    margin: 0 auto;
    width: 1200px;
  }
  
  .header-nav {
    display: flex;
    justify-content: space-between;
  }
  .header-nav .logo {
    justify-content: left;
  }
  .header-nav .logo .seti {
    margin: -55px;
    margin-left: 260px;
  }
  .header-nav .logo .seti .geo {
    margin-left: 20px;
  }
  .header-nav nav {
    display: flex;
    margin: 30px;
  }
  .header-nav li {
    list-style-type: none;
    color: white;
    margin-left: 30px;
  }
  .header-nav a {
    color: #E7490F;
    margin-left: 30px;
    text-decoration: none;
  }
  
  .main-fon {
    background: black;
  }
  .main-fon .vectors {
    width: 40%;
    margin-left: auto;
  }
  
  .main-1 {
    display: flex;
    flex-direction: row;
    margin-top: -40%;
  }
  .main-1 .main-text1 {
    display: flex;
    flex-direction: column;
    margin-top: 30px;
  }
  .main-1 h1 {
    color: white;
  }
  .main-1 p {
    color: white;
  }
  
  .main-2 {
    display: flex;
    flex-direction: row;
  }
  .main-2 .main-text2 {
    display: flex;
    flex-direction: column;
  }
  .main-2 .main-text2 h3 {
    color: #E7490F;
  }
  .main-2 .main-text2 p {
    color: white;
  }
  .main-2 .main-foto {
    margin-left: 25%;
  }
  
  .advan text {
    display: block;
  }
  .advan h3 {
    color: #E7490F;
  }
  .advan .advan-top {
    display: flex;
    justify-content: space-between;
    gap: 60px;
  }
  
  .grafik-fon {
    background-image: url(img/bg.png);
  }
  .grafik-fon .grafik {
    display: flex;
    margin-left: 30px;
  }
  .grafik-fon .grafik .prog {
    display: block;
    margin-top: 10%;
  }
  .grafik-fon .grafik .prog-img {
    justify-content: right;
    margin-top: 15%;
    margin-left: 200px;
  }
  .grafik-fon .grafik h3 {
    color: #E7490F;
  }
  .grafik-fon .grafik h2 {
    color: white;
  }
  .grafik-fon .grafik p {
    color: white;
  }
  .grafik-fon .car {
    display: flex;
    justify-content: space-between;
    margin-top: 50px;
  }
  .grafik-fon .carts-1 h4 {
    color: white;
  }
  .grafik-fon .carts-1 p {
    color: #7F7F7F;
  }
  .grafik-fon .carts-1 a {
    color: #E7490F;
    text-decoration: none;
    margin-left: 110px;
  }
  
  .trener {
    display: flex;
  }
  .trener .trener-1 {
    display: block;
    margin-top: 10%;
    color: white;
  }
  .trener .trener-1 h3 {
    color: #E7490F;
  }
  .trener .img-trener {
    margin-top: 15%;
    margin-left: 200px;
  }
  
  .cartt {
    margin-top: 100px;
  }
  
  .car {
    display: flex;
    justify-content: space-between;
  }
  .car .cart-2 h3 {
    color: white;
  }
  .car .cart-2 p {
    color: #7F7F7F;
  }
  
  .grafik-fon-1 {
    background-image: url(img/bg.png);
  }
  
  .forma-fon {
    background-image: url(img/bg\ \(1\).png);
    color: white;
  }
  .forma-fon h2 {
    display: flex;
    justify-content: center;
    margin-top: 150px;
  }
  .forma-fon img {
    margin-left: 500px;
  }
  .forma-fon form {
    display: flex;
    flex-direction: column;
    margin-top: 40px;
    gap: 20px;
    margin-left: 300px;
  }
  .forma-fon form div {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  .forma-fon form div input {
    width: 500px;
    padding: 15px;
    background: none;
    outline: none;
    border: 2px solid rgb(81, 77, 77);
    color: white;
  }
  .forma-fon form button {
    background-color: #e46a06;
    border: none;
    color: white;
    padding: 15px;
    width: 545px;
    margin-bottom: 30px;
    margin-top: 30px;
  }
  
  .interior {
    display: block;
  }
  .interior h3 {
    color: #E7490F;
  }
  .interior .img-cart {
    display: flex;
    justify-content: space-between;
  }
  .interior .img-cart .cart-img-1 {
    margin-bottom: 15px;
  }
  
  .footer-fon {
    background-image: url(img/bg\ \(2\).png);
  }
  .footer-fon h4 {
    color: white;
  }
  .footer-fon p {
    color: #858585;
  }/*# sourceMappingURL=style.css.map */
    </style>
</head>
<body>
    <header>
        <div class="header-fon">
        <div class="container">
                <div class="header-nav">
                    <div class="logo">
                <img src="img/logo.png">
                <div class="seti">
                    <img class="inst" src="img/inst.png">
                    <img class="geo" src="img/geo.png" alt="">
                </div>
                    </div>
            <div class="menu"></div>
                <nav>
                    <li>Групповые программы</li>
                    <li>Тренара</li>
                    <li>Интерьер</li>
                    <li>Контакты</li>
                    <a href="">Войти</a>
                </nav>
                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div>
            </div>
        </div>
        </div>
    </header>
    <main>
        <div class="main-fon">
            <div class="vectors">
                <img src="img/vectors.png" width="80%">
            </div>
            <div class="container">
                <div class="main-1">
                <img src="img/img.png" alt="">
                <div class="main-text1">
                <h1>Более <span style="color: #E7490F;">20 </span> различных <br>
                    групповых программ</h1>
                    <p>Огромный выбор групповых программ, которые <br> проведут наши тренеры. Современный зал <br>
                        и позитивная атмосфера принесет не только пользу, <br> но и доставит удовольствие от тренировок.</p>
                </div>
            </div>
                <div class="main-2">
                    <div class="main-text2">
                <h3>о клубе</h3>
                <p>Все групповые программы Level Fitness построенны на <br> профессионализме, неравнодушии и чувстве прекрасного. <br>
                    Главная особенность — осознанные тренировки, основанные <br> на глубоких знаниях человеческой биомеханики. Наш подход <br> обеспечит не только красоту тела, но и здоровье.</p>
                </div>
                    <img class="main-foto" src="img/1.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="advan">
            <div class="text">
        <h3 class="mi">почему мы</h3>
        <h2 class="nazvanie">Наши преимущества</h2>
        <div class="advan-top">
        <div class="top">
        <img src="img/image 15.png" width="350px">
        <h2>Топовые тренеры</h2>
        <p>Для вас работают преподаватели имеющие<br>
            в общей сумме более 10 лет<br>преподавательской практики, непрерывно<br> совершенствующие свой уровень знаний.</p>
        </div>
        <div class="top">
        <img src="img/image 17.png" width="350px">
        <h2>Улучшение здоровья</h2>
            <p>Мы помогаем обрести уверенность в себе,<br>
                с помощью раскрытия таланта и развития<br> физических возможностей. Поможем уйти<br> блокам и зажатости. А взамен придет<br> лёгкость, гибкость тела и ума.</p>
            </div>
            <div class="top">
        <img src="img/image 18.png" width="350px">
        <h2>Насыщенное расписание</h2>
        <p>Возможность заниматься в любое время<br>
            с 08:00 до 22:00</p>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="grafik-fon">
        <div class="container">
            <div class="grafik">
                <div class="prog">
            <h3>как будем работать</h3>
            <h2>Наши программы</h2>
            <p>У нас широкий и сбалансированный выбор тренировок.<br> Разнообразие нагрузок поможет комплексно развить тело<br> и решить любые задачи.</p>
            <p>В основе всех тренировок — движение в трех плоскостях<br> для наиболее эффективной и безопасной активации тела!<br> Тренируйтесь в мини-группе или приходите<br> на  индивидуальные занятия.</p>
        </div>
            <img class="prog-img" src="img/image 21.png">
        </div>

        <div class="cartss">
            <div class="car">
            <div class="carts-1">
         <img src="img/хит-тренинг.png">
            <h4>HIT-тренинг</h4>
            <p>Тренировка на мышцы ног и ягодиц,<br>
                с использованием резинок и отягощения<br>
                + 30 минут растяжка</p>
            <a href="">Записаться</a>
        </div>
        <div class="carts-1">
                <img src="img/пилатес.png" alt="">
                <h4>Пилатес</h4>
                <p>Тренировка на мышцы ног и ягодиц,<br>
                    с использованием резинок и отягощения<br>
                    + 30 минут растяжка</p>
                <a href="">Записаться</a>
            </div>
            <div class="carts-1">
            <img src="img/зумба.png" alt="">
            <h4>Зумба</h4>
            <p>Тренировка на мышцы ног и ягодиц,<br>
                с использованием резинок и отягощения<br>
                + 30 минут растяжка</p>
            <a href="">Записаться</a>
        </div>
    </div>
</div>
    <div class="car">
        <div class="carts-1">
                <img src="img/табата.png" alt="">
                <h4>Табата</h4>
                <p>Тренировка на мышцы ног и ягодиц,<br>
                    с использованием резинок и отягощения<br>
                    + 30 минут растяжка</p>
                <a href="">Записаться</a>
            </div>
            <div class="carts-1">
            <img src="img/стретчинг.png" alt="">
            <h4>Стретчинг</h4>
            <p>Тренировка на мышцы ног и ягодиц,<br>
                    с использованием резинок и отягощения<br>
                    + 30 минут растяжка</p>
                <a href="">Записаться</a>
            </div>
                <div class="carts-1">
                    <img src="img/хит-тренинг.png">
                       <h4>HIT-тренинг</h4>
                       <p>Тренировка на мышцы ног и ягодиц,<br>
                           с использованием резинок и отягощения<br>
                           + 30 минут растяжка</p>
                       <a href="">Записаться</a>
            </div>
            </div>
            </div>
        </div>
        </div>
        <div class="grafik-fon-1">
        <div class="container">
            <div class="trener">
                <div class="trener-1">
        <h3>лучшие тренеры</h3>
        <h2>Наш тренерский состав</h2>
        <p>Мы собрали команду настоящих профессионалов своего дела.<br> Каждый тренер непрерывно совершенствуется и повышает<br> квалификацию. Благодаря многолетнему опыту и <br>многопрофильному образованию наших преподавателей <br>каждое занятие выстраивается по новому сценарию, творчески<br> и с заботой о каждом клиенте.</p>
    </div>
        <img class="img-trener" src="img/image 21.png">
    </div>
    <div class="cartt">
        <div class="car">
        <div class="cart-2">
        <img src="img/ivan.png" alt="">
        <h3>Иванов Андрей</h3>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    <div class="cart-2">
        <img src="img/ekaterina.png" alt="">
        <h3>Варламова Екатерина</h3>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    <div class="cart-2">
        <img src="img/nikol.png" alt="">
        <h3>Петров Николай</h3>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
</div>
<div class="car">
    <div class="cart-2">
        <img src="img/андрей.png" alt="">
        <h3>Иванов Андрей</h3>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    <div class="cart-2">
        <img src="img/ekaterina.png" alt="">
        <h3>Варламова Екатерина</h3>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    <div class="cart-2">
        <img src="img/нп.png" alt="">
        <h3>Петров Николай</h3>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    </div>
</div>
</div>


<div class="forma-fon">
    <div class="container">
        <div class="forma">
        <h2>Начни свое преображение</h2>
        <img src="img/border.png" alt="">
        <form action="">
            <div>
                <span>Имя:</span>
                <input type="text" placeholder="" name="" id="">
            </div>
            <div>
                <span>Номер телефона:</span>
                <input type="text">
            </div>
                <button>Записаться на тренировку</button>
        </form>
    </div>
    </div>
</div>
</div>

<div class="container">
    <div class="interior">
    <h3>приглашаем в гости</h3>
    <h2>Интерьер в фитнес-центре</h2>
    <div class="cart-interior">
        <div class="img-cart">
            <div class="cart-img-1">
    <img src="img/01.png" alt="">
</div>
<div class="cart-img-1">
    <img src="img/02.png" alt="">
</div>
<div class="cart-img-1">
    <img src="img/03.png" alt="">
</div>
</div>
<div class="img-cart">
    <div class="cart-img-1">
    <img src="img/04.png" alt="">
</div>
<div class="cart-img-1">
    <img src="img/05.png" alt="">
</div>
<div class="cart-img-1">
    <img src="img/06.png" alt="">
</div>
    </div>
</div>
</div>
</div>
<footer>
    <div class="footer-fon">
    <div class="container">
        <div class="img-calendar">
        <img src="img/CalendarBlank.png" alt="">
        <h4>Понедельник — Пятница: 07:00–23:00<br>
            Суббота — Воскресенье: 09:00–22:00</h4>
        </div>
        <img src="img/Vector (1).png" alt="">
        <h4>Адрес: г. Батайск, М. Горького, д. 84</h4>
        <img src="img/Vector (2).png" alt="">
        <h4>Телефон: +7 (863) 272–72–77</h4>
        <p>Level Fitness это современный фитнес центр в самом<br> центре города Батайска. Оборудованный итальянскими<br> тренажерами и залами для групповых тренировок.</p>
    </div>
</div>
</footer>
    </main>
</body>
</html>
