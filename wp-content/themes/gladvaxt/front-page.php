<?php /* Template Name: Front Page */

get_header();

$strapline = get_field('strapline');

$splash_image = get_field('splash_image');
$splash_quote = get_field('splash_quote');
$splash_author = get_field('splash_author');

$match_maker_text = get_field('match_maker_text');
$match_maker_link = get_field('match_maker_link');

$plant_title = get_field('plant_title');
$plant_text = get_field('plant_text');
$plant_image = get_field('plant_image');

$bubble_title = get_field('bubble_title');
$bubble_link = get_field('bubble_link');
$bubble_italics = get_field('bubble_italics');

$greenhouse_title = get_field('greenhouse_title');
$greenhouse_text = get_field('greenhouse_text');
$greenhouse_image_1 = get_field('greenhouse_image_1');
$greenhouse_image_2 = get_field('greenhouse_image_2');
$greenhouse_image_3 = get_field('greenhouse_image_3');
$greenhouse_image_4 = get_field('greenhouse_image_4');

?>

<!-- Straplline Section -->
<section class="strapline-container">
  <h3 class="strapline"><?php echo $strapline; ?></h3>
</section>

<!-- Splash Section -->
<!-- to do: render alt text with ACF -->
<div class="splash-container">
  <div class="splash-image-container">
    <img src="<?php echo $splash_image['url']; ?>" alt="<?php get_post_meta($splash_image, '_wp_attachment_image_alt', true); ?>">
  </div>
  <div class="splash-text splash-bubble bubble">
    <p class="dog-quote"><?php echo $splash_quote; ?></p>
    <p class="italics splash-italics"><?php echo $splash_author; ?></p>
  </div>
</div>

<!-- Match Maker Section -->
<section class="match-maker-container">
  <p class="match-maker-text"><?php echo $match_maker_text; ?></p>
  <button class="match-maker-button"><?php echo $match_maker_link; ?></button>
</section>

<!-- Plant of the Week Section -->
<section class="plant-container">
  <div class="plant-text-container">
    <h3 class="plant-title"><?php echo $plant_title; ?></h3>
    <p class="plant-text"><?php echo $plant_text; ?></p>
  </div>
  <div class="plant-image-container">
    <img src="<?php echo $plant_image['url']; ?>" alt="">
  </div>

  <div class="plant-bubble bubble">
    <h4 class="bubble-title"><?php echo $bubble_title; ?></h4>
    <p class="bubble-text"><?php echo $bubble_link; ?></p>
    <p class="italics"><?php echo $bubble_italics; ?></p>
  </div>
</section>

<!-- Greenhouse Section -->
<section class="greenhouse-container">
  <h3 class="greenhouse-title"><?php echo $greenhouse_title; ?></h3>
  <p class="greenhouse-text"><?php echo $greenhouse_text; ?></p>
  <div class="greenhouse-images">
    <img class="greenhouse-image" src="<?php echo $greenhouse_image_1['url']; ?>" alt="greenhouse image">
    <img class="greenhouse-image" src="<?php echo $greenhouse_image_2['url']; ?>" alt="greenhouse image">
    <img class="greenhouse-image" src="<?php echo $greenhouse_image_3['url']; ?>" alt="greenhouse image">
    <img class="greenhouse-image" src="<?php echo $greenhouse_image_4['url']; ?>" alt="greenhouse image">
  </div>
  <div class="arrow">
    ^
  </div>
</section>




<?php get_footer(); ?>