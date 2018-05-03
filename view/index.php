<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php
    $pPath = plugin_dir_path( __FILE__ );
    echo $pPath ?>css/style.css">
    <title>Document</title>
</head>
<body>
<header></header>
    <div class="container">
        <div class="select-match-area">
            <select name="matches" id="matches">
                <?php
                $posts = query_posts('post_type=matches');
                    foreach ($posts as $post){
                        echo '<option value="0"> Match:' . the_title() . '</option>';
                    }

//                while(have_posts()): the_post();
//                endwhile;
                ?>
            </select>
            <?php   $pPath = plugin_dir_path( __FILE__ );
            echo '<div>'. $pPath .'</div>';
            ?>
            <div class="seats-area">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
        </div>
    </div>
</body>
</html>
