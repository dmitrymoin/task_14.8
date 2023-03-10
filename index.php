<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Спа Салон</title>
    </head>

    <body>
        <div class="container">

        <div class="spa-logo">
            <img src="img/spa-logo.jpg" alt="Логотип">
        </div>

        <?php 
        include 'functions.php';

        if (!getCurrentUser()) { ?>
            <div class="btn-login-index">
                <input type="button" value="Личный кабинет" onClick='location.href="login.php"'>
            </div>
        <?php } ?>
         
    <header>

        <h1>Spa salon</h1>
        <hr>

        <?php 
            if (getCurrentUser()) {
                 echo '<div class="echo-index">Добро пожаловать, <span>' . $_SESSION['login'] . '!</span><br>Здесь находится ваш личный кабинет.<br><br><a href="logout.php">Выход</a></div>'; 
            }
        ?>

        <hr>
        <p class="index-text">Добро пожаловать в наш спа-салон! Мы рады приветствовать вас в нашем уютном уголке релаксации и красоты.<br>В нашем салоне вы всегда можете в полной мере насладиться приятной атмосферой, программами по уходу за лицом и телом, оздоровительными процедурами, выполняемыми профессиональными мастерами, а также окунуться в мир гармонии и удовольствия, забыть о повседневных проблемах и трудностях. У нас вы найдете широкий выбор спа-программ, разработанных как для решения определенной цели, так и направленных на общее расслабление и оздоровление.<br>Наша команда специалистов всегда готова помочь вам выбрать наиболее подходящие процедуры, которые подчеркнут вашу индивидуальность и красоту.</p>
        <br>
        <h2>Наши услуги:</h2>
       
        <div class="wrap-index">
            <div class="content-index">
                <h4>Классический массаж спины</h4>
                <img src="img/spa-classic.jpg" alt="">
                <p>Массаж спины является одним из наиглавнейших, во время его проведения мышцы спины освобождаются от напряжения, улучшается кровообращение, улучшается ток лимфы.
                <br>Классический массаж спины подходит для предотвращения повышенного мышечного тонуса, старательно освобождает ткани спины от стресса и напряжения.</p>
                <div class="btn-more-index"><button type="button">Подробнее</button></div>
            </div>
    
            <div class="content-index">
                <h4>Массаж горячими камнями</h4>
                <img src="img/spa-stone.jpg" alt="">
                <p>Массаж делается базальтовыми камнями, которые образовались из затвердевшей магмы. Учитывая индивидуальное чувство температуры человека, камни нагревают до 50 градусов.
                <br>Массаж горячими камнями обладает великолепным терапевтическим эффектом - улучшает циркуляцию крови и обмен веществ. Также благоприятно влияет как на периферическую, так и на центральную нервную систему.</p>
                <div class="btn-more-index"><button type="button">Подробнее</button></div>
            </div>

            <div class="content-index">
                <h4>Медовый массаж <br><br></h4>
                <img src="img/spa-honey.jpg" alt="">
                <p>Массаж с использованием меда позволяет улучшить кровообращение, избавиться от шлаков и активизировать обмен веществ в клетках. Медовый массаж используется в рамках антицеллюлитной программы.
                <br>Резкое улучшение кровообращения в глубоких слоях кожи и подлежащих мышцах способствует улучшению питания внутренних органах и тканей. Кожа после применения медового массажа становится шелковистой и упругой.</p>
                <div class="btn-more-index"><button type="button">Подробнее</button></div>
            </div>
        </div>

        <div class="wrap-index">
            <div class="content-index">
                <h4>Relax массаж <br> «Анти стресс»</h4>
                <img src="img/spa-relax.jpg" alt="">
                <p>Актуальная процедура, чтобы избавиться от повседневного, накопившегося чувства усталости и стресса.
                <br>В процессе необыкновенного массажа появляется чувство гармонии и наслаждения от чарующего аромата арома масел.</p>
                <div class="btn-more-index"><button type="button">Подробнее</button></div>
            </div>
    
            <div class="content-index">
                <h4>Массаж головы и лица<br><br></h4>
                <img src="img/spa-head.jpg" alt="">
                <p>Дарит ровный и сияющий цвет кожи, подчеркивает контур лица, снимает отечность и темные круги под глазами.
                <br> Массаж головы и лица расслабляет кожу лица, что способствует разглаживанию морщин и складок, снимается напряжение мышц лица, улучшают мышечный тонус и усиливают естественный обмен веществ.</p>
                <div class="btn-more-index"><button type="button">Подробнее</button></div>
            </div>

            <div class="content-index">
                <h4>Массаж для двоих<br><br></h4>
                <img src="img/spa-pair.jpg" alt="">
                <p>Побалуйте себя вместе с любимым человеком, выбрав отдых в спа и массаж для двоих! Романтическая атмосфера и релаксирующие процедуры помогут обрести гармонию и внести новые ощущения в ваш мир отношений. Создайте новые вспоминания вместе!</p>
                <div class="btn-more-index"><button type="button">Подробнее</button></div>
            </div>
        </div>
        <hr>
    </header>
    <footer>
        <div class="links">
            <a href="#">Контакты</a>
            <a href="#">Вакансии</a>
            <a href="#">Реклама</a>
        </div>
    </footer>
        </div>
    </body>
</html>