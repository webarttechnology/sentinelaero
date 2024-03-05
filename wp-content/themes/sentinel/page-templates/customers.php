<?php /* Template Name: Customers */ 
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

    <section class="aircraftparts p-v-200" style="background: url(<?php echo get_field('across_aerospace_background_image'); ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                <div class="relative aircraftpartsImg">
                    <span class="flyplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="" class="img-fluid"></span>
                    <span class="aircraftpartsImgTop"><img src="<?php echo get_field('across_aerospace_first_image'); ?>" alt="" class="w-100"></span>
                    <img src="<?php echo get_field('across_aerospace_second_image'); ?>" alt="" class="w-100">
                    <span class="aircraftpartsImgBtm"><img src="<?php echo get_field('across_aerospace_third_image'); ?>" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-md-6">
                    <?php echo get_field('across_aerospace_full_text_'); ?> 
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

    <section class="p-v-80">
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-5"><?php echo get_field('why_are_we_trusted_title'); ?></h2>
            </div>
           <div class="row">
            <?php $eachtrustitem = CFS()->get('each_trust_item_repeat');
                foreach($eachtrustitem as $singletrustitem){
             ?>
            <div class="col-sm-6 col-md-6 box mb-3">
                    <span><i class="<?php echo $singletrustitem['item_fa']; ?>"></i></span>
                    <h4><?php echo $singletrustitem['item_title']; ?></h4>
                    <?php echo $singletrustitem['item_text']; ?>
                </div>
            <?php } ?>
               
           </div>
        </div>
    </section>

<?php 
get_footer();