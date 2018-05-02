<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<header></header>
    <div class="container">
        <div class="select-match-area">
            <select name="matches" id="matches">
                <option value="1">Vorskla - Zorya</option>
            </select>
            <select name="stadions" id="stadions">
                <option value="1">stadion 1</option>
                <option value="1">stadion 2</option>
            </select>
        </div>

        <div class="seats-area">
            <?php for ($i=0; $i<100; $i++)
                echo ('<div class="saet"></div>');
                ?>
        </div>
    </div>
</body>
</html>
