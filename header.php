<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VWP5L10VDW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VWP5L10VDW');
</script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Dela+Gothic+One&display=swap"
        rel="stylesheet">

    <title><?php bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>
</head>

<body class="bg-sand">