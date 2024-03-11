<?php /* Template Name: About */ 
 get_header(); 

$page_slug = 'site-general-settings';
  $generalsettingsid = get_id_by_slug($page_slug);
 ?>

  <section class="banner innerBanner" style="background: url(<?php echo get_field('inner_banner'); ?>) no-repeat top left;">
        <div class="container">
            <div class="row relative">
                <div class="col-sm-12 col-md-8">
                    <h1 class="banner_heading mb-4"><?php echo get_field('breadcrumb_title_text'); ?>
                     <span class="aeroplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/3.png" alt="" class="img-fluid"></span>
                    </h1>    
                </div>
            </div>
        </div>
    </section>


    <section class="aircraftparts p-v-200" style="background: url(<?php echo get_field('about_background_image'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-10 col-sm-8 col-md-6">
                <div class="relative aircraftpartsImg">
                    <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="" class="img-fluid"></span>
                    <span class="aircraftpartsImgTop"><img src="<?php echo get_field('about_first_image'); ?>" alt="" class="w-100"></span>
                    <img src="<?php echo get_field('about_second_image'); ?>" alt="" class="w-100">
                    <span class="aircraftpartsImgBtm"><img src="<?php echo get_field('about_third_image'); ?>" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-11 col-md-6">
                 <?php echo get_field('about_section_text'); ?>  
                        
                </div>
            </div>
        </div>
    </section>

    <section class="support pt-5 pb-5 text-white" style="background: url(<?php echo get_field('24x7_background_image',$generalsettingsid); ?>) no-repeat top left; background-size: cover;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-md-5 text-center">
                    <h3><?php echo get_field('24by_7_support_text',$generalsettingsid); ?></h3>
                </div>
                <div class="col-10 col-md-4 relative">
              <h5><a href="tel:<?php echo get_field('phone',$generalsettingsid); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/2.png" alt=""><?php echo get_field('phone',$generalsettingsid); ?></a></h5>
                    <h5><a href="mailto:<?php echo get_field('email',$generalsettingsid); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/1.png" alt=""><?php echo get_field('email',$generalsettingsid); ?></a></h5>
                </div>
            </div>
        </div>
    </section>

    <section class="recertifiedparts p-v-200" style="background: url(<?php echo get_field('what_we_offer_background_image'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 flex-lg-row-reverse justify-content-center">
                <div class="col-10 col-sm-8 col-md-6">
                <div class="relative recertifiedpartsImg">
                    <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="" class="img-fluid"></span>
                    <span class="recertifiedpartsImgTop"><img src="<?php echo get_field('what_we_offer_first_image'); ?>" alt="" class="w-100"></span>
                    <img src="<?php echo get_field('what_we_offer_second_image'); ?>" alt="" class="w-100">
                    <span class="recertifiedpartsImgBtm"><img src="<?php echo get_field('what_we_offer_third_image'); ?>" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-11 col-md-6">
                    <?php echo get_field('what_we_offer_text'); ?>
                        
                        <span><a href="<?php echo get_site_url().'/'. get_field('what_we_offer_enquiry_link'); ?>" class="btn btn-warning btn-large mt-4"><?php echo get_field('what_we_offer_enquiry_label'); ?></a></span>  
                </div>
            </div>
        </div>
    </section>

    <section class="aircraftparts p-v-200">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-10 col-sm-8 col-md-6">
                    <div class="relative aircraftpartsImg">
                        <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="" class="img-fluid"></span>
                        <span class="aircraftpartsImgTop"><img src="<?php echo get_field('much_more_than_just_parts_first_image'); ?>" alt="" class="w-100"></span>
                        <img src="<?php echo get_field('much_more_that_just__part_second_image'); ?>" alt="" class="w-100">
                        <span class="aircraftpartsImgBtm"><img src="<?php echo get_field('much_more_than_just_parts_third_image'); ?>" alt="" class="w-100"></span>
                    </div>
                </div>
                <div class="col-11 col-md-6">
                <?php echo get_field('much_more_that_just_part_text'); ?> 
                </div>
            </div>
        </div>
    </section>


  <section class="justabusiness p-v-60 text-white text-center" style="background: url(<?php echo get_field('testimonial_background_image',$generalsettingsid); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 text-center mt-5 mb-4 relative">
                    <span class="quote1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.png" alt="" class="img-fluid"></span>
                    <span class="quote2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/5.png" alt="" class="img-fluid"></span>
                    <h2 class="text-primary" class="mb-5"><?php echo get_field('testimonial_heading',$generalsettingsid); ?></h2>
                        
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                        <?php $alltestimonials = new WP_Query(array('post_type'=>'our-testimonials','post_status'=>'publish','posts_per_page'=>-1));
                            $testtmocount = 0;
                            while($alltestimonials->have_posts()):$alltestimonials->the_post();
                                if($testtmocount==0)
                                {
                         ?>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $testtmocount;  ?>" class="active"></button>
                           <?php 
                       }
                       else
                       {
                        ?>
                         <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $testtmocount;  ?>" ></button>
                        <?php 
                       }
                              $testtmocount++;
                       endwhile;wp_reset_query(); ?>
                      
                       
                        </div>

                          <?php $alltestimonials2 = new WP_Query(array('post_type'=>'our-testimonials','post_status'=>'publish','posts_per_page'=>-1));
                            $testtmocount2 = 0;
                            ?>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <?php while($alltestimonials2->have_posts()):$alltestimonials2->the_post();
                            
                               if($testtmocount2==0)
                               {
                             ?>

                            <div class="carousel-item active">
                               <?php the_content(); ?>
                                <h3 class="mt-2"><?php the_title(); ?></h3>
                            </div>
                        <?php 
                             }
                            else
                            {
                                ?>
                                 <div class="carousel-item">
                                        <?php the_content(); ?>
                                        <h3 class="mt-2"><?php the_title(); ?></h3>
                                    </div>
                                <?php 
                            }
                         $testtmocount2++;
                   
                    endwhile;wp_reset_query(); ?>
                           
                        </div>

                         <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                         <span class="carousel-control-next-icon"></span>
                        </button> 

                       
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>    