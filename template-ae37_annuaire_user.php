<?php 
/**
 * Template Name: Annuaire utilisateurs
 */
get_header();?>

    <div class="titre-page">
        <h1><?php the_title(); ?></h1>
        </div>
        <div class="row justify-content-center">
            <div class="alphabet">
                <ul>
                    <li>
                        <a href="#">A</a>
                        <a href="#">B</a>
                        <a href="#">C</a>
                        <a href="#">D</a>
                        <a href="#">E</a>
                        <a href="#">F</a>
                        <a href="#">G</a>
                        <a href="#">H</a>
                        <a href="#">I</a>
                        <a href="#">J</a>
                        <a href="#">K</a>
                        <a href="#">L</a>
                        <a href="#">M</a>
                        <a href="#">N</a>
                        <a href="#">O</a>
                        <a href="#">P</a>
                        <a href="#">Q</a>
                        <a href="#">R</a>
                        <a href="#">S</a>
                        <a href="#">T</a>
                        <a href="#">U</a>
                        <a href="#">V</a>
                        <a href="#">W</a>
                        <a href="#">X</a>
                        <a href="#">Y</a>
                        <a href="#">Z</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <form action="" method="get" class="col-5">
                <input type="search" placeholder="Renseignez les premières lettres du Nom">
            </form>
        </div>
      
       <div class="row justify-content-center">
            <div class="annuaire-block col-6">
                <?php
               
                //WP_User_Query arguments
                $args = array (
                    'role__not_in' => 'Administrator',
                );
                // Create the WP_User_Query object
                $wp_user_query = new WP_User_Query( $args );

                // Get the results

                // Check for results
                if ( ! empty( $wp_user_query->results ) ) {
                    echo '<ul class="utilisateur-case d-flex flex-column">';
                    // loop through each author
                    foreach ( $wp_user_query->results as $author ) {
                        // get all the user's data
                        $author_info = get_userdata( $author->ID ); ?>
                        <li>
                            <button class="accordion user-name"><?php echo $author_info->last_name . ' ' . $author_info->first_name; ?></button>
                            <div class="user-content">
                                <p class="user-post"><?php the_field( 'poste_utilisateur', 'user_' . $author->ID ); ?></p>
                                <?php if ( get_field( 'numero_de_telephone_utilisateur', 'user_' . $author->ID ) || get_field('second_numero_de_telephone_utilisateur', 'user_' . $author->ID ) ) { ?>
                                <p class="user-tel">Téléphone : <?php the_field( 'numero_de_telephone_utilisateur', 'user_' . $author->ID ); ?>
                                <?php if ( get_field('numero_de_telephone_utilisateur', 'user_' . $author->ID ) && get_field('second_numero_de_telephone_utilisateur', 'user_' . $author->ID ) ) { ?>
                                    &nbsp;&nbsp;ou&nbsp;&nbsp;
                                <?php } ?>
                                <?php the_field( 'second_numero_de_telephone_utilisateur', 'user_' . $author->ID ); ?></p>
                                <?php } ?>
                                    <p>Email : <a href="#" class="user-mail"><?php echo $author_info->user_email;?></a></p>
                                <?php if ( get_field( 'seconde_adresse_messagerie_utilisateur', 'user_' . $author->ID ) ) { ?>
                                    <p>Email n°2 : <a href="#" class="user-mail2"><?php the_field('seconde_adresse_messagerie_utilisateur', 'user_' . $author->ID ); ?></a></p>
                                <?php } ?> 
                                <a href="#"><div class="user-publications"><?php echo count_user_posts($author->ID); ?> publication(s)</div></a>
                                <?php if ( get_field( 'autres_renseignements_utilisateur', 'user_' . $author->ID ) ) { ?>
                                    <p class="user-other-content"><?php the_field( 'autres_renseignements_utilisateur', 'user_' . $author->ID ); ?></p>
                                <?php } ?>        
                            </div>
                        </li>
                        <hr>
                    <?php }
                    echo '</ul>';
                } else {
                    echo 'Aucun utilisateur trouvé';
                }?>
            </div>
        </div>
        <div class="row">
            <div class="col-9 d-flex justify-content-end">
                <a href="#" class="btn-full3 offset-md-9">Afficher tout</a>
            </div>
        </div>

<?php get_footer();?>