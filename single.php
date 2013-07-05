<?php get_header(); ?>

<div class="row">
  <div class="span12">
    <h1>This is the index page</h1>
  </div>
</div>

<div class="row">
  <div class="span12">
    <?php
      if (have_posts()) : while (have_posts()) : the_post(); the_content();
      endwhile;
      endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>