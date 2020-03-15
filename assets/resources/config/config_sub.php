<?php
  $imagesDirParallax = '../assets/img/slider/';
  $imagesParallax = glob($imagesDirParallax . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
  $randomImageParallax = $imagesParallax[array_rand($imagesParallax)];
?>
