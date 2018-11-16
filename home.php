<?php get_header();?>


<main>
    <div class="container">
        <div class="titre-page">
            <h1>Actualités</h1>
        </div>
        <div class="row fonction1 d-flex">
            <div class="col-2">
                <a href="#" class="btn-full filtrer">
                    filtrer
                </a>
            </div>
            <div class="col-2">
                <a href="#" class="btn-border">créer article
                </a>
            </div>
            <div class="col-2">
                <a href="#" class="btn-border">mode d'emploi</a>
            </div>
        </div>
            <div class="row">
                <?php if(have_posts() ) {
                    while (have_posts() ) {
                    the_post() ; 
                    global $post;
                    $postcat = get_the_category( $post->ID );?>
                        <div class="col-4">
                            <a href="<?php the_permalink(); ?>">
                                <div class="post-actus formations">
                                    <div class="post-top d-flex">
                                        <div class="localisation bleu">
                                            <img src="<?php the_field('picto_de_localisation', 'category_' . $postcat[0]->term_id ); ?>">
                                        </div>
                                        <div class="bassin"><?php the_field( 'bassin' ); ?></div>
                                        <div class="date">Publié le <?php echo get_the_date(); ?></div>
                                    </div>
                                    <div class="post-contenu flex-direction-column mrba">
                                        <h2 class="post-titre"><?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?></h2>
                                        <div class="separateur">
                                        </div>
                                        <div class="post-extrait mrba"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></div>
                                    </div>
                                    <div class="post-img post-bleu d-flex flex-column justify-content-between
                                    align-items-center" style="background-color: <?php the_field('categorie_couleur', 'category_' . $postcat[0]->term_id ); ?>">
                                    <img src="<?php the_field('picto_categorie', 'category_' . $postcat[0]->term_id ); ?>">
                                        <!-- <img src="svg/Group-formation.svg"> -->
                                        <p class="categorie"><?php the_category(','); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }
                } ?>
    </div>
    <ul class="pagination d-flex justify-content-center">
        <li>
            <a class="flechenot" href="#">
                <div class="fleche d-flex justify-content-center align-items-center">
                <img src="<?php echo bloginfo("template_url") ?>/svg/fleche-precedent.svg">
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="active d-flex justify-content-center align-items-center">1</a>
        </li>
        <li>
            <a href="#" class="d-flex justify-content-center align-items-center">2</a>
        </li>
        <li>
            <a href="#" class="d-flex justify-content-center align-items-center">3</a>
        </li>
        <li>
            <a href="#" class="d-flex justify-content-center align-items-center">4</a>
        </li>
        <li>
            <a href="#" class="d-flex justify-content-center align-items-center">5</a>
        </li>
        <li>
            <a class="flechenot" href="#">
                <div class="fleche active d-flex justify-content-center align-items-center">
                     <img src="<?php echo bloginfo("template_url") ?>/svg/fleche-suivant.svg">
                </div>
            </a>
        </li>
    </ul>
    <div class="row fonction2 d-flex justify-content-center">
        <div class="col-2">
            <a href="#" class="btn-border">créer article
            </a>
        </div>
        <div class="col-3">
            <a href="#" class="btn-full agenda">
                agenda
            </a>
        </div>
        <div class="col-2">
            <a href="#" class="btn-border">mode d'emploi</a>
        </div>
    </div>
    </div>
    <div class="separateur2"></div>
</main>
<?php require 'footer.php';?>