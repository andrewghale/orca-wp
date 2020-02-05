<?php
$footer_title = get_field('footer_title');
$footer_icon_1 = get_field('footer_icon_1');
$footer_icon_2 = get_field('footer_icon_2');
$footer_icon_3 = get_field('footer_icon_3');
?>

<footer>
  <div class="footer-container">
    <h3 class="footer-title"><?php echo $footer_title; ?></h3>
    <div class="social-icons">
      <div class="icon-container">
        <a href="#">
          <img src="<?php bloginfo('template_url'); ?>/img/instagram-white.svg" alt="insta">
        </a>
      </div>
      <div class="icon-container">
        <a href="#">
        <img src="<?php bloginfo('template_url'); ?>/img/instagram-white.svg" alt="insta">
        </a>
      </div>
      <div class="icon-container">
        <a href="#">
        <img src="<?php bloginfo('template_url'); ?>/img/instagram-white.svg" alt="insta">
        </a>
      </div>
    </div>
    <div class="footer-links">
      <div><?php
      $defaults = array(
        'container' => true,
        'theme_location' => 'primary-menu',
        'menu_class' => 'no-bullet desktop',
        'menu_class' => 'footer-nav'
      );
      wp_nav_menu( $defaults );
      ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer();?>

</body>
</html>