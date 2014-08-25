<?php header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style/style.css">
<?php
$con=mysqli_connect("localhost","root","","teamwork");
$topicID=$_GET['topic'];
if (!$con->set_charset("utf8")) {
    // printf("Error loading character set utf8: %s\n", $con->error);
} else {
    //   printf("Current character set: %s\n", $con->character_set_name());
}

$topic=mysqli_query($con,'SELECT * FROM `topic` WHERE `topic_ID`= "'.$topicID.'"');
while($row = mysqli_fetch_assoc($topic))
{?>
<a href="new_theme.php?topic=<?=$topicID?>">New Theme</a>
    <section>
        <div class="mainTitle"><?=$row['topic_name']?></div>
        <div >
            <div class="title">Форум</div>
            <div class="answer">Отговори</div>
            <div class="lastAnswer">Последен отговор</div>
        </div>
        <?php
        $topics=mysqli_query($con,'SELECT * FROM `theme` WHERE `topic_ID` = "'.$row['topic_ID'].'"');
        while($row = mysqli_fetch_assoc($topics))
        {$themes=mysqli_query($con,'SELECT * FROM `message` WHERE `theme_ID` = "'.$row['theme_ID'].'"');
            $last=mysqli_query($con,'SELECT * FROM `message` WHERE `theme_ID` = "'.$row['theme_ID'].'"ORDER BY `message_ID` DESC LIMIT 1');
            $last=mysqli_fetch_assoc($last);
            ?>

            <article>
                <div class="title"><a href="message.php?theme=<?=$row['theme_ID']?>"><?=$row['theme_name']?></a></div>
                <div class="answer"><?=mysqli_num_rows($themes);?></div>
                <div class="lastAnswer"><div><?=$last['message_User']?></div>
<?=$last['message_Data']?></div>
                <div class="info"><?=$row['theme_info']?></div>
            </article>
        <?php } ?>
    </section>
<?php
}
?>