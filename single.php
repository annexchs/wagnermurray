<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="row pageheader">
    <div class="col-md-10"> 

      <style>
        .uppercase .header:last-child {
          display:none;
        }
        .carousel-inner > .active {
          max-height:600px;
          overflow:hidden;
        }
      </style>
      <h6 class="uppercase category-title-block" >
      <?php $catCount = 0; foreach((get_the_Category()) as $category) { ?>
        <span class="<?php echo $category->slug ?>"><a class="<?php echo $category->slug ?>" href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>"><?php echo $category->name ?></a></span>
      <?php $catCount += 1; ?>
      <?php }; ?>
      </h6>
      
      <script type="text/javascript">
        $(".category-title-block span:contains('featured')").remove();
      </script>

    </div>
  </div>
  <div class="row" id="public-spaces projects">
    <div class="col-md-10 featured-project bottomfix">
      <div id="project-images" class="carousel slide" data-ride="carousel" data-interval="4500">
        <ol class="carousel-indicators">

          <?php
            global $post;
            $images = get_children(array(
              'post_parent' => $post->ID,
              'post_status' => 'inherit',
              'post_type' => 'attachment',
              'post_mime_type' => 'image',
              'exclude' => get_post_thumbnail_id()
            ));
            $imgCount = 0;
            $imgCountTotal = count($images);
            foreach($images as $image) {
              if($imgCountTotal != 1 ) {
                if ($imgCount == 0) {
          ?>
            <li data-target="#project-images" data-slide-to="0" class="active"></li>
          <?php } else { ?>
            <li data-target="#project-images" data-slide-to="<?php echo $imgCount?>" ></li>
          <?php } $imgCount+=1; }; }; ?>
          
        </ol>

          <!-- Wrapper for slides -->

        <div class="carousel-inner">
          <?php $imgCount=0; foreach($images as $image) { 
            if ($imgCount == 0) {
          ?>
          <div class="item active">
            <img src="<?php echo wp_get_attachment_image_src( $image->ID, 'full' )[0]?>" alt="<?php echo get_post_meta($image->ID, '_wp_attachment_image_alt', true); ?>">
          </div>
          <?php } else { ?>
          <div class="item">
            <img src="<?php echo wp_get_attachment_image_src( $image->ID, 'full' )[0]?>" alt="<?php echo get_post_meta($image->ID, '_wp_attachment_image_alt', true); ?>">
          </div>
          <?php } $imgCount+=1; }; ?>
        </div>

        <!-- Controls -->
        <?php if($imgCount > 1) { ?>
        <a class="left carousel-control" href="#project-images" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#project-images" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <?php } ?>
      </div>
    </div>
</div>
  <div class="row pageheader">
    <div class="col-md-3">
      <h3 class="<?php echo get_the_category()[0]->slug ?>"><?php the_title(); ?></h3>
      <h4><?php $clientKey="Client"; echo get_post_custom_values($clientKey)[0]; ?></h4>
      <h4><?php $locationKey="Location"; echo get_post_custom_values($locationKey)[0]; ?></h4>
    </div>

    <div class="col-md-7">
      <?php the_content(); ?>
      </div>
    </div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

  <?php get_footer(); ?>