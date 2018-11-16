<?php 

get_header();?>

<?php if (have_posts() ) {
    while(have_post() ) {
        the_post(); ?>
        <div class="titre-page">
            <h1>Artcile(s) de <?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?></h1>
        </div>
            <div class="row organisation all">
                <div class="col-12">
                    <h2>Rôle et missions du SPE-D</h2>
                    <p>L’organisation du service public de l’emploi (SPE) en Indre-et-Loire évolue selon les dispositions de l’instruction
                        du Gouvernement du 15 juillet 2014 . En appui de la stratégie régionale pour l’emploi, le service public
                        de l’emploi au niveau départemental (SPE-D) devient l’instance de concertation des acteurs pour ce territoire.</p>
                    <br>
                    <p>
                        Dans ce cadre, l’outil numérique collaboratif a vocation à s’élargir aux acteurs de l’emploi. de la formation professionnelle
                        et du développement économique œuvrant sur le département de l’Indre et Loire.</p>
                </div>
            </div>
            <hr>

    <?php } ?>
<?php } ?>
<?php 

get_footer();?>