<?php 
/*
Template Name: Template-contact
*/

get_header();?>

        <?php if(have_posts() ) {
            while (have_posts() ) {
                the_post() ;?>
        <div class="titre-page">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="row contact justify-content-center">
            <div class="col-10 info-formulaire">
            <?php the_field( 'presentation-contact' ); ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="contact-tab col-8 justify-content-center tac">
            <?php the_field( 'responsable-contact' ); ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="formulaire-contact col-8  justify-content-center">
                <form id="contact" action="" method="post">
                <h3>Formulaire de contact</h3>
                <?php the_field( 'formulaire-contact' ); ?>
                </form>
            </div>
        </div>
</main>

<?php }
    } ?>

<?php get_footer(); ?>