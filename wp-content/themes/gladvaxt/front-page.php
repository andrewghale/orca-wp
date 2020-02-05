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
$bubble_text = get_field('bubble_text');
$bubble_italics = get_field('bubble_italics');

$greenhouse_title = get_field('greenhouse_title');
$greenhouse_text = get_field('greenhouse_text');
$greenhouse_image_1 = get_field('greenhouse_image_1');
$greenhouse_image_2 = get_field('greenhouse_image_2');
$greenhouse_image_3 = get_field('greenhouse_image_3');
$greenhouse_image_4 = get_field('greenhouse_image_4');

?>

<section class="strapline-container">
  <h3 class="strapline"><?php echo $strapline; ?></h3>
</section>

<!-- alt text, render alt text with ACF -->
<img src="<?php echo $splash_image['url']; ?>" alt="<?php get_post_meta($splash_image, '_wp_attachment_image_alt', true); ?>">
<div class="splash-text">
  <p><?php echo $splash_quote; ?></p>
  <p><?php echo $splash_author; ?></p>
</div>

<section class="match-maker-container">
  <p><?php echo $match_maker_text; ?></p>
  <button><?php echo $match_maker_link; ?></button>
</section>

<section>
  <h3><?php echo $plant_title; ?></h3>
  <p><?php echo $plant_text; ?></p>
  <img src="<?php echo $plant_image['url']; ?>" alt="">

  <div class="bubble">
    <h3><?php echo $bubble_title; ?></h3>
    <p><?php echo $bubble_text; ?></p>
    <p><?php echo $bubble_italics; ?></p>
  </div>
</section>

<section>
  <h3><?php echo $greenhouse_title; ?></h3>
  <p><?php echo $greenhouse_text; ?></p>
  <img src="<?php echo $greenhouse_image_1['url']; ?>" alt="greenhouse image">
  <img src="<?php echo $greenhouse_image_2['url']; ?>" alt="greenhouse image">
  <img src="<?php echo $greenhouse_image_3['url']; ?>" alt="greenhouse image">
  <img src="<?php echo $greenhouse_image_4['url']; ?>" alt="greenhouse image">
</section>




<?php get_footer(); ?>