<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    
    <h1>Erreur 404</h1>
    <p>Page introuvable,vous pouvez tenter une recherche</p>
    <?= get_search_form(); ?>
                <label for="chkBurger" class="burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
                </label>  
                <h3>Nos choix de cours</h3> 
                <?php
                   
                    if(in_category('cours'))
                    if (isset($category))
                    {
                    $lemenu = "cours";
                    }
                    wp_nav_menu(array(

                    "container" => "nav"

                    ))?>
                <h3>Les notes de cours</h3>
                <?php
                $titre = get_the_title();
$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7, -5);
$duree = "90h";
?>
<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $titre_long ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
   
</article>
</main> 
<?php get_footer(); ?>

