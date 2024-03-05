<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/all.min.css">
    <!-- bs css link -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">

    <!-- site fonts -->
    <style>
        @font-face {
            font-family: 'abril_fatfaceregular';
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/abrilfatface-regular-webfont.woff2') format('woff2'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/abrilfatface-regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'jostmedium';
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/jost-500-medium-webfont.woff2') format('woff2'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/jost-500-medium-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'jostregular';
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/jost-400-book-webfont.woff2') format('woff2'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/jost-400-book-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;

        }
    </style>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/stellarnav.css">
    <!-- site css link -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <!-- responsive css link -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">

    
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- header part -->
    <?php   
$page_slug = 'site-general-settings';
  $generalsettingsid = get_id_by_slug($page_slug); ?>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 topHead d-flex justify-content-between">
                    <ul>
    <li><a href="tel:<?php echo get_field('phone',$generalsettingsid);  ?>"><img src="<?php bloginfo('template_url'); ?>/images/icons/2.png" alt=""> <?php echo get_field('phone',$generalsettingsid);  ?></a></li>
     <li><a href="mailto:<?php echo get_field('email',$generalsettingsid);  ?>"><img src="<?php bloginfo('template_url'); ?>/images/icons/1.png" alt=""> <?php echo get_field('email',$generalsettingsid);  ?></a></li>
                    </ul>

                    <ul class="followus">
                        <li><a href="<?php echo get_field('facebook',$generalsettingsid);  ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="<?php echo get_field('twitter',$generalsettingsid);  ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="<?php echo get_field('linkedin',$generalsettingsid);  ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-2">
                </div>
                
                <div class="col-12 btmHead mt-2 d-flex justify-content-between align-items-center">
                    <span class="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_field('logo',$generalsettingsid);  ?>" alt="" class="img-fluid"></a></span>
                    <div class="">
                
  <?php wp_nav_menu( array('menu' => 'mainmenu', 'container' => 'nav', 'container_class'=>'stellarnav navs', 'items_wrap' => '<ul>%3$s</ul>' )); ?>
                    <span><a href="<?php echo get_site_url(); ?>/contact-sentinel" class="btn btn-dark">Request A Quote</a></span>
                </div>
                </div>
            </div>
        </div>
        
    </header>