<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <code>front-page.php</code>
    <h3>index.php</h3>
    <section class="blocflex">
        <?php 
        if (have_posts()):
            while (have_posts()) : the_post(); ?>
        <?php get_template_part("templete/categorie", "note-wp");?>
                
            <?php endwhile; ?>
        <?php endif; ?>   
    </section>
</main> 
<?php get_footer(); ?>

