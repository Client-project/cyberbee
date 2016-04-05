<?php get_header(); ?>
	
	<!-- BEGIN MAIN TEMPLATE HERE -->

	<div class="wrapper">

		<section class="content">
			
			<div class="grid-group clearfix">

				<div class="grid-item grid-2 leftcol">
					
					<!-- HERE WE BEGIN OUR CONTENT LOOP -->
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                	<?php endif; ?>                     
				</div> <!-- end left column container -->
 
			</div><!-- end column container-->
			<?php get_sidebar(); ?>            
            

			</section> <!-- end content section -->
	</div><!-- END WRAPPER -->

<!-- MAIN TEMPLATE AREA ENDS HERE -->

<!-- FOOTER INCLUDE BEGINS HERE -->
	<?php get_footer(); ?>
<!-- FOOTER INCLUDE ENDS HERE

WHEW! YOU MADE IT! -->
