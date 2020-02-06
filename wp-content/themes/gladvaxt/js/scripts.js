jQuery(document).ready(function($){

  // Back to top button
  $('.arrow').on('click', function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });

  // Hamburger menu
  const $hamburger = $('.hamburger');
  const $headerMenu = $('.header-menu');
  const $body = $('body');

  $hamburger.on('click', function() {
    $(this).toggleClass('active');
    $headerMenu.toggleClass('active');
    $body.toggleClass('active');
  })
});