<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is my header</title>
    <?php wp_head(); ?> <!-- load css file -->
</head>
<body>
<div class="homePage">

    <header class="topBar">
        <h3 class="language"> Language </h3>
    </header>
       <?php 
       the_custom_logo();
       wp_nav_menu(array(
            'theme_location' => 'primary nav',
            'menu_class' => 'primary-menu'
        )); 
        ?>
    <img class="image_slider" src="<?php header_image(); ?>"/>
    
</div>