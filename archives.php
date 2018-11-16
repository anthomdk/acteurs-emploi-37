<?php
/*
Template Name: Template-archives
*/
get_header(); ?>

<?php if(have_posts()) {
    while(have_posts()) {
        the_post(); ?>
         <div class="titre-page">
            <h1><?php the_title();?></h1>
        </div>
        
        <div class="row justify-content-center">
            <div class="archives-menu col-12 d-flex">
            
            <?php if (have_rows('archives')) { 
                $i=0;
                while (have_rows('archives')) {
                    the_row();
                    $theme='letheme'.$i;

                    if ($i == 0) {$class=" encours ";} else {$class="";} ?>
                    <button class="archives-button<?php echo $class; ?>" onclick="openArchive('<?php echo $theme;?>',this)">
                        <span><?php the_sub_field('onglet_titre'); ?></span>
                    </button>     

                <?php $i++;
                }
            } ?>
            
            </div>
        </div>
        
        <?php if ( have_rows( 'archives' ) ) { 
            $j=0; ?>
            <?php while ( have_rows( 'archives' ) ) {  
                the_row(); 

                $theme='letheme'.$j; ?>
                <div class="row archive <?php echo $class; ?>" id="<?php echo $theme; ?>">
                                <div class="archives-content all col-12 ">
                            <?php
                    if ( have_rows( 'archive_detail' ) ) {
                        while ( have_rows( 'archive_detail' ) ) {   
                            the_row();

                            if ($j == 0) {$class=" affiche ";} else {$class="";} 
                            //var_dump(get_row_layout());
                            ?>
                <div>
<?php

if(get_row_layout() == 'archives_contenu') {

    // Si c'est du contenu
    the_sub_field( 'archives_texte' ); 
}

if(get_row_layout() == 'archives_lien') {
 // Si c'est un lien
  the_sub_field( 'texte_lien' ); 
  the_sub_field( 'url_lien' );
} 

if(get_row_layout() == 'archives_document') {
// Si c'est un document
 the_sub_field( 'texte_document' ); 
 $fichier_document = get_sub_field( 'fichier_document' ); 
 if ( $fichier_document ) { ?>
    <a href="<?php echo $fichier_document['url']; ?>"><?php echo $fichier_document['filename']; ?></a>
 <?php } 
}

?>

<?php
?>
</div>
                              
<?php }
} else {
    echo 'No layouts found';
    }
    ?>

    </div>
  </div>

                 <?php
                $j++;
            }
        } 
     }
} ?>
      
<?php get_footer(); ?>