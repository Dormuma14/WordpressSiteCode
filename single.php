<?php get_header();

    while(have_posts()){
        the_post(); ?>
    <?php the_content(); ?>
    <hr>
    <?php }
    get_footer();
?>