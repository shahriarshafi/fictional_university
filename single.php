<?php
get_header();
 while(have_posts()){
    the_post();
    ?>
    <h1><?php the_title()?></h1>
    <h4><?php the_content()?></h4>
    <?php
 }
get_footer();
?>