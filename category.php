<?php get_header(); ?>

      <div class="row pageheader">
        <div class="col-md-10">
          <h3 class="uppercase h4fix <?php $cat = get_term_by('name', single_cat_title('',false), 'category'); $catSlug = $cat->slug; echo $catSlug; ?>"><?php single_cat_title(); ?></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <?php echo category_description(); ?>
        </div>
      </div>

      <div class="row" id="<?php echo $catSlug; ?> projects"> 

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="<?php echo $catSlug; ?> col-md-2 featured-project cat-pag-object">
          <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <a href="<?php the_permalink() ?>"><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
        </div>
    <?php endwhile; else: ?>
        <div class="col-md-10">
          <p><?php _e('Sorry, there are no projects in this category.'); ?></p>
        </div>
    <?php endif; ?>

      </div>

<?php get_footer(); ?>