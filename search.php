<?php
/**
    Modèle search.php pour afficher les resultats de recherche
*/
get_header() ?>
<main>
    <code>search.php</code>
    <sectiom class="recherche">
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        //the_title('<h1>','</h1>');
        //the_permalink(); ?>
        <article>
        <h1><a href="<?php the_permalink(); ?>"><?= get_the_title();  ?> </a></h1>

      
        <?= wp_trim_words(get_the_excerpt(), 30);?>
        <hr>
        
        </article>
        <?php
    endwhile;
endif;
?>  
</sectiom> 
</main> 
<?php get_footer(); ?>

