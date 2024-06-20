<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Фитнес</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: "Montserrat";
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
    flex-wrap: wrap;
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
    flex-wrap: wrap;
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
   .seti {
    img::hover{color:red;}
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
    flex-wrap: wrap;
    
  }
  .main-1 .main-text1 {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    padding-top: 80px;
    padding-left: 40px;
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
    flex-wrap: wrap;
    padding-top: 50px;
  }
  .main-2 .main-text2 h4 {
    color: #E7490F;
  }
  .main-2 .main-text2 p {
    color: white;
    font-size: 15px;
  }
  .main-2 .main-foto {
    margin-left: 25%;
  }
  
  .advan text {
    display: block;
    flex-wrap: wrap;
  }
  .advan h4 {
    color: #E7490F;
    margin-top: 60px;
  }
  .advan .advan-top {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 60px;
    margin-top: 40px;
  }
  .top h5 {
    padding-top: 20px;
    font-size: 25px;
  }
  .top p {
    font-size: 15px;
  }

  .grafik-fon {
    background-image: url(image/bg.png);
    margin-top: 20px;
  }
  .grafik-fon .grafik {
    display: flex;
    flex-wrap: wrap;
    margin-left: 30px;
  }
  .grafik-fon .grafik .prog {
    display: block;
    flex-wrap: wrap;
    margin-top: 10%;
  }
  .grafik-fon .grafik .prog-img {
    justify-content: right;
    margin-top: 15%;
    margin-left: 200px;
  }
  .grafik-fon .grafik h4 {
    color: #E7490F;
    font-size: 20px;
  }
  .grafik-fon .grafik h3 {
    color: white;
  }
  .grafik-fon .grafik p {
    color: white;
    font-size: 15px;
  }
  .grafik-fon .car {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 50px;
  }
  .grafik-fon .carts-1 h5 {
    color: white;
  }
  .grafik-fon .carts-1 p {
    color: #7F7F7F;
    font-size: 14px;
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
    flex-wrap: wrap;
    margin-top: 14%;
    color: white;
    font-size: 15px;
  }
  .trener .trener-1 h4 {
    color: #E7490F;
    font-size: 20px;
  }
  .trener .img-trener {
    margin-top: 17%;
    margin-left: 200px;
  }
  
  .cartt {
    margin-top: 100px;
  }
  
  .carr {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  .carr .cart-2 h5 {
    color: white;
  }
  .carr .cart-2 p {
    color: #7F7F7F;
    font-size: 14px;
  }
  
  .grafik-fon-1 {
    background-image: url(image/bg.png);
  }
  
  .forma-fon {
    background-image: url(image/bg\ \(1\).png);
    color: white;
  }
  .forma-fon h2 {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 150px;
  }
  .forma-fon img {
    margin-left: 500px;
  }
  .forma-fon form {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    margin-top: 40px;
    gap: 20px;
    margin-left: 300px;
  }
  .forma-fon form div {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
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
    width: 500px;
    margin-bottom: 30px;
    margin-top: 30px;
  }
  
  .interior {
    display: block;
    flex-wrap: wrap;
  }
  .interior h4 {
    color: #E7490F;
    margin-top: 60px;
  }
  .interior .img-cart {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 40px;
  }
  .interior .img-cart .cart-img-1 {
    margin-bottom: 15px;
  }
  
  .footer-fon {
    background-image: url(image/bg\ \(2\).png);
    margin-top: 80px;
  }
  .footer-main {
    display: block;
    flex-direction: column;
    flex-wrap: wrap;
  }

  .footer-main-1 {
    padding-top: 120px;
  }
  .img-calendar {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    
  }
  .adres {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding-top: 20px;
    
  }
  .phone {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding-top: 20px;
    
  }
  .geolocation {
    display: flex;
    flex-wrap: wrap;
    margin-left: 50%;
    margin-top: -30%;
  }
  .footer-fon h5 {
    color: white;
    margin-left: 20px;
    font-size: 16px;
  }
  .footer-fon p {
    color: #858585;
    padding-top: 20px;
    font-size: 14px;
  }

  @media (max-width: 768px) {
    .container {
      width: 90%;
    }
    li {
      display: none;
    }
    .main-1 {
      img {
        width: 95%;
      }
      .main-text1 {
        padding: 0;
      }
    }
    .main-2 {
      display: flex;
      flex-direction: column-reverse;
      .main-foto {
        margin-left: 0%;
      }
    }

    .grafik-fon {  
        .grafik {
          margin-left: 0;
          .prog-img {
            width: 100%;
            margin-top: 0%;
            margin-left: 0%;
          }
      }
      .car {
        display: flex;
        justify-content: center;
      }
    }
    .carts-1 {
      img {
        margin-top: 20px;
      }
    }
    .trener {
      display: flex;
      flex-direction: column-reverse;
      .img-trener {
        margin-left: 0px;
      }
    }
    .cartt {
      margin-top: 50px;
    }
    .carr {
        display: flex;
        justify-content: center;
      }
      
        .forma-fon {
          h2 {
            margin-top: 80px;
          }
          img {
            margin-left: 120px;
          }
          form {
            margin-left: 0px;
            div {
              input {
                width: 85%;
              }
            }
            button {
                width: 85%;
              }
          }
        }
        .footer-main {
          display: flex;
          flex-direction: column;
          .footer-main-1 {
            padding-top: 80px;
          }
          .geolocation {
            display: flex;
            flex-wrap: wrap;
            margin-left: 0%; 
            margin-top: 0%;
            width: 95%;
          }
        }
      
} 
  /*# sourceMappingURL=style.css.map */
    </style>
</head>
<body>
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <div class="header-fon">
        <div class="container">
                <div class="header-nav">
                    <div class="logo">
                <img src="{{asset('image/logo.png')}}">
                <div class="seti">
                    <img class="inst" src="{{asset('image/inst.png')}}">
                    <img class="geo" src="{{asset('image/geo.png')}}">
                </div>
                    </div>
            <div class="menu">
                <nav>
                    <li>Групповые программы</li>
                    <li>Тренара</li>
                    <li>Интерьер</li>
                    <li>Контакты</li>
                </nav>
            </div>
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
    
    <!-- <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/fitness.jpg')}}" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/fitness1.jpg')}}"class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div> -->
        <div class="main-fon">
            <!-- <div class="vectors">
            <img src="{{asset('image/vectors.png')}}">
            </div> -->
            <div class="container">
                <div class="main-1">
                <img src="{{asset('image/img.png')}}">
                <div class="main-text1">
                <h1>Более <span style="color: #E7490F;">20 </span> различных <br>
                    групповых программ</h1>
                    <p>Огромный выбор групповых программ, которые <br> проведут наши тренеры. Современный зал <br>
                        и позитивная атмосфера принесет не только пользу, <br> но и доставит удовольствие от тренировок.</p>
                </div>
            </div>
                <div class="main-2">
                    <div class="main-text2">
                <h4>о клубе</h4>
                <p>Все групповые программы Level Fitness построенны на <br> профессионализме, неравнодушии и чувстве прекрасного. <br>
                    Главная особенность — осознанные тренировки, основанные на глубоких знаниях человеческой биомеханики. Наш подход обеспечит не только красоту тела, но и здоровье.</p>
                </div>
                    <img class="main-foto" src="{{asset('image/1.png')}}">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="advan">
            <div class="text">
        <h4 class="mi">почему мы</h4>
        <h3 class="nazvanie">Наши преимущества</h3>
        <div class="advan-top">
        <div class="top">
        <img src="{{asset('image/image 15.png')}}">
        <h5>Топовые тренеры</h5>
        <p>Для вас работают преподаватели имеющие<br>
            в общей сумме более 10 лет<br>преподавательской практики, непрерывно<br> совершенствующие свой уровень знаний.</p>
        </div>
        <div class="top">
        <img src="{{asset('image/image 17 (1).png')}}">
        <h5>Улучшение здоровья</h5>
            <p>Мы помогаем обрести уверенность в себе,<br>
                с помощью раскрытия таланта и развития<br> физических возможностей. Поможем уйти<br> блокам и зажатости. А взамен придет<br> лёгкость, гибкость тела и ума.</p>
            </div>
            <div class="top">
        <img src="{{asset('image/image 18.png')}}">
        <h5>Насыщенное расписание</h5>
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
            <h4>как будем работать</h4>
            <h3>Наши программы</h3>
            <p>У нас широкий и сбалансированный выбор тренировок.<br> Разнообразие нагрузок поможет комплексно развить тело<br> и решить любые задачи.</p>
            <p>В основе всех тренировок — движение в трех плоскостях<br> для наиболее эффективной и безопасной активации тела!<br> Тренируйтесь в мини-группе или приходите<br> на  индивидуальные занятия.</p>
        </div>
            <img class="prog-img" src="{{asset('image/image 21.png')}}">
        </div>

        <div class="cartss">
            <div class="car">
            <div class="carts-1">
         <img src="{{asset('image/хит-тренинг.png')}}">
            <h5>HIT-тренинг</h5>
            <p>Тренировка на мышцы ног и ягодиц,<br>
                с использованием резинок и отягощения<br>
                + 30 минут растяжка</p>
            <a href="">Записаться</a>
        </div>
        <div class="carts-1">
                <img src="{{asset('image/пилатес.png')}}">
                <h5>Пилатес</h5>
                <p>Тренировка на мышцы ног и ягодиц,<br>
                    с использованием резинок и отягощения<br>
                    + 30 минут растяжка</p>
                <a href="">Записаться</a>
            </div>
            <div class="carts-1">
            <img src="{{asset('image/зумба.png')}}">
            <h5>Зумба</h5>
            <p>Тренировка на мышцы ног и ягодиц,<br>
                с использованием резинок и отягощения<br>
                + 30 минут растяжка</p>
            <a href="">Записаться</a>
        </div>
    </div>
</div>
    <div class="car">
        <div class="carts-1">
                <img src="{{asset('image/табата.png')}}">
                <h5>Табата</h5>
                <p>Тренировка на мышцы ног и ягодиц,<br>
                    с использованием резинок и отягощения<br>
                    + 30 минут растяжка</p>
                <a href="">Записаться</a>
            </div>
            <div class="carts-1">
            <img src="{{asset('image/стретчинг.png')}}">
            <h5>Стретчинг</h5>
            <p>Тренировка на мышцы ног и ягодиц,<br>
                    с использованием резинок и отягощения<br>
                    + 30 минут растяжка</p>
                <a href="">Записаться</a>
            </div>
                <div class="carts-1">
                    <img src="{{asset('image/хит-тренинг.png')}}">
                       <h5>HIT-тренинг</h5>
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
        <h4>лучшие тренеры</h4>
        <h3>Наш тренерский состав</h3>
        <p>Мы собрали команду настоящих профессионалов своего дела.<br> Каждый тренер непрерывно совершенствуется и повышает<br> квалификацию. Благодаря многолетнему опыту и <br>многопрофильному образованию наших преподавателей <br>каждое занятие выстраивается по новому сценарию, творчески и с заботой о каждом клиенте.</p>
    </div>
        <img class="img-trener" src="{{asset('image/image 21.png')}}">
    </div>
    <div class="cartt">
        <div class="carr">
        <div class="cart-2">
        <img src="{{asset('image/ivan.png')}}">
        <h5>Иванов Андрей</h5>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    <div class="cart-2">
        <img src="{{asset('image/ekaterina.png')}}">
        <h5>Варламова Екатерина</h5>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    <div class="cart-2">
        <img src="{{asset('image/nikol.png')}}">
        <h5>Петров Николай</h5>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
</div>
<div class="carr">
    <div class="cart-2">
        <img src="{{asset('image/андрей.png')}}">
        <h5>Иванов Андрей</h5>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    <div class="cart-2">
        <img src="{{asset('image/ekaterina.png')}}">
        <h5>Варламова Екатерина</h5>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    <div class="cart-2">
        <img src="{{asset('image/нп.png')}}">
        <h5>Петров Николай</h5>
        <p>Мастер спорта. Специалист.<br> Профессионал. Красавчик.</p>
    </div>
    </div>
</div>
</div>


<div class="forma-fon">
    <div class="container">
        <div class="forma">
        <h2>Начни свое преображение</h2>
        <img src="{{asset('image/border.png')}}">
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
    <h4>приглашаем в гости</h4>
    <h3>Интерьер в фитнес-центре</h3>
    <div class="cart-interior">
        <div class="img-cart">
            <div class="cart-img-1">
    <img src="{{asset('image/01.png')}}">
</div>
<div class="cart-img-1">
    <img src="{{asset('image/02.png')}}">
</div>
<div class="cart-img-1">
    <img src="{{asset('image/03.png')}}">
</div>
</div>
<div class="img-cart">
    <div class="cart-img-1">
    <img src="{{asset('image/04.png')}}">
</div>
<div class="cart-img-1">
    <img src="{{asset('image/05.png')}}">
</div>
<div class="cart-img-1">
    <img src="{{asset('image/06.png')}}">
</div>
    </div>
</div>
</div>
</div>
<footer>
    <div class="footer-fon">
    <div class="container">
      <div class="footer-main">
        <div class="footer-main-1">
        <div class="img-calendar">
          <div>
        <img src="{{asset('image/CalendarBlank.png')}}" width="20px">
        </div>
        <h5>Понедельник — Пятница: 07:00–23:00<br>
            Суббота — Воскресенье: 09:00–22:00</h5>
            </div>
        <div class="adres">
          <div>
        <img src="{{asset('image/Vector (1).png')}}" width="20px">
        </div>
        <h5>Адрес: г. Батайск, М. Горького, д. 84</h5>
        </div>
        <div class="phone">
          <div>
        <img src="{{asset('image/Vector (2).png')}}" width="20px">
        </div>
        <h5>Телефон: +7 (863) 272–72–77</h5>
        </div>
        <p>Level Fitness это современный фитнес центр в самом<br> центре города Батайска. Оборудованный итальянскими<br> тренажерами и залами для групповых тренировок.</p>
        </div>
        <div class="geolocation" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/10742/noginsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Ногинск</a><a href="https://yandex.ru/maps/10742/noginsk/house/remeslennaya_ulitsa_15/Z0EYcgBmT0wDQFtvfXR2eHVlZA==/?ll=38.476694%2C55.879960&utm_medium=mapframe&utm_source=maps&z=16.91" style="color:#eee;font-size:12px;position:absolute;top:14px;">Ремесленная улица, 15 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=38.476694%2C55.879960&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1Njc5MzYyMhKeAdCg0L7RgdGB0LjRjywg0JzQvtGB0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCR0L7Qs9C-0YDQvtC00YHQutC40Lkg0LPQvtGA0L7QtNGB0LrQvtC5INC-0LrRgNGD0LMsINCd0L7Qs9C40L3RgdC6LCDQoNC10LzQtdGB0LvQtdC90L3QsNGPINGD0LvQuNGG0LAsIDE1IgoNI-gZQhUUhV9C&z=16.91" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
          </div>
      </div>
</div>
</footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>