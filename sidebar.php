<div class="sidebar">
    <!-- HERE WE BEGIN OUR SIDEBAR CONTENT -->
    <h4 class="widgettitle link-head">Featured News</h4>
    
    <?php 
    // WP_Query arguments
    $args = array (
    'category_name' => 'featured',
    'pagination' => false,
    'posts_per_page' => '2',
    'order' => 'DESC',
    'orderby' => 'date',
    );
    
    // The Query
    $myquery = new WP_Query( $args );
    // The Loop
    if ( $myquery->have_posts() ) {
    while ( $myquery->have_posts() ) {
    $myquery->the_post();
    // do something
    ?>
    
    <p> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </p> 
    <p> <?php the_time('F j, Y'); ?> by <?php the_author(); ?> </p>
    <hr>
    
    <?php
    }
    } else {
    // no posts found
    echo "<p>";
    }
    
    // Restore original Post Data
    wp_reset_postdata();
    ?>
    
    dynamic_sidebar('');
</div>