<?php 

get_header();?>

<?php if (have_posts() ) {
    while(have_post() ) {
        the_post(); ?>















<?php } ?>
    <?php } ?>

<?php get_footer();?>