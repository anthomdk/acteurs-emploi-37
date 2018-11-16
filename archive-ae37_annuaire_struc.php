<?php 
get_header();
?>

<?php $args = array(
    'post_type' => 'ae37_annuaire_struc',
    'order' => 'ASC',
    'posts_per_page' => 10,
);

$the_query = new WP_Query($args);

if( $the_query->have_posts() ) { ?>

        
        <div class="titre-page">
        <h1><?php echo post_type_archive_title(); ?></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 d-flex justify-content-between">
                <div class="btn-full4 col-3">filtrer activités</div>
                <form action="" method="get" class="col-5">
                    <input type="search" placeholder="Rechercher une structure">
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="annuaire-block col-10">
                <ul class="utilisateur-case d-flex flex-column">
                <?php while( $the_query->have_posts() ) {
            $the_query->the_post(); ?>
                    <li>
                        <button class="accordion structure-name"><?php the_title(); ?></button>
                        <div class="structure-content">
                            <?php $logo_image_de_la_structure = get_field( 'logo_image_de_la_structure' ); ?>
                            <?php if ( $logo_image_de_la_structure ) { ?>
                                <?php $size = 'thumbnail';
	                            $thumb = $logo_image_de_la_structure['sizes'][ $size ]; ?>
                                <img src="<?php echo $thumb; ?>" alt="<?php echo $logo_image_de_la_structure['alt']; ?>"  class="vignette" />
                            <?php } ?>
                            <p class="structure-type">Type de la structure :</p>
                            <p><?php the_field( 'type_de_la_structure' ); ?></p>
                            <p class="structure-activite">Activités de la structure :</p>
                            <p><?php the_field( 'activite_de_la_structure' ); ?></p>
                            <p class="structure-description">Description :</p>
                            <?php the_field( 'description_de_la_structure' ); ?>
                            <?php if ( get_field( 'nom_du_contact') ) { ?>
                                <p class="structure-nom">Nom du contact :</p>
                                <p><?php the_field( 'nom_du_contact' ); ?></p>
                            <?php } ?>
                            <?php if ( get_field('numero_de_telephone_du_la_personne_a_contacter') || get_field('second_numero_de_telephone_du_la_personne_a_contacter') ) { ?>
                                <p class="structure-tel">Téléphone :</p>
                                <p><?php the_field( 'numero_de_telephone_du_la_personne_a_contacter' ); ?>
                                <?php if ( get_field('numero_de_telephone_du_la_personne_a_contacter') && get_field('second_numero_de_telephone_du_la_personne_a_contacter') ) { ?>
                                    &nbsp;&nbsp;ou&nbsp;&nbsp;
                                <?php } ?>
                                <?php the_field( 'second_numero_de_telephone_du_la_personne_a_contacter' ); ?></p>
                            <?php } ?>
                            <p class="structure-mailT">Email :</p>
                            <p>
                                <a href="mailto:agir-pour-lemploi@wanadoo.fr" class="structure-mail"><?php the_field( 'adresse_de_messagerie_de_la_personne_a_contacter' ); ?></a>
                            </p>
                            <p class="structure-adresse">Adresse postale :</p>
                            <p><?php the_field( 'adresse_postale_de_la_structure' ); ?></p>
                            <p class="structure-codepostal">Code postal :</p>
                            <p><?php the_field( 'code_postal_de_la_structure' ); ?></p>
                            <p class="structure-ville">Ville :</p>
                            <p><?php the_field( 'ville_de_la_structure' ); ?></p>
                            <p class="structure-pays">Pays :</p>
                            <p><?php the_field( 'pays_de_la_structures' ); ?></p>
                            <hr>
                            <div class="map">
                                <p>Localisez nous</p>
                                <?php the_field('open_street_map'); ?>
                            </div>
                            <br>
                            <div class="agrandir"><a href="https://www.openstreetmap.org/?mlat=47.47320&amp;mlon=-0.59837#map=19/47.47320/-0.59837">Cliquez pour agrandir la carte</a>
                                </div> 
                        </div>
                    </li>
                    <hr>
            <?php } ?>

                    
                
                </ul>
            </div>
  

            <?php } ?>
<?php get_footer() ;?>