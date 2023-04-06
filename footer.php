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
    <section class="footer__container">
  <div class="container">
    <div class="row">
      <div class="col">
        <h4>Liens utiles</h4>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">A propos</a></li>
          <li><a href="https://github.com/mondir15">Lien github</a></li>
        </ul>
      </div>
      <div class="col">
        <h4>Ressources</h4>
        <ul>
          <li><a href="#">Documentation</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      <div class="col">
        <h4>Suivez-nous</h4>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--<h3>Pied de page</h3>-->

<h3></h3>
</footer>
<?php wp_footer(); ?>
</body>
</html>