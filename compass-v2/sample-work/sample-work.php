    <!--Header Include-->
    <?php get_header(); ?>
    <!--Header include stops here-->
            
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>          
            
            <div class="wrapper">
                <div class="sample-wrapper">
                    <div class="clearfix">
                        <h2>Test</h2>
<!-- FOOTER INCLUDE BEGINS HERE -->
	<?php get_footer(); ?>
<!-- FOOTER INCLUDE ENDS HERE