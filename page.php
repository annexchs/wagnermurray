<?php get_header(); ?>

      <div class="row pageheader">
        <div class="col-md-8 col-md-offset-2">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <h3 class="uppercase h4fix"><?php the_title(); ?></h3>
        </div>
      </div>
      <div class="row category-row" id="public-spaces projects">
        <div class="col-md-6 col-md-offset-2">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>