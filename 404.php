<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron:500,700,900|Gilda+Display" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
<header id="top" class="animated hinge">
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
    <div id="error-container">
        <div class="errortop">
            <div class="doctyp"><span>&lt;!</span>&nbsp;DOCTYPE html&nbsp;<span>&gt;</span></div>
            <div class="htm">&lt;html&gt;</div>
            <div class="styl">&lt;style&gt;</div>
            <p>* {</p>
            <div class="acteuremp">Acteur emploi<span>&nbsp;37&nbsp;</span><span>;</span></div>
            <p>}</p>
            <div class="styl">&lt;style&gt;</div>  
            <div class="bod">&lt;body&gt;</div>
            <div class="errortxt"><p>ERREUR 404 !</p>
            <p>PAGE NON TROUVÉE !</p></div> 
            <div class="comment"><p>&lt;!--The file you are looking for,</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is not where you think it is.--&gt;</p></div>
            <div class="bod">&lt;body&gt;</div>
            <div class="htm">&lt;html&gt;</div>
        </div>
    </div>







<?php wp_footer(); ?>
</body>

</html>
