<?php
/**
 * template-part qui permettra d'afficher 
 * un article provenant d'un conteneur  de class blocflex
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 3);

$duree = "90h";
?>
<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $titre_long ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?php the_field('enseignant');?></p>
    <p><?= $duree ?></p>
</article>