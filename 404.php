<?php
/**
 * Modèle index.php représente le modèle par défaut du thème
 */
get_header();
?>

<main class="site__main" style="background-image: url('https://c8.alamy.com/compfr/w1xnc9/erreur-404-page-non-trouvee-vector-plug-avec-design-graphique-modele-de-graphique-d-arriere-plan-du-site-w1xnc9.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <h1>Erreur 404</h1>
        <p>Page introuvable, vous pouvez tenter une recherche</p>
        <div class="recherche__erreur">
            <?= get_search_form(); ?>
        </div>

        <h3>Nos choix de cours</h3>
        <?php
        if (in_category('cours')) {
            $lemenu = "cours";
        }
        wp_nav_menu(array(
            "container" => "nav",
            "menu_class" => "cours-menu"
        ));
        ?>

        <h3>Les notes de cours</h3>
        <?php
        $args = array(
            'category_name' => 'note-wp',
            'post_type' => 'post'
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                $titre = get_the_title();
                $sigle = substr($titre, 0, 4);
                $titre_long = substr($titre, 0, 3);
                
        ?>
                <article class="blocflex__article">
                    <h5><a href="<?php the_permalink(); ?>"> <?= substr($titre, 0, 15); ?></a></h5>
                   
                </article>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
?>
