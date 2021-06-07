<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php get_header(); ?>

<?php 
 while (have_posts()) {
    the_post();
    the_content();
}
?>

<!-- <div class="tvg-background">
    <section class="tvg-title"> Tevreden gasten </section>
    <section class="tvg-text"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam"</section>
    <button class="reserveer-knop"> Reserveer nu </button>
</div> -->

<?php get_footer();?>
    
</body>
</html>
 