<?php 
function ae37_setup() {
  
/* Support de la traduction */
  load_theme_textdomain( 'ae37', get_template_directory() . '/langages' );

/* Activation des flux RSS */
  add_theme_support( 'automatic-feed-links' );

/* Ajouter image à la une */
  add_theme_support( 'post-thumbnails' );

/* Ajouter d'une taille spécifique d'image */
    // add_image_size( 'blog-list', 350, 250, true );
    // add_image_size( 'members-pics', 540, 300, true );

/* Support de la balise title automatique */
    add_theme_support( 'title-tag');

/* Activation du balisage HTML5 */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));

/* Initialisation des menus */
    register_nav_menus(
      array(
          'menu-1' => esc_html( 'Principal', 'ae37' ),
          'menu-2' => esc_html( 'Pied de page', 'ae37' ),
      )
    );
  }
  /* Initialisation du theme */
  add_action( 'after_setup_theme', 'ae37_setup' );


/* Chargement de feuilles de styles et des scripts */
function ae37_enqueue_scripts_and_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Nunito:700|Roboto:400,500,700|Bitter' );
    wp_enqueue_style( 'css', get_template_directory_uri() . '/css/monstyle.css', array( 'fonts', 'bootstrap' ) );
    wp_enqueue_script( 'backtotop', get_template_directory_uri() . '/js/script-backtotop.js', '', '', true );
    wp_enqueue_script( 'search', get_template_directory_uri() . '/js/script-search.js', array('jquery'), '', true );
    wp_enqueue_script( 'accordion-coucou',  get_template_directory_uri() . '/js/script-accordion.js', array('jquery'),  '', true );
    wp_enqueue_script( 'particle',  get_template_directory_uri() . '/js/particles-2.js', '',  '', true );
    
    if ( is_page_template( 'archives.php' )) {
            wp_enqueue_script( 'src-archives', get_template_directory_uri() .'/js/script-archive.js', '', '', true ); }
 
}

register_nav_menus(
    array(
        'menu-1' => esc_html( 'Primary', 'ae37' ),
        'menu-2' => esc_html( 'secondary', 'ae37
        ' ),
    )
  );

add_action( 'wp_enqueue_scripts', 'ae37_enqueue_scripts_and_styles' );

// //longueur extrait
// function custom_excerpt_length( $length ) {
//   return 10;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length' );


function checktoradio(){
  echo '<script type="text/javascript">jQuery("#categorychecklist-pop input, #categorychecklist input, .cat-checklist input").each(function(){this.type="radio"});</script>';
}
add_action('admin_footer', 'checktoradio');


//Creation CPT
// function create_posttype() {
//     register_post_type( 'ae37_organismes',
//       array(
//         'labels' => array(
//           'name' => __( 'Organismes' ),
//           'singular_name' => __( 'Organisme' )
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'rewrite' => array('slug' => 'organismes'),
//       )
//     );
//   }
//   add_action( 'init', 'create_posttype' );

function create_posttype() {
  register_post_type( 'ae37_annuaire_struc',
  array(
    'labels' => array(
      'add_new_item' => __( 'Ajouter une structures' ),
      'name' => __( 'Annuaire-structures' ),
      'singular_name' => __( 'Annuaire-structures' )
    ),
    'public' => true,
    'has_archive' => true,
  )
);
}
add_action( 'init', 'create_posttype' );











