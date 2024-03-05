<?php /* Template Name: Contact */ 
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


    <section class="p-v-80">
        <div class="container">
            <div class="row justify-content-center align-items-center">
            <div class="row">
                <div class="col-12">
                <h2 class="mb-3"><?php echo get_field('contact_page_contact_heading'); ?></h2>
                </div>
                <div class="col-md-6">
                    <div class="infoBox mt-4">
                        <label for=""><?php echo get_field('office_address_heading'); ?></label>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p><?php echo get_field('address',$generalsettingsid);  ?></p>
                    </div>
                    <div class="infoBox mt-4">
                        <label for=""><?php echo get_field('phone_heading'); ?></label>
                        <span><i class="fa-solid fa-phone-volume"></i></span>
                        <p><a href="tel:<?php echo get_field('phone',$generalsettingsid);  ?>"><?php echo get_field('phone',$generalsettingsid);  ?></a></p>
                    </div>
                    <div class="infoBox mt-4">
                        <label for=""><?php echo get_field('email_heading'); ?></label>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <p><a href="mailto:<?php echo get_field('email',$generalsettingsid);  ?>"><?php echo get_field('email',$generalsettingsid);  ?></a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="mt-4"><?php echo get_field('reach_us_heading'); ?></h3>
                    <div class="row">
                     
                        <?php echo do_shortcode('[contact-form-7 id="d9e1cf9" title="contact page form"]'); ?>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

<?php get_footer();  ?>    