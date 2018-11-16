<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="top" class="particle-canvas">
        <div class="container-fluid">
            <div class="row mrgn">
                <div class="logo col-auto">
                    <img src="<?php echo bloginfo("template_url") ?>/svg/logo-acteur-whb.svg">
                </div>
                <div class="titre col-6">
                    <p class="acteur-titre">Acteurs Emploi 37</p>
                    <p class="acteur-soustitre">Intelligence collective au service de l'emploi</p>
                </div>
            </div>
            <nav>
                <div class="row mrgn">
                    <div class="col-11 align-items-strech">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'container'      => false,
                                'menu_class'     => 'navbar d-flex justify-content-between align-items-center',
                            )
                        ); ?>
                    </div>
                    <div class="col-1">
                        <div class="search-bar">
                            <form action="" method="get" class="search22">
                                <input type="search" placeholder="Rechercher">
                            </form> 
                        </div>
                        <div class="search">
                            <div class="search-icon"></div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-start">
                    <div class="breadcrumb">
                        <?php if(function_exists('bcn_display') && !is_front_page()) {
                            bcn_display();
                        }?>
                    </div>
                </div>
            </div>
                