<?php 
/*
Template Name: Template-ressources documentaires
*/

get_header();?>

<?php if( have_posts() ) {
    while( have_posts() ) {
        the_post(); ?>
        <div class="titre-page">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php if ( have_rows( 'section_ressources' ) ) : ?>
            <?php while ( have_rows( 'section_ressources' ) ) : 
                the_row(); ?>
                <div class="row ressources all">
                    <div class="col-12">
                        <h2><?php the_sub_field( 'section_ressources_titre' ); ?></h2>
                        <?php if ( have_rows( 'ressources' ) ) : ?>
                            <ul>
                            <?php while ( have_rows( 'ressources' ) ) : 
                                the_row(); ?>
                                <li>
                                <?php if ( get_row_layout() == 'ressource_lien' ) : ?>
                                    <a href="<?php the_sub_field( 'url_lien' ); ?>"><?php the_sub_field( 'texte_lien' ); ?></a>
                                <?php elseif ( get_row_layout() == 'ressource_document' ) : ?>
                                    <?php $fichier_document = get_sub_field( 'fichier_document' ); ?>
                                    <?php if ( $fichier_document ) { ?>
                                        <a href="<?php echo $fichier_document['url']; ?>"><?php the_sub_field( 'texte_document' ); ?></a>
                                    <?php } ?>
                                <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php }
} ?>
                                            

<?php get_footer(); ?>






