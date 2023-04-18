<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <code>404.php</code>
    <h1>Erreur 404</h1>
    <p>Page introuvable,vous pouvez tenter une recherche</p>
    <?= get_search_form(); ?>
                <label for="chkBurger" class="burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
                </label>  
                <h3>Nos choix de cours</h3> 
</main> 
<?php get_footer(); ?>

