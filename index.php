<?php get_header(); ?>

  <div class="row hidden-row">
    <div id="col-1-const" class="col-md-1"></div>
    <div id="col-2-const" class="col-md-2"></div>
  </div>
  
  <div class="row category-row" id="public-spaces">
    
    <div class="col-md-2 public-spaces">
      <div class="category-block">Public Spaces</div>
    </div>
  
  <?php $count = 0; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $count++; if ($count<8) : ?>
      <?php if (in_category('3')) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
    
          <div class="public-spaces <?php if (in_category('13')) : ?>col-md-2 featured-project<?php else: ?>col-md-1 regular-project<?php endif; ?>">
            <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"></div>
          </div>
      <? endif; endif; ?>
  
  <?
  endwhile;
  endif;
  ?>
  </div>
  
  
  <script type="text/javascript">
    $( ".public-spaces" ).hover(function() {
      if ( $(this).hasClass("regular-project") ) {
        var featWidth = $( "#col-2-const" ).width();
        var regWidth = $( "#col-1-const").width();
        $( ".public-spaces.featured-project" ).width(regWidth);
        $( this ).width(featWidth);
        $( this ).removeClass("regular-project");
        $( ".public-spaces.featured-project" ).addClass("regular-project");
        $( ".public-spaces.featured-project" ).removeClass("featured-project");
        $( this ).addClass("featured-project");
        //$( this ).addClass("col-md-2");
      }
    });
  </script>
  
  <div class="row category-row" id="sports">
    
    <div class="col-md-2 sports">
      <div class="category-block">Sports</div>
    </div>
  
  <?php $count = 0; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $count++; if ($count<8) : ?>
      <?php if (in_category('4')) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
    
          <div class="sports <?php if (in_category('14')) : ?>col-md-2 featured-project<?php else: ?>col-md-1 regular-project<?php endif; ?>">
            <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"></div>
          </div>
      <? endif; endif; ?>
  
  <?
  endwhile;
  endif;
  ?>
  </div>
  
  
  <script type="text/javascript">
    $( ".public-spaces" ).hover(function() {
      if ( $(this).hasClass("regular-project") ) {
        var featWidth = $( "#col-2-const" ).width();
        var regWidth = $( "#col-1-const").width();
        $( ".sports.featured-project" ).width(regWidth);
        $( this ).width(featWidth);
        $( this ).removeClass("regular-project");
        $( ".sports.featured-project" ).addClass("regular-project");
        $( ".sports.featured-project" ).removeClass("featured-project");
        $( this ).addClass("featured-project");
        //$( this ).addClass("col-md-2");
      }
    });
  </script>
   
<?php get_footer(); ?>