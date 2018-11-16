<?php 

/*
Template Name: Template-organismes
*/

get_header();?>
   
<?php if( have_posts() ) {
    while( have_posts() ) {
        the_post(); ?>
        <div class="titre-page">
            <h1><?php the_title(); ?></h1>
        </div>    
        <?php if ( have_rows( 'organisme' ) ) : ?>
	        <?php while ( have_rows( 'organisme' ) ) : 
                the_row(); ?>
                    <div class="row">
                        <div class="col-12 organisation all">
		                    <h2><?php the_sub_field( 'titre' ); ?></h2>
		                        <?php the_sub_field( 'contenu' ); ?>
                        </div>
                    </div>
                    <hr>
            <?php endwhile; ?>
                <?php else: ?>
	            <?php _e("ne rien afficher"); ?>
        <?php endif; ?>
    <?php } ?>
<?php }?>

<?php get_footer();?>