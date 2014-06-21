<?php get_header(); ?>

      <div class="row pageheader">
        <div class="col-md-12">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <h3 class="uppercase h4fix"><?php the_title(); ?></h3>
        </div>
      </div>
      <div class="row" id="public-spaces">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>