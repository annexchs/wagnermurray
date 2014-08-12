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

        <div class="carousel-inner" style="z-index: 16">
          <?php $imgCount=0; foreach($images as $image) { 
            if ($imgCount == 0) {
          ?>
          <div class="item active">
            <a data-toggle="modal" href="#img<?php echo $imgCount ?>" >
              <img src="<?php echo wp_get_attachment_image_src( $image->ID, 'full' )[0]?>" alt="<?php echo get_post_meta($image->ID, '_wp_attachment_image_alt', true); ?>">
            </a>
          </div>
          <?php } else { ?>
          <div class="item">
            <a data-toggle="modal" href="#img<?php echo $imgCount ?>" >
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

<?php for ($x=0; $x<$imgCount; $x++) { 
  $imgWidth = wp_get_attachment_image_src( $images[$x]->ID, 'full' )[1];
?>

<!-- Modal -->
<div class="modal fade" id="img<?php echo $x ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?php if($imgWidth < 900) { ?>
  <div class="modal-dialog" >
<?php } else { ?>
  <div class="modal-dialog modal-lg" >
<?php } ?>
    <div class="modal-content">
      <div class="modal-body">
        <img class="img-responsive" src="<?php echo wp_get_attachment_image_src( $images[$x]->ID, 'full' )[0]?>" alt="<?php echo get_post_meta($image->ID, '_wp_attachment_image_alt', true); ?>">
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!-- <script type="text/javascript">
$('.modal').each(function(){
  var modalWidth = $(this).width(),
      modalMargin = '-' + (modalWidth/2) + 'px!important';
  $(this).css('margin-left',modalMargin);
});
</script> -->

<div>
<div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

  <?php get_footer(); ?>