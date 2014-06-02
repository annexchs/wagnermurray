<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="row pageheader">
    <div class="col-md-10"> 

      <style>
        .uppercase .header:last-child {
          display:none;
        }
      </style>
      <h6 class="uppercase" >
      <?php $catCount = 0; foreach((get_the_Category()) as $category) { ?>
        <span class="<? echo $category->slug ?>"><?php echo $category->name ?></span>
      <?php $catCount += 1; ?>
        <span class="header">&nbsp;|&nbsp;</span>
      <?php }; ?>
      </h6>

    </div>
  </div>
  <div class="row category-row" id="public-spaces projects">
    <div class="col-md-10 featured-project bottomfix">
      <div id="project-images" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">

          <?php
            global $post;
            $images = get_children(array(
              'post_parent' => $post->ID,
              'post_status' => 'inherit',
              'post_type' => 'attachment',
              'post_mime_type' => 'image',
            ));
            $imgCount = 0;
            foreach($images as $image) {
              if ($imgCount == 0) {
          ?>
            <li data-target="#project-images" data-slide-to="0" class="active"></li>
          <?php } else { ?>
            <li data-target="#project-images" data-slide-to="<?php echo $imgCount?>" ></li>
          <?php } $imgCount+=1; }; ?>
          
        </ol>

      <!--<div id="project-images" class="carousel slide" data-ride="carousel">
        indicators
        <ol class="carousel-indicators">
          <li data-target="#project-images" data-slide-to="0" class="active"></li>
          <li data-target="#project-images" data-slide-to="1"></li>
          <li data-target="#project-images" data-slide-to="2"></li>
        </ol> -->

          <!-- Wrapper for slides -->

        <div class="carousel-inner" style="max-height:600; overflow:hidden">
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
        <a class="left carousel-control" href="#project-images" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#project-images" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
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