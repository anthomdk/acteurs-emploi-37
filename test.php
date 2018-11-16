   
                                <p><a href="#" class="user-mail"><?php echo $author_info->user_email;?></a></p>







<?php if ( get_field('numero_de_telephone_utilisateur', 'user_' . $author->ID ) || get_field('second_numero_de_telephone_utilisateur', 'user_' . $author->ID ) ) { ?>
<p class="user-tel1">Tél : <?php the_field( 'numero_de_telephone_utilisateur', 'user_' . $author->ID ); ?>
<?php if ( get_field('numero_de_telephone_utilisateur', 'user_' . $author->ID ) && get_field('second_numero_de_telephone_utilisateur', 'user_' . $author->ID ) ) { ?>
    &nbsp;&nbsp;ou&nbsp;&nbsp;
<?php } ?>
<?php the_field( 'second_numero_de_telephone_utilisateur', 'user_' . $author->ID ); ?></p>
<?php } ?>
