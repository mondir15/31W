<?php
/**
* Template footer.php
*/
?>
<footer class="site__footer">
  <section class="footer__widget">  
        <div><?php  dynamic_sidebar( 'pied-page-1' ); ?></div>
        <div><?php  dynamic_sidebar( 'pied-page-2' ); ?></div>
        <div><?php  dynamic_sidebar( 'pied-page-3' ); ?></div>
    </section>
    <section class="footer__lien">
        <div><?php wp_nav_menu(array('menu'=>'lien-externe-1',
                                      'container'=>'nav',
                                      'container_class'=> 'footer__lien__nav'
    )); ?></div>
        <div></div>
        <div></div>
    </section>
<!--<h3>Pied de page</h3>-->
<h3>31W - Un thème WordPress</h3>
<a href="https://github.com/mondir15">Lien github</a>
<h3></h3>
</footer>
<?php wp_footer(); ?>
</body>
</html>