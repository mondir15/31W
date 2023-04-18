<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    
    <h1>Erreur 404</h1>
    <p>Page introuvable,vous pouvez tenter une recherche</p>
    <div class="recherche__erreur">
    <?= get_search_form(); ?>
    </div>
               
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
<php 
$titre = get_the_title();

?>
<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>
</main> 
<?php get_footer(); ?>

