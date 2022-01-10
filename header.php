<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('');?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
  <div id="site">
    <header>
      <!-- Navigation Bar -->
      <?php get_template_part( 'template-parts/topbar' ); ?>
    </header>

    <!-- Content Section -->
    <main>
