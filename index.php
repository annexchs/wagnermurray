<?php get_header(); ?>

  <div class="row hidden-row">
    <div id="col-1-const" class="col-md-1"></div>
    <div id="col-2-const" class="col-md-2"></div>
  </div>
  
  <div class="row category-row" id="public-spaces">
    <div class="col-md-2 public-spaces">
      <div class="category-block">.col-md-1</div>
    </div>
    <div class="col-md-2 public-spaces featured-project">
      <div class="bkg-responsive" style="background-image:url(http://placehold.it/500x500);"></div>
    </div>
    <div class="col-md-1 public-spaces regular-project">
      <div class="bkg-responsive" style="background-image:url(http://placehold.it/500x500);"></div>
    </div>
    <div class="col-md-1 public-spaces regular-project">
      <div class="bkg-responsive" style="background-image:url(http://placehold.it/500x500);"></div>
    </div>
    <div class="col-md-1 public-spaces regular-project">
      <div class="bkg-responsive" style="background-image:url(http://placehold.it/500x500);"></div>
    </div>
    <div class="col-md-1 public-spaces regular-project">
      <div class="bkg-responsive" style="background-image:url(http://placehold.it/500x500);"></div>
    </div>
    <div class="col-md-1 public-spaces regular-project">
      <div class="bkg-responsive" style="background-image:url(http://placehold.it/500x500);"></div>
    </div>
    <div class="col-md-1 public-spaces regular-project">
      <div class="bkg-responsive" style="background-image:url(http://placehold.it/500x500);"></div>
    </div>
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
  
<?php get_footer(); ?>
