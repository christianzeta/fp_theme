<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        wp_head();
    ?>
</head>
<body>
    <div id="main-container">
        <header id="main-header">
            <h1><?php the_field('change_page_title') ?></h1>
        </header>