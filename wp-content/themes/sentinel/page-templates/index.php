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

    <section class="recertifiedparts p-v-200" style="background: url(images/recertifiedbg.jpg) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 flex-lg-row-reverse">
                <div class="col-md-6">
                <div class="relative aircraftpartsImg">
                    <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="" class="img-fluid"></span>
                    <span class="recertifiedpartsImgTop"><img src="images/recertified2.jpg" alt="" class="w-100"></span>
                    <img src="images/recertified1.jpg" alt="" class="w-100">
                    <span class="recertifiedpartsImgBtm"><img src="images/aircraftparts3.jpg" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5"><span style="color: var(--secondary-color);">New and 
                        Recertified 
                        </span> Aircraft Parts 
                        For Your Fleet..</h2>
                    <p>Sentinel Aerospace is a well-known and trusted parts supplier to the global 
                        aviation aftermarket components industry.<br><br>
                        
                        It is our goal to help our customers develop customized solutions for their 
                        daily business operations. We provide innovative and cost-effective ways 
                        for our clients to handle the maintenance of their aircraft.
                        </p>   
                        
                        <span><a href="#" class="btn btn-warning btn-large mt-4">Enquiry</a></span>  
                </div>
            </div>
        </div>
    </section>


    <section class="justabusiness p-v-60 text-white text-center" style="background: url(images/justabusiness.jpg) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 text-center mt-5 mb-4 relative">
                    <span class="quote1"><img src="images/4.png" alt="" class="img-fluid"></span>
                    <span class="quote2"><img src="images/5.png" alt="" class="img-fluid"></span>
                    <h2 style="color: var(--secondary-color);" class="mb-5">More Than Just <br>
                        Business! <span class="aeroplane"><img src="images/3.png" alt="" class="img-fluid"></span></h2>

                        <p>As a Company, we believe it is important not only to satisfy the demands of our customers, but also to give 
                            back to the world around us. That is why upon request, a portion of the proceeds from every order is 
                            donated to a charity, in your company’s name. Don’t have your favorite charity? Then we will 
                            donate to a deserving charity for you.“We make a living by what we
                             get, but we make a life with what we give.”</p>

                             <h3 class="mt-5">Winston Churchill</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="contactparts p-v-80" style="background: url(images/contactusbg.jpg) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 justify-content-around">
                <div class="col-md-5 relative" style="background: url(images/requestapart.jpg) top left no-repeat; background-size: cover; border-radius: 30px;">
                    <div class="wrap mt-4 mb-4">
                        <h3>Request a part</h3>
                        <div class="mb-2 mt-2">
                            <label for="" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="" placeholder="" name="">
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="" placeholder="" name="">
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="" class="form-label">Message:</label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10" style="height: 200px;"></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-warning">Submit</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Contact Us</h3>
                    <h2 style="color: var(--secondary-color);" class="mb-3">Get In Touch..</h2>
                    <p><img src="images/icons/6.png" alt=""> Call 24/7 we are available!</p>
                    <h3 class="mt-4 mb-2">Our Address</h3>
                    <p><img src="images/icons/7.png" alt=""> 955 South Bogle Avenue<br>
                        Chandler, AZ 85225</p>
                    <p><a href="#"><img src="images/icons/1.png" alt=""> Sales@sentinelaero.com</a></p>   
                    <img src="images/map.png" alt="" class="img-fluid"> 
                    
                </div>
            </div>
        </div>
    </section>


  
<?php get_footer(); 