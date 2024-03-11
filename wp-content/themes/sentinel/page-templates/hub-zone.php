<?php /* Template Name: Hub Zone */ 
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

    <section class="aircraftparts p-v-200" style="background: url(<?php echo get_field('hub_zone_approved_background_image'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-10 col-sm-8 col-md-6">
                    <div class="relative aircraftpartsImg">
                        <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="" class="img-fluid"></span>
                        <span class="aircraftpartsImgTop"><img src="<?php echo get_field('hub_zone_approved_first_image'); ?>" alt="" class="w-100"></span>
                        <img src="<?php echo get_field('hub_zone_approved_second_image'); ?>" alt="" class="w-100">
                        <span class="aircraftpartsImgBtm"><img src="<?php echo get_field('hub_zone_approved_third_image'); ?>" alt="" class="w-100"></span>
                    </div>
                </div>
                <div class="col-11 col-md-6">
                    <?php echo get_field('hub_zone_approved_text'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class=" pt-5 pb-5 text-white" style="background: url(<?php echo get_field('waiting_for_you_background_image'); ?>) no-repeat top left; background-size: cover;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6 col-md-12 relative text-center">
                   <?php echo get_field('waiting_for_you_text'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();  ?>    