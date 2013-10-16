<?php get_header(); ?>
<body>
  <h1 class="section">Page du projet: <?php the_title(); ?></h1>
  <section id="container">
    <h1 class="section">Contenu principal</h1>
       <?php get_template_part('nav'); ?>
<section class="main">
  <?php get_template_part('breadcrumbs'); ?>

  <div class="row">
    <h2><?php the_title(); ?></h2>
    <div class="large-4 columns">
      <?php the_post_thumbnail('full'); ?>
    </div>
    <div class="large-8 columns">
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>
</section>
<?php get_footer(); ?>
