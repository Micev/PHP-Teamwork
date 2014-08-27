<?php
require("header.php");
header("Content-Type: text/html; charset=utf-8");
$con->character_set_name();
if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $con->error);
}
$sections=mysqli_query($con,'SELECT * FROM `section`');
while($row = mysqli_fetch_assoc($sections))
    {?>
        <section>
            <div class="mainTitle"><?=$row['section_name']?></div>
            <div >
                <div class="title">Forum</div>
                <div class="theme">Theme</div>
                <div class="answer">Answer</div>
                <div class="lastAnswer">Last answer</div>
            </div>
        <?php
        $topics=mysqli_query($con,'SELECT * FROM `topic` WHERE `section_ID` = "'.$row['section_ID'].'"');
        while($row = mysqli_fetch_assoc($topics))
            {
                $themes=mysqli_query($con,'SELECT * FROM `theme` WHERE `topic_ID` = "'.$row['topic_ID'].'"');
                $asdf=mysqli_query($con,'SELECT * FROM message, theme WHERE theme.topic_ID = "'.$row['topic_ID'].'" AND message.theme_ID = theme.theme_ID ORDER BY `message_ID` DESC');
                $ss=mysqli_fetch_assoc($asdf);
                ?>
                <article>
                    <div class="title"><a href="topic.php?topic=<?=$row['topic_ID']?>"><?=$row['topic_name']?></a></div>
                    <div class="theme"><?=mysqli_num_rows($themes)?></div>
                    <div class="answer"><?=mysqli_num_rows($asdf)?></div>
                    <div class="lastAnswer">
                        <div>Date: <?=$ss['message_Data']?></div>
                        <p>Theme:  <?=$ss['theme_name']?></p>
                        <p>Last: <?=$ss['message_User']?></p>
                    </div>
                    <div class="info"><?=$row['topic_info']?></div>
                </article>
<?php       }
?>
        </section>
<?php
    }
require("footer.php");
die();
?>
