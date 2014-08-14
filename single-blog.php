<?php get_header(); ?>

      <style>
        .lead {
          padding-top: 16px;
        }
        .aligncenter {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
      </style>

      <div class="row">
      
      <div class="col-sm-10">
        <h3 class="uppercase h4fix">Blog</h3>
      </div>
      
      </div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
			<?php if ($img_src != null) : ?>
			<div class="row" id="public-spaces projects">
        <div class="col-md-10 wrapper" style="background-image:url(<?php echo $img_src[0] ?>);">
          <div class="shadow">
            <h1><?php the_title(); ?></h1>
            <h6><?php _e("Posted", "wpbootstrap"); ?> <?php echo the_time('F j, Y'); ?> <?php _e("by", "wpbootstrap"); ?> <span class="bold"><?php the_author(); ?></span></h6>
          </div>
        </div>
      </div>
      <?php else : ?>
      <div class="row" id="public-spaces projects">
        <div class="col-md-10 wrapper-black">
            <h1><?php the_title(); ?></h1>
            <h6><?php _e("Posted", "wpbootstrap"); ?> <?php echo the_time('F j, Y'); ?> <?php _e("by", "wpbootstrap"); ?> <span class="bold"><?php the_author(); ?></span></h6>
        </div>
      </div>
      <?php endif; ?>
      
      <div class="row">

          <div class="col-md-6 col-md-offset-2 article">
              <?php the_content(); ?>
          </div>

      </div>
      
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      
  <?php get_footer(); ?>