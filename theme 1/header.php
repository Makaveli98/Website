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
    <nav class="navBar">
        <!-- <img class="logo" src="../Images/screenshot.png"/> -->
    <?php
        wp_nav_menu(array('theme_location' => 'primary nav')); 
        ?>
    </nav>
    <img class="imageSlider" src="<?php header_image(); ?>"/>
</div>