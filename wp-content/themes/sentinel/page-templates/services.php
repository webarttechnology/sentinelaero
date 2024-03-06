<?php /* Template Name: Services */ 
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

   <section class="services p-v-60-300" style="background: url(<?php echo get_field('service_below_banner_background'); ?>) no-repeat bottom left; background-size: 100% auto;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2><?php echo get_field('services_heading_text'); ?></h2>
                </div>
                <div class="col-12 mt-4">
                    <?php $allservice = new WP_Query(array('post_type'=>'our-service','post_status'=>'publish','posts_per_page'=>-1)); ?>
                    <ul class="row lists justify-content-between mb-3">
                        <?php while($allservice->have_posts()):$allservice->the_post(); ?>

                        <li class="col-md-5"><?php the_title(); ?></li>
                    <?php endwhile;wp_reset_query(); ?>
                        
                    </ul>
                    <?php echo get_field('service_section_text'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class=" pt-5 pb-5 text-white" style="background: url(<?php echo get_field('working_for_you_background_image',$generalsettingsid); ?>) no-repeat top left; background-size: cover;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6 col-md-12 relative text-center">
                   <?php echo get_field('working_for_you_text',$generalsettingsid); ?>
                </div>
            </div>
        </div>
    </section> 

    <section class="recertifiedparts p-v-200" style="background: url(<?php echo get_field('unique_solutions_background_image'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 flex-lg-row-reverse">
                <div class="col-md-6">
                <div class="relative recertifiedpartsImg">
                    <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="" class="img-fluid"></span>
                    <span class="recertifiedpartsImgTop"><img src="<?php echo get_field('unique_solution_first_image'); ?>" alt="" class="w-100"></span>
                    <img src="<?php echo get_field('unique_solution_second_image'); ?>" alt="" class="w-100">
                    <span class="recertifiedpartsImgBtm"><img src="<?php echo get_field('unique_solution_third_image'); ?>" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-md-6">
                   <?php echo get_field('unique_solution_text'); ?>
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

<?php  get_footer(); ?>    