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
    
    <?php if (in_category('public-spaces') && in_category('featured-ps')) : ?>
        <?php if ($count<1) : ?>
          <div class="public-spaces col-md-2 featured-project hidden-sm hidden-xs">
            <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
            <a href="<?php the_permalink() ?>"><div class="image-hider"></div><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
          </div>
        <?php $count++; ?>
  <?php endif; endif; endwhile; endif; ?>
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('public-spaces') && !in_category('featured-ps')) : ?>
      <?php $count++; if ($count<8) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <div class="public-spaces col-md-1 regular-project hidden-sm hidden-xs">
            <a href="<?php the_permalink() ?>">
              <div class="image-hider"></div>
              <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)">
                <div class="title"><?php the_title(); ?></div>
              </div>
              </a>
          </div>
    <?php endif; endif; endwhile; endif; ?>
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
    
    <?php if (in_category('sports')) : ?>
      <?php if (in_category('featured-sports')) : ?>
        <?php if ($count<1) : ?>
          <div class="sports col-md-2 featured-project hidden-sm hidden-xs">
            <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
            <a href="<?php the_permalink() ?>"><div class="image-hider"></div><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
          </div>
        <?php $count++; ?>
      <?php endif; endif; endif; endwhile; endif; ?>
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('sports') && !in_category('featured-sports')) : ?>
      <?php $count++; if ($count<8) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <div class="sports col-md-1 regular-project hidden-sm hidden-xs">
            <a href="<?php the_permalink() ?>">
              <div class="image-hider"></div>
              <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)">
                <div class="title"><?php the_title(); ?></div>
              </div>
              </a>
          </div>
    <?php endif; endif; endwhile; endif; ?>
  </div>
  
  
  <script type="text/javascript">
    $( ".sports" ).hover(function() {
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
  
  <div class="row category-row" id="commercial">
    
    <div class="col-md-2 commercial">
      <div class="category-block">commercial</div>
    </div>
  <?php $count = 0; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('commercial')) : ?>
      <?php if (in_category('featured-commercial')) : ?>
        <?php if ($count<1) : ?>
          <div class="commercial col-md-2 featured-project hidden-sm hidden-xs">
            <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
            <a href="<?php the_permalink() ?>"><div class="image-hider"></div><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
          </div>
        <?php $count++; ?>
      <?php endif; endif; endif; endwhile; endif; ?>
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('commercial') && !in_category('featured-commercial')) : ?>
      <?php $count++; if ($count<8) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <div class="commercial col-md-1 regular-project hidden-sm hidden-xs">
            <a href="<?php the_permalink() ?>">
              <div class="image-hider"></div>
              <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)">
                <div class="title"><?php the_title(); ?></div>
              </div>
              </a>
          </div>
    <?php endif; endif; endwhile; endif; ?>
  </div>
  
  
  <script type="text/javascript">
    $( ".commercial" ).hover(function() {
      if ( $(this).hasClass("regular-project") ) {
        var featWidth = $( "#col-2-const" ).width();
        var regWidth = $( "#col-1-const").width();
        $( ".commercial.featured-project" ).width(regWidth);
        $( this ).width(featWidth);
        $( this ).removeClass("regular-project");
        $( ".commercial.featured-project" ).addClass("regular-project");
        $( ".commercial.featured-project" ).removeClass("featured-project");
        $( this ).addClass("featured-project");
        //$( this ).addClass("col-md-2");
      }
    });
  </script>
  
  
  <div class="row category-row" id="retail">
    
    <div class="col-md-2 retail">
      <div class="category-block">retail</div>
    </div>
  
  <?php $count = 0; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('retail')) : ?>
      <?php if (in_category('featured-retail')) : ?>
        <?php if ($count<1) : ?>
          <div class="retail col-md-2 featured-project hidden-sm hidden-xs">
            <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
            <a href="<?php the_permalink() ?>"><div class="image-hider"></div><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
          </div>
        <?php $count++; ?>
      <?php endif; endif; endif; endwhile; endif; ?>
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('retail') && !in_category('featured-retail')) : ?>
      <?php $count++; if ($count<8) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <div class="retail col-md-1 regular-project hidden-sm hidden-xs">
            <a href="<?php the_permalink() ?>">
              <div class="image-hider"></div>
              <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)">
                <div class="title"><?php the_title(); ?></div>
              </div>
              </a>
          </div>
    <?php endif; endif; endwhile; endif; ?>
  </div>
  
  
  <script type="text/javascript">
    $( ".retail" ).hover(function() {
      if ( $(this).hasClass("regular-project") ) {
        var featWidth = $( "#col-2-const" ).width();
        var regWidth = $( "#col-1-const").width();
        $( ".retail.featured-project" ).width(regWidth);
        $( this ).width(featWidth);
        $( this ).removeClass("regular-project");
        $( ".retail.featured-project" ).addClass("regular-project");
        $( ".retail.featured-project" ).removeClass("featured-project");
        $( this ).addClass("featured-project");
        //$( this ).addClass("col-md-2");
      }
    });
  </script>
  
  <div class="row category-row" id="restaurant">
    
    <div class="col-md-2 restaurant">
      <div class="category-block">restaurant</div>
    </div>
  
  <?php $count = 0; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('restaurants')) : ?>
      <?php if (in_category('featured-restaurants')) : ?>
        <?php if ($count<1) : ?>
          <div class="restaurant col-md-2 featured-project hidden-sm hidden-xs">
            <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
            <a href="<?php the_permalink() ?>"><div class="image-hider"></div><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
          </div>
        <?php $count++; ?>
      <?php endif; endif; endif; endwhile; endif; ?>
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('restaurants') && !in_category('featured-restaurants')) : ?>
      <?php $count++; if ($count<8) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <div class="restaurant col-md-1 regular-project hidden-sm hidden-xs">
            <a href="<?php the_permalink() ?>">
              <div class="image-hider"></div>
              <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)">
                <div class="title"><?php the_title(); ?></div>
              </div>
              </a>
          </div>
    <?php endif; endif; endwhile; endif; ?>
  </div>
  
  
  <script type="text/javascript">
    $( ".restaurant" ).hover(function() {
      if ( $(this).hasClass("regular-project") ) {
        var featWidth = $( "#col-2-const" ).width();
        var regWidth = $( "#col-1-const").width();
        $( ".restaurant.featured-project" ).width(regWidth);
        $( this ).width(featWidth);
        $( this ).removeClass("regular-project");
        $( ".restaurant.featured-project" ).addClass("regular-project");
        $( ".restaurant.featured-project" ).removeClass("featured-project");
        $( this ).addClass("featured-project");
        //$( this ).addClass("col-md-2");
      }
    });
  </script>
  
  <div class="row category-row" id="civic">
    
    <div class="col-md-2 civic">
      <div class="category-block">civic</div>
    </div>
  
  <?php $count = 0; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('civic')) : ?>
      <?php if (in_category('featured-civic')) : ?>
        <?php if ($count<1) : ?>
          <div class="civic col-md-2 featured-project hidden-sm hidden-xs">
            <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
            <a href="<?php the_permalink() ?>"><div class="image-hider"></div><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
          </div>
        <?php $count++; ?>
      <?php endif; endif; endif; endwhile; endif; ?>
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('civic') && !in_category('featured-civic')) : ?>
      <?php $count++; if ($count<8) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <div class="civic col-md-1 regular-project hidden-sm hidden-xs">
            <a href="<?php the_permalink() ?>">
              <div class="image-hider"></div>
              <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)">
                <div class="title"><?php the_title(); ?></div>
              </div>
              </a>
          </div>
    <?php endif; endif; endwhile; endif; ?>
  </div>
  
  
  <script type="text/javascript">
    $( ".civic" ).hover(function() {
      if ( $(this).hasClass("regular-project") ) {
        var featWidth = $( "#col-2-const" ).width();
        var regWidth = $( "#col-1-const").width();
        $( ".civic.featured-project" ).width(regWidth);
        $( this ).width(featWidth);
        $( this ).removeClass("regular-project");
        $( ".civic.featured-project" ).addClass("regular-project");
        $( ".civic.featured-project" ).removeClass("featured-project");
        $( this ).addClass("featured-project");
        //$( this ).addClass("col-md-2");
      }
    });
  </script>
  
  
  <div class="row category-row" id="interiors">
    
    <div class="col-md-2 interiors">
      <div class="category-block">interiors</div>
    </div>
  
  <?php $count = 0; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('interiors')) : ?>
      <?php if (in_category('featured-interiors')) : ?>
        <?php if ($count<1) : ?>
          <div class="interiors col-md-2 featured-project hidden-sm hidden-xs">
            <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
            <a href="<?php the_permalink() ?>"><div class="image-hider"></div><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
          </div>
        <?php $count++; ?>
      <?php endif; endif; endif; endwhile; endif; ?>
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('interiors') && !in_category('featured-interiors')) : ?>
      <?php $count++; if ($count<8) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <div class="interiors col-md-1 regular-project hidden-sm hidden-xs">
            <a href="<?php the_permalink() ?>">
              <div class="image-hider"></div>
              <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)">
                <div class="title"><?php the_title(); ?></div>
              </div>
              </a>
          </div>
    <?php endif; endif; endwhile; endif; ?>  </div>
  
  
  <script type="text/javascript">
    $( ".interiors" ).hover(function() {
      if ( $(this).hasClass("regular-project") ) {
        var featWidth = $( "#col-2-const" ).width();
        var regWidth = $( "#col-1-const").width();
        $( ".interiors.featured-project" ).width(regWidth);
        $( this ).width(featWidth);
        $( this ).removeClass("regular-project");
        $( ".interiors.featured-project" ).addClass("regular-project");
        $( ".interiors.featured-project" ).removeClass("featured-project");
        $( this ).addClass("featured-project");
        //$( this ).addClass("col-md-2");
      }
    });
  </script>
  
  
  <div class="row category-row" id="conceptual">
    
    <div class="col-md-2 conceptual">
      <div class="category-block">conceptual</div>
    </div>
  
  <?php $count = 0; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('conceptual')) : ?>
      <?php if (in_category('featured-conceptual')) : ?>
        <?php if ($count<1) : ?>
          <div class="conceptual col-md-2 featured-project hidden-sm hidden-xs">
            <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
            <a href="<?php the_permalink() ?>"><div class="image-hider"></div><div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)"><div class="title"><?php the_title(); ?></div></div></a>
          </div>
        <?php $count++; ?>
      <?php endif; endif; endif; endwhile; endif; ?>
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if (in_category('conceptual') && !in_category('featured-conceptual')) : ?>
      <?php $count++; if ($count<8) : ?>
        <?php $id = get_the_ID(); $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full'); ?>
          <div class="conceptual col-md-1 regular-project hidden-sm hidden-xs">
            <a href="<?php the_permalink() ?>">
              <div class="image-hider"></div>
              <div class="bkg-responsive" style="background-image:url(<?php echo $img_src[0] ?>)">
                <div class="title"><?php the_title(); ?></div>
              </div>
              </a>
          </div>
    <?php endif; endif; endwhile; endif; ?>
  </div>
  
  
  <script type="text/javascript">
    $( ".conceptual" ).hover(function() {
      if ( $(this).hasClass("regular-project") ) {
        var featWidth = $( "#col-2-const" ).width();
        var regWidth = $( "#col-1-const").width();
        $( ".conceptual.featured-project" ).width(regWidth);
        $( this ).width(featWidth);
        $( this ).removeClass("regular-project");
        $( ".conceptual.featured-project" ).addClass("regular-project");
        $( ".conceptual.featured-project" ).removeClass("featured-project");
        $( this ).addClass("featured-project");
        //$( this ).addClass("col-md-2");
      }
    });
  </script>
  
<?php get_footer(); ?>