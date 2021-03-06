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
			
			<div class="row">
			
				<div id="blog-front" class="col-sm-7 col-md-6 col-md-offset-2 col-sm-offset-1" role="main">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							
						</header>
							
						<section id="post_content">
						
							<?php the_post_thumbnail( 'wpbs-featured', array('class' => 'img-responsive') ); ?>
						
							<?php the_content('Read more...'); ?>
					
						</section> <!-- end article section -->
											
						<footer>
						  <h6 class="date uppercase"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?></h6>
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<hr>
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>
								
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
					
					
			
				</div> <!-- end #main -->
        
			</div> <!-- end #content -->

<?php get_footer(); ?>