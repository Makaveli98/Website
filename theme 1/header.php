<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?> <!-- load css file -->
</head>
<body>
    
</body>
</html>

<?php
while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?><h2>
<?php }

?>