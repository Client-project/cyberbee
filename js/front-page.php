    <!--Header Include-->
    <?php get_header(); ?>
    <!--Header include stops here-->
    
    <!--CAROUSEL--> 
        <!-- as of now, images are cropped to match size, should set styling to enforce sizing properly -->
        <!-- These images will need to be able to be changed through the Wordpress back end  -->
        


  
        
        
        
    <div class="row">
        <div id="carousel-example" class="carousel slide col-md-12" data-ride="carousel">
          <div class="carousel-inner">
            <?php
echo do_shortcode('[smartslider3 slider=2]');
            ?>
          </div>
          
          
          
           <!--  
            <div class="carousel-inner">
                <div class="item active">
                    <a href="#"> <img src="<?php //bloginfo( 'template_url' ); ?>/images/sparklers.jpg" alt="Sparklers">
                    </a>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <a href="#"> <img src="<?php //bloginfo( 'template_url' ); ?>/images/parliament.jpg" alt="Parliament">
                    </a>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <a href="#"> <img src="<?php //bloginfo( 'template_url' ); ?>/images/balloons.jpg" alt="Balloons">
                    </a>
                    <div class="carousel-caption">
                    </div>
                </div>
                -->
            </div>

            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            </a>
            <a class="right carousel-control" href="#carousel-example" data-slide="next">
            </a>
        </div>
    </div>
    <!--End of Carousel-->


    <!--ABOUT SECTION -->
    <div class="row">
        <div class="about-section col-md-12">
               <!-- <h2>A CUSTOMIZED EDUCATION FOR TEENS</h2>
                <br>
                <p>Compass is a centre that helps teenagers live and learn without school by supporting teens (13-18 years old) to create a customized education based on their interests, abilities, and goals.</p>-->
                

        </div><!--End of about-section-->
    </div><!--End row-->


    <!--Block of 6 links-->
    <div class="six-block">
        <div class="text-center bg-grey">
            <div class="row text-center">
                <div class="col-sm-4">
                    <!--How It Works-->
                    <?php
                        $you_query = new WP_Query( 'page_id=15' );
                        while ( $you_query->have_posts() ) : $you_query->the_post();
                        ?>
                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
                    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                
                <div class="col-sm-4">
                   <!--Guiding Principles-->
                    <?php
                        $you_query = new WP_Query( 'page_id=18' );
                        while ( $you_query->have_posts() ) : $you_query->the_post();
                        ?>
                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
                    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>               
                </div>
                
                
                
                <div class="col-sm-4">
                <!--Donate-->
                    <?php
                        $you_query = new WP_Query( 'page_id=107' );
                        while ( $you_query->have_posts() ) : $you_query->the_post();
                        ?>
                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
                    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>                
                </div>              
            </div><!--end div row text-center-->
        </div><!--end div text-center bg-grey-->

        <div class="text-center bg-grey">
            <div class="row text-center">
                <div class="col-sm-4">
                <!--volunteering-->
                    <?php
                        $you_query = new WP_Query( 'page_id=109' );
                        while ( $you_query->have_posts() ) : $you_query->the_post();
                        ?>
                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
                    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>                
               
                </div>
                <div class="col-sm-4">
                <!--Admission/Tuition-->
                    <?php
                        $you_query = new WP_Query( 'page_id=121' );
                        while ( $you_query->have_posts() ) : $you_query->the_post();
                        ?>
                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
                    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>                
                </div>
                <div class="col-sm-4">
                <!--Classes-->
                    <?php
                        $you_query = new WP_Query( 'page_id=20' );
                        while ( $you_query->have_posts() ) : $you_query->the_post();
                        ?>
                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
                    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>                
               
                </div>
            </div><!--end div row text-center-->
        </div><!--end div text-center bg-grey-->
    </div> <!--End of six block-->
   
    
    <!--Block of 2 links-->
    <div class="row">
       <!-- <div class="col-md-5 col-md-offset-1 two-block">
            <h3>Our Latest Posts</h3>
            <p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>

            <a href="#"><i class="fa fa-chevron-right"></i></a>
        </div>
        
        <div class="col-md-5 two-block">
            <h3>Liberated Learners</h3>
            <p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
             
            <a class="" href="#"><i class="fa fa-chevron-right"></i></a>
        </div>-->

            <?php dynamic_sidebar ( 'home-sidebar-1'); ?>
    </div>

    <!--Video section-->

    <div class="video-section row"> 
        <div class="content-wrapper col-sm-4 col-sm-offset-2">
            <div class="vid-text">
                <h2>COMPASS SPEAKS</h2>
                <br>
                <p>This short video gets to the heart of what makes Canada’s only self-directed education centre the unique and inspiring environment that it is. Trust us: this is six minutes you won’t regret. Visit us on one of our Open House dates from 12-1 pm on Oct 29th, Nov 26th, and Dec 17th or contact us by email or by phone at (613) 916-6303.</p>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="video-link">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/L-E6AyS0eAM" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>
    </div>
    <!--End of video-section-->

    <!--Block of 2 links-->
    <div class="row">
        <div class="col-md-5 col-md-offset-1 two-block">
            <h3>Get In Touch</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            <a href="#"><i class="fa fa-comment"></i><span id="btn-text">  Connect</span></a>
        </div>
        
        <div class="col-md-5 two-block">
            <h3>Calendar</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             
            <a href="#"><i class="fa fa-calendar"></i></a>
        </div>
    </div>

    <!--Full width image-->
        <div class="bottom-photo">
            <div class="overlay">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
            </div>
        </div>
    </div><!-- end of container --> 
    

<!-- MAIN TEMPLATE AREA ENDS HERE -->

<!-- FOOTER INCLUDE BEGINS HERE -->
	<?php get_footer(); ?>
<!-- FOOTER INCLUDE ENDS HERE
