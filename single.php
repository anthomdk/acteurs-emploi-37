<?php 

get_header();?>

<?php if( have_posts() ) {
    while( have_posts() ) {
        the_post(); ?>
<div class="titre-page">
    <h1><?php the_title(); ?></h1>
</div>
<div class="row top-publication">
    <div class="col-10 d-flex justify-content-start">
    <div class="publication-titre">Publié le <?php echo get_the_date(); ?> - <?php $catego = get_the_category(); ?><?php echo $catego[0]->name; ?>
        </div>
        <div class="publication-auteur">
            <a href="#"><?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?></a>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="actus d-flex justify-content-between">
            <div class="col-3"><?php the_post_thumbnail(); ?>  
            </div>
            <div class="col-9">
                <div class="separateur2"></div>
                <div class="info-actu">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
   
    <div class="row d-flex zone-btn1">
        <div class="col-2">
            <a href="#" class="btn-border3">
                Modifier
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 post-commentaire">
            <p>Poster un commentaire :</p>
            <form action="">
                <textarea id="msg-user" name="user_message"></textarea>
                <button name="submit" type="submit" id="msg-user-submit" data-submit="...Sending">Envoyez votre message</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center commentaire-titre">
        <p>Commentaire(s)</p>
    </div>
    <div class="row">
        <div class="col-12 zone-commentaire">
            <a href="#">Alphabet Kappa</a>
            <div class="commentaire-date">2 Mai 2018 à 12h15</div>
            <p class="commentaire">Bonjour, plus de détails très prochainement sur ces journées en préparation… Dans
                l’attente, vous pouvez
                aussi me contacter au 0670068414 Cdlt
            </p>
        </div>
    </div>
    <div class="row d-flex zone-btn2">
        <div class="col-2">
            <a href="#" class="btn-border2">
                Modifier
            </a>
        </div>
        <div class="col-2">
            <a href="#" class="btn-full2">
                Répondre
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 zone-commentaire">
            <a href="#">Benattar Johanna</a>
            <div class="commentaire-date">2 Mai 2018 à 12h15</div>
            <p class="commentaire">Je me permets d’apporter des précisions : Ce sera l’occasion de présenter notre tout
                nouveau plateau pédagogique
                en logistique Au programme : Présentation de l’offre de formation Présentation des financements
                possibles
                Intervention sur les prospectives sectorielles de la filière logistique : M. Bruno Leliège (chargé de
                mission Territoire Ressources GPECT) Visite de l’entrepôt 2 temps forts : 8h30 -10h00 : petit-déjeuner
                13h30 – 15h00 : café gourmand Cordialement
            </p>
        </div>
    </div>
    <div class="row d-flex zone-btn2">
        <div class="col-2">
            <a href="#" class="btn-border2">
                Modifier
            </a>
        </div>
        <div class="col-2">
            <a href="#" class="btn-full2">
                Répondre
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 zone-commentaire">
            <a href="#">Arthur Frappas</a>
            <div class="commentaire-date">14 Juin 2018 à 15h04</div>
            <p class="commentaire">Bonjour, plus de détails très prochainement sur ces journées en préparation… Dans
                l’attente, vous pouvez
                aussi me contacter au 0670068414 Cdlt
            </p>
        </div>
    </div>
    <div class="row d-flex zone-btn2">
        <div class="col-2">
            <a href="#" class="btn-border2">
                Modifier
            </a>
        </div>
        <div class="col-2">
            <a href="#" class="btn-full2">
                Répondre
            </a>
        </div>
    </div>
    <div class="row">
        <a href="index.php">
            <div class="col-12 d-flex justify-content-start">
                <div class="retour-actus">retour aux actualités
                </div>
            </div>
        </a>
    </div>






        <?php } ?>
<?php }?>




    <?php get_footer();?>