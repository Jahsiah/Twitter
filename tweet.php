<?php

    $query = "SELECT * FROM posts ORDER BY post_id DESC";
    $data = mysqli_query($con,$query);

    while($row = mysqli_fetch_assoc($data))
    {
        $post_text = $row['post_text'];
        $post_date = $row['post_date'];
?>

<div class="tweet_box">
    <div class="tweet_left">
        <img src="img/avatar.jpg" alt="">
    </div>
    <div class="tweet_body">
        <div class="tweet_body">
            <p class="tweet_name">BloodThoughts</p>
            <p class="tweet_username">@HeartMember667</p>
            <p class="tweet_data"><?php echo $post_date = date ('M d'); ?></p>
        </div>

        <p class="tweet_text"><?php echo $post_text; ?></p>

        <div class="tweet_icons">
            <a href=""><i class="far fa-comment"></i></a>
            <a href=""><i class="fa fa-reply"></i></a>
            <a href=""><i class="far fa-heart"></i></a>
            <a href=""><i class="fa fa-update"></i></a>
            <a href=""><i class="far fa-chart-bar"></i></a>
        </div>
    </div>

    <div class="tweet_del">
        <div class="dropdown">
            <button class="dropbtn"><span class="fa fa-ellipsis-h"></span></button>
            <div class="dropdown-content">
                <a href="index.php?del=<?php echo $row['post_id']; ?>"><i class="far fa-trash-alt"></i> <span>Delete</span></a>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>