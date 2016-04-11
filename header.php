<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- MailChimp Styling -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

   <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    
    
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/style.css">
    
	<title><?php wp_title ( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!--modernizer-->      
        <script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.custom.js">"type=/javascript"
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
                  
	<?php
        /* Add this to support sites with sites with threaded comments enabled.*/
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
        // DO NOT MOVE OR DELETE THIS: 
        wp_head();        
    ?>

</head>

<body <?php body_class(); ?>>

<header>
	
<!--HEADER NAVBAR-->
    <div class="container-fluid">
       <nav class="navbar navbar-default navbar-fixed-top">
           <div class="row nav-row navbar-wrap">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand col-md-4" href="#myPage"><img src="<?php bloginfo( 'template_url' ); ?>/images/compass.png" alt="compass teens"></a>
            </div>
            
            <div class="collapse navbar-collapse" id="myNavbar">
                
                <?php /* Primary navigation */
                wp_nav_menu( array(
                      'menu' => 'top_menu',
                      'depth' => 2,
                      'container' => false,
                      'menu_class' => 'nav navbar-nav navbar-right col-md-6',
                      //Process nav menu using our custom nav walker
                      'walker' => new wp_bootstrap_navwalker())
                    );
                ?>
            </div>
            </div>
        </nav>
    
    <!--end of header navbar-->  
    
         
              
	
    