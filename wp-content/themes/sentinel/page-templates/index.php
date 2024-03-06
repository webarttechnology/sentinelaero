<?php /* Template Name: Home */ 
 get_header(); 

$page_slug = 'site-general-settings';
  $generalsettingsid = get_id_by_slug($page_slug);
 ?>

  <section class="banner" style="background: url(<?php echo get_field('top_banner_background_image'); ?>) no-repeat top left;">
        <div class="container">
            <div class="row relative">
                <div class="col-sm-12 col-md-8">
                    <h1 class="banner_heading mb-4"><?php the_field('top_banner_text'); ?> 
                        <span class="aeroplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/3.png" alt="" class="img-fluid"></span>
                    </h1>
                    <?php echo get_field('top_banner_text'); ?>
                    
                    <span><a href="<?php echo get_field('first_button_link'); ?>" class="btn btn-warning"><?php echo get_field('first_button_text'); ?></a></span>   
                    <span><a href="<?php echo get_field('second_button_link'); ?>" class="btn text-white"><?php echo get_field('second_button_text'); ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/4.png" alt="" class="img-fluid"></a></span>    
                </div>
                <div class="floatBox">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 ">
                            <img src="<?php echo get_field('top_banner_second_image'); ?>" alt="" class="w-100">
                        </div>
                        <div class="col-sm-6 col-md-6 mt-5">
                            <img src="<?php echo get_field('top_banner_third_image'); ?>" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aircraftparts p-v-200" style="background: url(<?php echo get_field('below_banner_section_background_image'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                <div class="relative aircraftpartsImg">
                    <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="" class="img-fluid"></span>
                    <span class="aircraftpartsImgTop"><img src="<?php echo get_field('below_banner_section_first_image'); ?>" alt="" class="w-100"></span>
                    <img src="<?php echo get_field('below_banner_section_second_image'); ?>" alt="" class="w-100">
                    <span class="aircraftpartsImgBtm"><img src="<?php echo get_field('below_banner_section_third_image'); ?>" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5"><?php echo get_field('below_banner_section_title'); ?></h2>
                   <?php echo get_field('below_banner_section_text'); ?>
                        
                <span><a href="<?php echo get_field('below_banner_section_readmore_link'); ?>" class="btn btn-warning btn-large mt-4"> <?php echo get_field('below_banner_section_readmore_label'); ?></a></span>  
                </div>
            </div>
        </div>
    </section>

    <section class="services p-v-60-300" style="background: url(<?php echo get_field('services_background_image'); ?>) no-repeat bottom left; background-size: 100% auto;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2><?php echo get_field('service_section_title'); ?></h2>
                </div>
                <div class="col-12 mt-4">
                     <?php $allserv = new WP_Query(array('post_type'=>'our-service','post_status'=>'publish','posts_per_page'=>-1)); ?>
                    <ul class="row lists justify-content-between">
                        <?php while($allserv->have_posts()):$allserv->the_post(); ?>
                        <li class="col-md-5"><?php the_title(); ?></li>
                      <?php endwhile;wp_reset_query(); ?>
                    </ul>
                    <center><span><a href="<?php echo get_field('request_a_part_link'); ?>" class="btn btn-warning btn-large mt-4"><?php echo get_field('request_a_part_label'); ?></a></span>  </center>
                </div>
            </div>
        </div>
    </section>

    <section class="support pt-5 pb-5 text-white" style="background: url(<?php echo get_field('contact_us_background_image'); ?>) no-repeat top left; background-size: cover;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-5 col-md-5 text-center">
                    <h3><?php echo get_field('contact_us_heading'); ?></h3>
                </div>
                <div class="col-sm-6 col-md-4 relative">
                    <h5><a href="tel:<?php echo get_field('phone',$generalsettingsid);  ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/2.png" alt=""><?php echo get_field('phone',$generalsettingsid);  ?></a></h5>
                    <h5><a href="mailto:<?php echo get_field('email',$generalsettingsid);  ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/1.png" alt=""><?php echo get_field('email',$generalsettingsid);  ?></a></h5>
                </div>
            </div>
        </div>
    </section>

    <section class="recertifiedparts p-v-200" style="background: url(<?php echo get_field('recertified_background_image'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 flex-lg-row-reverse">
                <div class="col-md-6">
                <div class="relative aircraftpartsImg">
                    <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="" class="img-fluid"></span>
                    <span class="recertifiedpartsImgTop"><img src="<?php echo get_field('recertified_first_image'); ?>" alt="" class="w-100"></span>
                    <img src="<?php echo get_field('recertified_second_image'); ?>" alt="" class="w-100">
                    <span class="recertifiedpartsImgBtm"><img src="<?php echo get_field('recertified_third_image') ;?>" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-md-6">
                    <?php echo get_field('recertified_text'); ?> 
                        
                        <span><a href="<?php echo get_site_url().'/'.get_field('enquiry_link'); ?>" class="btn btn-warning btn-large mt-4"><?php echo get_field('enquiry_label') ?></a></span>  
                </div>
            </div>
        </div>
    </section>


    <section class="justabusiness p-v-60 text-white text-center" style="background: url(<?php echo get_field('more_than_just_business_background'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 text-center mt-5 mb-4 relative">
                    <span class="quote1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.png" alt="" class="img-fluid"></span>
                    <span class="quote2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/5.png" alt="" class="img-fluid"></span>
                    <h2 class="text-primary" class="mb-5"><?php echo get_field('more_than_just_business_heading'); ?><span class="aeroplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.png" alt="" class="img-fluid"></span></h2>

                      <?php echo get_field('more_than_just_business_text'); ?>

                             <h3 class="mt-5"><?php echo get_field('more_than_just_business_author'); ?></h3>
                </div>
            </div>
        </div>
    </section>


    <section class="contactparts p-v-80" style="background: url(<?php echo get_field('home_contact_us_background_first_image'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 justify-content-around">
                <div class="col-md-5 relative" style="background: url(<?php echo get_field('home_contact_us_background_second_image'); ?>) top left no-repeat; background-size: cover; border-radius: 30px;">
                    <div class="wrap mt-4 mb-4">
                       
                        <?php echo do_shortcode('[contact-form-7 id="311ea61" title="Home page form"]'); ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Contact Us</h3>
                    <h2  class="text-primary mb-3">Get In Touch..</h2>
                    <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/6.png" alt=""> Call 24/7 we are available!</p>
                    <h3 class="mt-4 mb-2">Our Address</h3>
             <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/7.png" alt=""> <?php echo get_field('address',$generalsettingsid); ?></p>
                    <p><a href="mailto:<?php echo get_field('email',$generalsettingsid); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/1.png" alt=""><?php echo get_field('email',$generalsettingsid); ?></a></p>   
                   <!-- <img src="images/map.png" alt="" class="img-fluid"> -->
                    <iframe src="<?php echo get_field('google_map_iframe_link',$generalsettingsid); ?>" width="506" height="253" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
                    
                </div>
            </div>
        </div>
    </section>
  
<?php get_footer(); 