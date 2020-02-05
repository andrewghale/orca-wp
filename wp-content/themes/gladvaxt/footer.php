<?php
$footer_title = get_field('footer_title');
$footer_icon_1 = get_field('footer_icon_1');
$footer_icon_2 = get_field('footer_icon_2');
$footer_icon_3 = get_field('footer_icon_3');

?>

<footer>
  <div class="footer-container">
    <h3><?php echo $footer_title; ?></h3>
    <div class="social-icons">
      <div class="icon-container"></div>
      <div class="icon-container"></div>
      <div class="icon-container"></div>
    </div>
    <div class="footer-links">
      <div><?php
      $defaults = array(
        'container' => true,
        'theme_location' => 'primary-menu',
        'menu_class' => 'no-bullet desktop'
        // 'menu_class' => 'hidden'
        // 'menu_id' => 'your_menu_id',
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