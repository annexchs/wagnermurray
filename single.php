<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="row pageheader">
    <div class="col-md-10"> 

      <style>
        .uppercase .header:last-child {
          display:none;
        }
        .carousel-inner > .active {
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
    <div class="col-md-4">
      <style>
        .lead {
          color: #AAAAAA;
          font-family: 'Ideal Sans A', 'Ideal Sans B';
          font-weight: 400;
          font-style: normal;
          font-size: 14px;
          line-height: 1.42857143
        }
      </style>
      <h3><?php the_title(); ?></h3>
      <h4><?php $clientKey="Client"; echo get_post_custom_values($clientKey)[0]; ?></h4>
      <h4><?php $locationKey="Location"; echo get_post_custom_values($locationKey)[0]; ?></h4>
      <div class="visible-md-block visible-lg-block hidden-sm hidden-xs">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="col-md-6 featured-project bottomfix">
      <div id="project-images" class="carousel slide" data-ride="carousel" data-interval="0">
        <ol class="carousel-indicators">

          <?php
            global $post;
            $images = get_posts(array(
              'post_parent' => $post->ID,
              'post_status' => 'inherit',
              'post_type' => 'attachment',
              'post_mime_type' => 'image',
              'orderby' => 'menu_order',
              'order' => 'ASC',
              'exclude' => get_post_thumbnail_id(),
              'numberposts' => -1
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

        <div class="carousel-inner" style="z-index: 16">
          <?php $imgCount=0; foreach($images as $image) { 
            if ($imgCount == 0) {
          ?>
          <div class="item active">
            <a data-toggle="modal" href="#modal1" id="cImage<?php echo $imgCount ?>" >
              <img src="<?php echo wp_get_attachment_image_src( $image->ID, 'full' )[0]?>" alt="<?php echo get_post_meta($image->ID, '_wp_attachment_image_alt', true); ?>">
            </a>
          </div>
          <?php } else { ?>
          <div class="item">
            <a data-toggle="modal" href="#modal1" id="cImage<?php echo $imgCount ?>">
              <img src="<?php echo wp_get_attachment_image_src( $image->ID, 'full' )[0]?>" alt="<?php echo get_post_meta($image->ID, '_wp_attachment_image_alt', true); ?>">
            </a>
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
  <div class="row">
    <div class="col-md-4 visible-sm-block visible-xs-block hidden-md hidden-lg">
      <?php the_content(); ?>
    </div>
  </div>

<!-- These close divs are to match the header -->  
</div>
</div>

  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          </div>
          <div id="project-images2" class="carousel slide" data-ride="carousel" data-interval="0">
            <ol class="carousel-indicators">

              <?php
                global $post;
                $images2 = get_posts(array(
                  'post_parent' => $post->ID,
                  'post_status' => 'inherit',
                  'post_type' => 'attachment',
                  'post_mime_type' => 'image',
                  'orderby' => 'menu_order',
                  'order' => 'ASC',
                  'exclude' => get_post_thumbnail_id(),
                  'numberposts' => -1
                ));
                $imgCount2 = 0;
                $imgCountTotal2 = count($images2);
                foreach($images2 as $image2) {
                  if($imgCountTotal2 != 1 ) {
                    if ($imgCount2 == 0) {
              ?>
                <li data-target="#project-images2" data-slide-to="0" class="active"></li>
              <?php } else { ?>
                <li data-target="#project-images2" data-slide-to="<?php echo $imgCount2?>" ></li>
              <?php } $imgCount2+=1; }; }; ?>
              
            </ol>

              <div class="carousel-inner" style="z-index: 16">
              <?php $imgCount2=0; foreach($images2 as $image2) { 
                if ($imgCount2 == 0) {
              ?>
              <div class="item active">
                <img class="img-responsive modal-image" src="<?php echo wp_get_attachment_image_src( $image2->ID, 'full' )[0]?>" alt="<?php echo get_post_meta($image2->ID, '_wp_attachment_image_alt', true); ?>">
              </div>
              <?php } else { ?>
              <div class="item">
                <img class="img-responsive modal-image" src="<?php echo wp_get_attachment_image_src( $image2->ID, 'full' )[0]?>" alt="<?php echo get_post_meta($image2->ID, '_wp_attachment_image_alt', true); ?>">
              </div>
              <?php } $imgCount2+=1; }; ?>
            </div>

            <!-- Controls -->
            <?php if($imgCount2 > 1) { ?>
            <a class="left carousel-control" href="#project-images2" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#project-images2" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
  </div>

<div>
<div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

  <?php get_footer(); ?>