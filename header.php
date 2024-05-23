<?php
/**
 * The header for our theme
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package myportfolio
 * 
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap Portfolio 1</title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php $img_src = get_template_directory_uri() . '/assets/images/logo.png'; ?>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container flex-lg-column">
    <a class="navbar-brand mb-lg-4" href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo esc_url($img_src); ?>" class="d-none d-lg-block rounded-circle" alt="Logo">
      <span class="h3 fw-bold d-block d-lg-none">DigitalNavyGuy</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'navbar-nav ms-auto flex-lg-column text-lg-center',
        'fallback_cb' => false
      ));
      ?>
    </div>
  </div>
</nav>
