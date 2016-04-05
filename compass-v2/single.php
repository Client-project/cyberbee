<?php get_header(); ?>
	
	<!-- BEGIN MAIN TEMPLATE HERE -->

	<div class="wrapper">

		<section class="content">
			
			<div class="grid-group clearfix">

				<div class="grid-item grid-2 leftcol">
					
					<!-- HERE WE BEGIN OUR CONTENT LOOP -->
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					
                    <div class="tater-tots-post-entry">
						<?php the_content(); ?>
					</div>
                    
                    <?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
                    
					<?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                	<?php endif; ?>                     
				</div> <!-- end left column container -->

				<div class="grid-item rightcol">
					
					<!-- HERE WE BEGIN OUR SIDEBAR CONTENT -->
					
                    
				</div><!-- end right column container -->
				          
			</div><!-- end column container-->

			</section> <!-- end content section -->
	</div><!-- END WRAPPER -->

<!-- MAIN TEMPLATE AREA ENDS HERE -->

<!-- FOOTER INCLUDE BEGINS HERE -->
	<?php get_footer(); ?>
<!-- FOOTER INCLUDE ENDS HERE

WHEW! YOU MADE IT! -->
