<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style/style.css">
<?php
$con=mysqli_connect("localhost","root","","teamwork");
header("Content-Type: text/html; charset=utf-8");
$con->character_set_name();
//session_start();
//if($_SESSION['isLogged']){
//    echo 'Hello '.$_SESSION['user'].' you are logged in.'.'<a href="logout.php">Logout</a>';
//}
//else{
//    echo 'Hello Guest. Please <a href="login.html">Login</a> or <a href="Register.html">Register</a>.';
//}
if (!$con->set_charset("utf8")) {
   // printf("Error loading character set utf8: %s\n", $con->error);
} else {
 //   printf("Current character set: %s\n", $con->character_set_name());
}
$sections=mysqli_query($con,'SELECT * FROM `section`');
while($row = mysqli_fetch_assoc($sections))
{?>

<section>
    <div class="mainTitle"><?=$row['section_name']?></div>
    <div >
        <div class="title">Форум</div>
        <div class="theme">Теми</div>
        <div class="answer">Отговори</div>
        <div class="lastAnswer">Последен отговор</div>
    </div>
    <?php
    $topics=mysqli_query($con,'SELECT * FROM `topic` WHERE `section_ID` = "'.$row['section_ID'].'"');
    while($row = mysqli_fetch_assoc($topics))
    { $themes=mysqli_query($con,'SELECT * FROM `theme` WHERE `topic_ID` = "'.$row['topic_ID'].'"');
    ?>
    <article>
        <div class="title"><a href="topic.php?topic=<?=$row['topic_ID']?>"><?=$row['topic_name']?></a></div>
        <div class="theme"><?=mysqli_num_rows($themes)?></div>
        <div class="answer">1245</div>
        <div class="lastAnswer"><div>22-08-2014, 15:59</div>
            Тема:  Last PostIT Село
            Последно: eXiLe</div>
        <div class="info"><?=$row['topic_info']?></div>
    </article>
<?php } ?>
</section>
<?php
}die();
?>
<DOCTYPE html>
<html>
<head>
    <title>Forum</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div id="wrapper">
        <header>
    <!--        here include header.php file-->
        </header>
        <section>
            <div class="mainTitle">Общ Форум</div>
            <div >
                <div class="title">Форум</div>
                <div class="theme">Теми</div>
                <div class="answer">Отговори</div>
                <div class="lastAnswer">Последен отговор</div>
            </div>
            <article>
                <div class="title"><a href="#">За Форума</a></div>
                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
                <div class="info">Новини, мнения, оплаквания и предложения за форума.</div>
            </article>
            <article>
                <div class="title"><a href="#">Обяви за работа</a></div>
                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
                <div class="info">Aко търсите програмист или дизайнер, тук ще намерите точния човек.</div>
            </article>
            <article>
                <div class="title"><a href="#">Разни</a></div>
                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
                <div class="info">Всякакви теми, които не са свързани с останалите форуми.</div>
            </article>
            <article>
                <div class="title"><a href="#">Мрежови комуникации и технологии</a></div>

                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
                <div class="info">Протоколи, сървъри, мрежи, услуги и др.</div>
            </article>
        </section>
        <section>
            <div class="mainTitle">Програмиране</div>
            <div>
                <div class="title">Форум</div>
                <div class="theme">Теми</div>
                <div class="answer">Отговори</div>
                <div class="lastAnswer">Последен отговор</div>
            </div>
            <article>
                <div class="title"><a href="#">C/C++</a></div>
                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
            </article>
            <article>
                <div class="title"><a href="#">Java</a></div>
                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
            </article>
            <article>
                <div class="title"><a href="#">HTML/CSS/JavaScript</a></div>
                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
            </article>
            <article>
                <div class="title"><a href="#">PHP/Perl/Python/ASP</a></div>
                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
            </article>
            <article>
                <div class="title"><a href="#">Linux</a></div>
                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
            </article>
        </section>
        <section>
            <div class="mainTitle">Искуства</div>
            <div >
                <div class="title">Форум</div>
                <div class="theme">Теми</div>
                <div class="answer">Отговори</div>
                <div class="lastAnswer">Последен отговор</div>
            </div>
            <article>
                <div class="title"><a href="#">Илюстрации</a></div>

                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
                <div class="info">Място за обсъждане на графични ви решения.</div>
            </article>
            <article>
                <div class="title"><a href="#">Фотография</a></div>

                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
                <div class="info">Снимки, бленди, филми и всичко за фотографското изкуство</div>
            </article>
            <article>
                <div class="title"><a href="#">Лого / Графичен дизайн</a></div>

                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div>22-08-2014, 15:59</div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
                <div class="info">Изработване, цветове, форми.</div>
            </article>
            <article>
                <div class="title"><a href="#">3D</a></div>

                <div class="theme">234</div>
                <div class="answer">1245</div>
                <div class="lastAnswer"><div><div>22-08-2014, 15:59</div></div>
                    Тема:  Last PostIT Село
                    Последно: eXiLe</div>
                <div class="info">Всичко свързано с 3d технологиите</div>
            </article>
        </section>
    <footer>
<!--        here is include footer.php file-->
    </footer>
    </div>
</body>
</html>